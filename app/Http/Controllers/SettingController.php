<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::first();
        $users = User::all();
        $data = ['settings'=> $settings, 'users'=> $users];


        if($settings){
            return view('admin.settings.create')->with($data);
        }
       else {
           $settings = Setting::first();
           $data = ['users'=> $users, 'settings'=> $settings];
           return view('admin.settings.index')->with($data);
       }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.create', ['users'=> User::all(), 'settings'=>Setting::all()]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $title = $request->get('title');
            $mainurl = $request->get('mainurl');
            $email = $request->get('email');
            $description = $request->get('description');
            $logo = $request->get('logo');
            $phone = $request->get('phone');
            $address = $request->get('address');
            $twitter = $request->get('twitter');
            $facebook = $request->get('facebook');
            $skype = $request->get('skype');
            $linkedin = $request->get('linkedin');
            $youtube = $request->get('youtube');
            $flickr = $request->get('flickr');
            $pinterest = $request->get('pinterest');
            $lat = $request->get('lat');
            $lng = $request->get('lng');
            $user_id = $request->user()->id;




            Setting::create([
               'title'=> $title,
               'mainurl'=> $mainurl,
               'email'=> $email,
               'description'=> $description,
               'logo' => $logo,
               'phone' => $phone,
               'address' => $address,
               'twitter'=> $twitter,
               'facebook'=> $facebook,
               'skype'=> $skype,
               'linkedin'=> $linkedin,
               'youtube'=> $youtube,
               'flickr'=> $flickr,
               'pinterest'=> $pinterest,
                'lat' => $lat,
                'lng' => $lng,
                'user_id'=> $user_id

            ]);

            return redirect()->route('settings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
