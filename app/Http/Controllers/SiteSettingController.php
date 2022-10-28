<?php

namespace App\Http\Controllers;

use App\Models\Seo;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Image;

class SiteSettingController extends Controller
{
    public function SiteSetting()
    {
        $setting = SiteSetting::find(1);
        return view('admin.setting.setting_update', compact('setting'));
    }

    public function SiteSettingUpdate(Request $request)
    {
        $setting_id = $request->id;

        if ($request->file('logo')) {
            $image = $request->file('logo');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(400, 400)->save('uploads/logo/' . $name_gen);
            $save_url = 'uploads/logo/' . $name_gen;

            SiteSetting::findOrFail($setting_id)->update([
                'phone_one' => $request->phone_one,
                'phone_two' => $request->phone_two,
                'email' => $request->email,
                'ecole_name' => $request->ecole_name,
                'ecole_address' => $request->ecole_address,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin,
                'youtube' => $request->youtube,
                'logo' => $save_url,
            ]);

            $notification = array(
                'message' => 'Paramètres du Site Mis à jour avec Succès',
                'alert-type' => 'info'
            );

            return redirect()->back()->with($notification);
        } else {
            SiteSetting::findOrFail($setting_id)->update([
                'phone_one' => $request->phone_one,
                'phone_two' => $request->phone_two,
                'email' => $request->email,
                'ecole_name' => $request->ecole_name,
                'ecole_address' => $request->ecole_address,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin,
                'youtube' => $request->youtube,
            ]);

            $notification = array(
                'message' => 'Paramètres du Site Mis à jour avec succès !',
                'alert-type' => 'info'
            );

            return redirect()->back()->with($notification);
        }
    }



    public function SeoSetting()
    {
        $seo = Seo::find(1);
        return view('admin.setting.seo_update', compact('seo'));
    }

    public function SeoSettingUpdate(Request $request)
    {
        $seo_id = $request->id;
        Seo::findOrFail($seo_id)->update([
            'meta_title' => $request->meta_title,
            'meta_author' => $request->meta_author,
            'meta_keyword' => $request->meta_keyword,
            'meta_description' => $request->meta_description,
            'google_analytics' => $request->google_analytics,
        ]);

        $notification = array(
            'message' => 'Paramètres de référencement Mis à jour avec Succès !',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    }
}