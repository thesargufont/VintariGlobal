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
        if (!empty($request->lang) ) {
            App::setLocale($request->lang);
            session()->put('locale', $request->lang);  
            $locale = $request->lang;
        }else{
            $locale = session()->get('locale');
            if (empty($locale)){
                $locale = 'id';
            }
            App::setLocale($locale);
        }
        
        if ($locale == 'en') {
            $Banners = Banner::select('header_en as header', 'desc1_en as desc1' , 'desc2_en as desc2', 'image_path as image_path')->get();
            $About = About::select('history_en as history', 'visi_en as visi', 'misi_en as misi' , 'image_path', 'url_alibaba', 'telp', 'email', 'product_sold', 'countries_sold', 'client')->first();
            $Products = Product::select('title as title', 'description_en as description', 'image_path1', 'countries_id', 'categories_id')->where('best_selling', '=', '1')->get()->chunk(4)->take(8);
        } else {
            $Banners = Banner::select('header as header', 'desc1 as desc1' , 'desc2 as desc2', 'image_path as image_path')->get();
            $About = About::select('history as history', 'visi as visi', 'misi as misi' , 'image_path', 'url_alibaba', 'telp', 'email', 'product_sold', 'countries_sold', 'client')->first();
            $Products = Product::select('title as title', 'description as description', 'image_path1', 'countries_id','categories_id')->where('best_selling', '=', '1')->get()->chunk(4)->take(8);
        }
        $Brands = Brand::all()->chunk(6);
        return view('vintari.welcome', [
            'Activetab'      => 'Home',
            'Banners'        => $Banners,
            'About'          => $About,
            'BrandsArr'      => $Brands,
            'Products'       => $Products
        ]);
        
    }

    public function about() {
        $locale = session()->get('locale');
        App::setLocale($locale);
        if ($locale == 'en') {
            $About = About::select('history_en as history', 'visi_en as visi', 'misi_en as misi' , 'image_path', 'url_alibaba', 'telp', 'email', 'product_sold', 'countries_sold', 'client')->first();
        } else {
            $About = About::select('history as history', 'visi as visi', 'misi as misi' , 'image_path', 'url_alibaba', 'telp', 'email', 'product_sold', 'countries_sold', 'client')->first();
        }
        $Countries = Country::All()->chunk(6);
        return view('vintari.about',[
            'Activetab'     => 'About',
            'About'         => $About,
            'CountriesArr'     => $Countries,
        ]);       
    }

    public function product() {
        $locale = session()->get('locale');
        App::setLocale($locale);
        if ($locale == 'en') {

        } else {

        }
        return view('vintari.product');
    }

    public function activity() {
        $locale = session()->get('locale');
        App::setLocale($locale);
        if ($locale == 'en') {
            $Activities = Activity::select('id','title_en as title', 'articles_en as articles', 'image_path1' , 'image_path2' , 'image_path3' , 'created_at')->paginate(10);
        } else {
            $Activities = Activity::select('id' ,'title as title', 'articles as articles', 'image_path1' , 'image_path2' , 'image_path3' , 'created_at')->paginate(10);
        }
        // dd($Activities->links()	);
        return view('vintari.activity', [
            'Activetab'      => 'Activity',
            'Activities'     => $Activities
        ]); 
    }
    public function faq() {
        $locale = session()->get('locale');
        App::setLocale($locale);
        if ($locale == 'en') {
            $Faqs = Faq::select('question_en as question', 'answer_en as answer')->get();
        } else {
            $Faqs = Faq::select('question as question', 'answer as answer')->get();
        }   
        return view('vintari.faq', [
            'Activetab'      => 'Faq',
            'Faqs'        => $Faqs
            ]); 
    }

    public function contact() {
        $locale = session()->get('locale');
        App::setLocale($locale);
        if ($locale == 'en') {
            $About = About::select('history_en as history', 'visi_en as visi', 'misi_en as misi' , 'image_path', 'url_alibaba', 'telp', 'email', 'product_sold', 'countries_sold', 'client')->first();
        } else {
            $About = About::select('history as history', 'visi as visi', 'misi as misi' , 'image_path', 'url_alibaba', 'telp', 'email', 'product_sold', 'countries_sold', 'client')->first();
        }
        return view('vintari.contact',[
            'Activetab' => 'Contact',
            'About'     => $About,
        ]);
    }

    public function singleActivity($var) {
        $locale = session()->get('locale');
        App::setLocale($locale);
        if ($locale == 'en') {
            $Activity = Activity::select('id','title_en as title', 'articles_en as articles', 'image_path1' , 'image_path2' , 'image_path3' , 'created_at')->find($var);
        } else {
            $Activity = Activity::select('id','title as title', 'articles as articles', 'image_path1' , 'image_path2' , 'image_path3' , 'created_at')->find($var);
        }

        return view('vintari.activitySingle',[
            'Activetab' => 'Activity',
            'Activity'     => $Activity,
        ]);
    }

}