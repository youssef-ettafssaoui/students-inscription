<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormationPostRequest;
use App\Models\Categorie;
use App\Models\Formation;
use App\Models\Gerant;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function __construct()
    {
        $this->middleware('gerant', ['except' => array('index', 'show', 'apply', 'allFormations', 'searchFormations')]);
    }

    public function index()
    {
        $formations = Formation::latest()->limit(10)->where('status', 1)->get();
        $categories = Categorie::with('formations')->get();
        $posts = Post::where('status', 1)->get();
        $testimonial = Testimonial::orderBy('id', 'DESC')->first();
        $gerants = Gerant::get()->random(12);
        return view('welcome', compact('formations', 'gerants', 'categories', 'posts', 'testimonial'));
    }

    public function show($id, Formation $formation)
    {
        $formationRecommendations = $this->formationRecommendations($formation);
        return view('formations.show', compact('formation', 'formationRecommendations'));
    }

    public function formationRecommendations($formation)
    {

        $data = [];

        $formationsBasedOnCategories = Formation::latest()->where('category_id', $formation->category_id)
            ->whereDate('last_date', '>', date('Y-m-d'))
            ->where('id', '!=', $formation->id)
            ->where('status', 1)
            ->limit(6)
            ->get();
        array_push($data, $formationsBasedOnCategories);

        $formationBasedOnGerant = Formation::latest()
            ->where('gerant_id', $formation->gerant_id)
            ->whereDate('last_date', '>', date('Y-m-d'))
            ->where('id', '!=', $formation->id)
            ->where('status', 1)
            ->limit(6)
            ->get();
        array_push($data, $formationBasedOnGerant);

        $formationBasedOnTitle = Formation::where('title', 'LIKE', '%' . $formation->title . '%')
            ->where('id', '!=', $formation->id)
            ->where('status', 1)
            ->limit(6);
        array_push($data, $formationBasedOnTitle);

        $collection  = collect($data);
        $unique = $collection->unique("id");
        $formationRecommendations =  $unique->values()->first();
        return $formationRecommendations;
    }

    public function gerant()
    {
        return view('gerant.index');
    }

    public function maformation()
    {
        $formations = Formation::where('user_id', auth()->user()->id)->get();
        return view('formations.maformation', compact('formations'));
    }

    public function edit($id)
    {
        $formation = Formation::findOrFail($id);
        return view('formations.edit', compact('formation'));
    }

    public function update(FormationPostRequest $request, $id)
    {
        $formation = Formation::findOrFail($id);
        $formation->update($request->all());
        return redirect()->back()->with('message', 'Formation mise à jour avec succès !');
    }
    public function applicant()
    {
        $applicants = Formation::has('users')->where('user_id', auth()->user()->id)->get();
        return view('formations.applicants', compact('applicants'));
    }

    public function create()
    {
        return view('formations.create');
    }
    public function  store(FormationPostRequest $request)
    {
        $user_id = auth()->user()->id;
        $gerant = Gerant::where('user_id', $user_id)->first();
        $gerant_id = $gerant->id;
        Formation::create([
            'user_id' => $user_id,
            'gerant_id' => $gerant_id,
            'title' => request('title'),
            'slug' => str_slug(request('title')),
            'description' => request('description'),
            'texte' => request('texte'),
            'category_id' => request('category'),
            'type' => request('type'),
            'status' => request('status'),
            'last_date' => request('last_date'),
            'masse_horraire' => request('masse_horraire')
        ]);
        return redirect()->back()->with('message', 'Formation publié avec succès !');
    }

    public function apply(Request $request, $id)
    {
        $formationId = Formation::find($id);
        $formationId->users()->attach(Auth::user()->id);
        return redirect()->back()->with('message', 'Candidature a été envoyé avec succès !');
    }

    public function allFormations(Request $request)
    {
        // Page Accueil - Search
        $search = $request->get('search');
        if ($search) {
            $formations = Formation::where('title', 'LIKE', '%' . $search . '%')
                ->orWhere('type', 'LIKE', '%' . $search . '%')
                ->paginate(20);

            return view('formations.allformations', compact('formations'));
        }
        $keyword = $request->get('title');
        $type = $request->get('type');
        $category = $request->get('category_id');
        if ($keyword || $type || $category) {
            $formations = Formation::where('title', 'LIKE', '%' . $keyword . '%')
                ->orWhere('type', $type)
                ->orWhere('category_id', $category)
                ->paginate(20);
            return view('formations.allformations', compact('formations'));
        } else {
            $formations = Formation::latest()->paginate(20);
            return view('formations.allformations', compact('formations'));
        }
    }
    public function searchFormations(Request $request)
    {
        $keyword = $request->get('keyword');
        $users = Formation::where('title', 'like', '%' . $keyword . '%')
            ->limit(5)->get();
        return response()->json($users);
    }
}