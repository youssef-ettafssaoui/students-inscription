<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Formation;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($id)
    {
        $formations = Formation::where('category_id', $id)->paginate(20);
        $categoryName = Categorie::where('id', $id)->first();
        return view('formations.formations-category', compact('formations', 'categoryName'));
    }
}