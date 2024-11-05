<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        return view("home.index");
    }
    public function aboutus()
    {
        return view('home.about');
    }
    public function services()
    {
        return view("home.services");
    }
    public function servicessafaris()
    {
        return view("home.safaris");
    }
    public function servicestrekking()
    {
        return view("home.trekking");
    }
    public function servicesbeach()
    {
        return view("home.beach");
    }
    public function userprofile($id)
    {
        $user = User::find($id);
        return view("home.userProfile"  , ["user"=>$user]);
    }
    public function contactUs()
    {
        return view("home.contact");
    }
    public function reviews()
    {
        return view('home.reviews');
    }
    public function addreviews() {}
}
