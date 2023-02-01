<?php

namespace App\Http\Controllers\Vintari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use Illuminate\Support\Facades\Input;
use App\Models\Faq;
use App\Models\User;
use App\Models\About;
use App\Models\Brand;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\Country;
use App\Models\Product;
use App\Models\Activity;
use App\Models\Category;


class HomeController extends Controller
{

    public function langChange(Request $request) {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);  
        return view('vintari.welcome');
    }

    public function about() {
        $locale = session()->get('locale');
        if ($locale == 'en') {

        } else {

        }
        
       return view('vintari.about');        
    }

    public function product() {
        $locale = session()->get('locale');
        if ($locale == 'en') {

        } else {

        }
        return view('vintari.product');
    }

    public function activity() {
        $locale = session()->get('locale');
        if ($locale == 'en') {

        } else {

        }
        return view('vintari.activity');
    }
    public function faq() {
        $locale = session()->get('locale');
        if ($locale == 'en') {

        } else {

        }
        return view('vintari.faq');
    }

    public function contact() {
        $locale = session()->get('locale');
        if ($locale == 'en') {

        } else {

        }
        return view('vintari.contact');
    }

}