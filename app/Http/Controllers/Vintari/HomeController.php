<?php

namespace App\Http\Controllers\Vintari;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

            $url = url()->previous();
            $route = app('router')->getRoutes($url)->match(app('request')->create($url))->getName();
            return redirect()->route($route);
        }else{
            $locale = session()->get('locale');
            if (empty($locale)){
                $locale = 'en';
                session()->put('locale', 'id');  
            }
            App::setLocale($locale);
            if ($locale == 'en') {
                $Banners = Banner::select('header_en as header', 'desc1_en as desc1' , 'desc2_en as desc2', 'image_path as image_path')->get();
                $About = About::select('history_en as history', 'visi_en as visi', 'misi_en as misi' , 'image_path', 'url_alibaba', 'telp', 'email', 'product_sold', 'countries_sold', 'client')->first();
                $Products = Product::select('id' , 'title as title', 'description_en as description', 'image_path1', 'countries_id', 'categories_id')->where('best_selling', '=', '1')->get()->chunk(4)->take(5);
            } else {
                $Banners = Banner::select('header as header', 'desc1 as desc1' , 'desc2 as desc2', 'image_path as image_path')->get();
                $About = About::select('history as history', 'visi as visi', 'misi as misi' , 'image_path', 'url_alibaba', 'telp', 'email', 'product_sold', 'countries_sold', 'client')->first();
                $Products = Product::select('id' , 'title as title', 'description as description', 'image_path1', 'countries_id','categories_id')->where('best_selling', '=', '1')->get()->chunk(4)->take(53);
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
        
        
    }

    public function about() {
        $locale = session()->get('locale');

        App::setLocale($locale);
        if ($locale == 'en') {
            $About = About::select('history_en as history', 'visi_en as visi', 'misi_en as misi' , 'image_path', 'url_alibaba', 'telp', 'email', 'product_sold', 'countries_sold', 'client')->first();
            $Countries = Country::select('name_en as name', 'image_path')->get()->chunk(6);
        } else {
            $About = About::select('history as history', 'visi as visi', 'misi as misi' , 'image_path', 'url_alibaba', 'telp', 'email', 'product_sold', 'countries_sold', 'client')->first();
            $Countries = Country::select('name as name', 'image_path')->get()->chunk(6);
        }
        // $Countries = Country::All()->chunk(6);
        return view('vintari.about',[
            'Activetab'     => 'About',
            'About'         => $About,
            'CountriesArr'     => $Countries,
        ]);       
    }

    public function product($Country_id = '') {
        $locale = session()->get('locale');
        $Categories_post ='';
        if (!empty(request()->get('category'))) {
            $Categories_post = (explode("-",request()->get('category')));
        }
        
        App::setLocale($locale);
        if ($locale == 'en') {
            if (!empty($Country_id)){
                $Products = Product::select('id' , 'title', 'description_en as description' , 'image_path1', 'categories_id', 'countries_id')->where('countries_id', $Country_id);
            }else{
                $Products = Product::select('id' , 'title', 'description_en as description' , 'image_path1', 'categories_id', 'countries_id')->paginate(12);
            }
            $Categories = Category::select('id', 'name_en as name' )->get();
            $Countries = Country::select('id', 'name_en as name' , 'image_path' ,'created_by','created_at','updated_by','updated_at')->get();;
        } else {
            if (!empty($Country_id)){
                $Products = Product::select('id' , 'title', 'description as description' , 'image_path1', 'categories_id', 'countries_id')->where('countries_id', $Country_id);
            }else{
                $Products = Product::select('id' , 'title', 'description as description' , 'image_path1', 'categories_id', 'countries_id')->paginate(12);
            }

            if (!empty($Categories_post)) {
                $Products = $Products->whereIn('categories_id',$Categories_post);
            }
            $Products = $Products->paginate(12);
            $Categories = Category::select('id', 'name as name' )->get();
            $Countries = Country::select('id', 'name as name' , 'image_path' ,'created_by','created_at','updated_by','updated_at')->get();;
        }
        
        return view('vintari.product',[
            'Activetab'         => 'Product',
            'Products'          => $Products,
            'Categories'        => $Categories,
            'Countries'         => $Countries,
            'Countries_id'      => $Country_id,
            'Categories_post'   => $Categories_post
        ]);
    }

    public function activity() {
        $locale = session()->get('locale');
        App::setLocale($locale);
        if ($locale == 'en') {
            $Activities = Activity::select('id','title_en as title', 'articles_en as articles', 'image_path1' , 'image_path2' , 'image_path3' , 'created_at')->paginate(10);
        } else {
            $Activities = Activity::select('id' ,'title as title', 'articles as articles', 'image_path1' , 'image_path2' , 'image_path3' , 'created_at')->paginate(10);
        }
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

    public function contact(Request $request) {
        $message = '';
        $success = '';
        if($request->isMethod('post')){
            $today  = Carbon::now();
            try {
                $insert = new contact([
                    'name'          => $request->post('name'),
                    'email'         => $request->post('mail'),
                    'message'       => $request->post('message'),
                    'created_by'    => '',
                    'created_at'    => $today,
                    'updated_by'    => '',
                    'updated_at'    => $today,
                ]);
                $insert->save();
            } catch (Execption $e) {
                DB::rollback();
                $message   = $e->getMessage();
                $success   = false;
            }
            DB::commit();
            $message   = ucfirst(__('vintari.success_send_message'));
            $success   = true;
        }


        
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
            'Message'   => $message,
            'Success'   => $success
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

    public function productPost($Country_id = '',Request $request) {
    $Categories_post = $request->post('categories');
       $locale = session()->get('locale');
        
        App::setLocale($locale);
        if ($locale == 'en') {
            if (!empty($Country_id)){
                $Products = Product::select('id', 'title', 'description_en as description' , 'image_path1', 'categories_id', 'countries_id')->where('countries_id', $Country_id)->whereIn('categories_id',$Categories_post)->paginate(12);
            }else{
                $Products = Product::select('id' , 'title', 'description_en as description' , 'image_path1', 'categories_id', 'countries_id')->whereIn('categories_id',$Categories_post)->paginate(12);
            }
            $Categories = Category::select('id', 'name_en as name' )->get();
            $Countries = Country::select('id', 'name as name' , 'image_path' ,'created_by','created_at','updated_by','updated_at')->get();;
        } else {
            if (!empty($Country_id)){
                $Products = Product::select('id' , 'title', 'description as description' , 'image_path1', 'categories_id', 'countries_id')->where('countries_id', $Country_id)->whereIn('categories_id',$Categories_post)->paginate(12);
            }else{
                $Products = Product::select('id' , 'title', 'description as description' , 'image_path1', 'categories_id', 'countries_id')->whereIn('categories_id',$Categories_post)->paginate(12);
            }
            $Categories = Category::select('id', 'name as name' )->get();
            $Countries = Country::select('id', 'name as name' , 'image_path' ,'created_by','created_at','updated_by','updated_at')->get();;
        }

        return view('vintari.product',[
            'Activetab'         => 'Product',
            'Products'          => $Products,
            'Categories'        => $Categories,
            'Countries'         => $Countries,
            'Countries_id'      => $Country_id,
            'Categories_post'   => $Categories_post
        ]);
    }
    public function singleProduct($var) {
        $locale = session()->get('locale');
        App::setLocale($locale);
        if ($locale == 'en') {
            $Product = Product::select('products.categories_id','products.countries_id', 'products.title', 'products.description_en as description' , 'products.image_path1' , 'products.image_path2' , 'products.image_path3' , 'products.image_path4' , 'products.image_path5', 'categories.name_en as categoryname', 'countries.name_en as countryname')->join('categories', 'products.categories_id', '=', 'categories.id')->join('countries', 'products.countries_id', '=', 'countries.id')->find($var);
        } else {
            $Product = Product::select('products.categories_id','products.countries_id', 'products.title', 'products.description as description' , 'products.image_path1' , 'products.image_path2' , 'products.image_path3' , 'products.image_path4' , 'products.image_path5', 'categories.name as categoryname', 'countries.name as countryname')->join('categories', 'products.categories_id', '=', 'categories.id')->join('countries', 'products.countries_id', '=', 'countries.id')->find($var);
        }
        
        $bestSellProds = Product::select('id' , 'title as title', 'description_en as description', 'image_path1', 'countries_id', 'categories_id')->where('best_selling', '=', '1')->get()->chunk(4)->take(5);
   
        return view('vintari.productSingle',[
            'Activetab'             => 'Products',
            'BestSellProdArr'       => $bestSellProds,
            'Product'               => $Product
        ]);
    }
    

}