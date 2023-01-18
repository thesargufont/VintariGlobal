<?php

namespace App\Http\Controllers\Vintari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use Log;
use Excel;
use Datatables;

use Carbon\Carbon;

use App\Models\User;
use App\Models\About;
use App\Models\Activity;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Country;
use App\Models\Faq;
use App\Models\Product;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vintari.admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($var)
    {
        if (strtoupper($var) == 'BANNERS') {
           $create = 'BANNERS';
        } else if (strtoupper($var) == 'BRANDS') {
            $create = 'BRANDS';
        } else if (strtoupper($var) == 'ABOUTS') {
            $create = 'ABOUTS';
        } else if (strtoupper($var) == 'PRODUCT') {
            $create = 'PRODUCT';
        } else if (strtoupper($var) == 'CATEGORY') {
            $create = 'CATEGORY';
        } else if (strtoupper($var) == 'COUNTRIES') {
            $create = 'COUNTRIES';
        } else if (strtoupper($var) == 'ACTIVITES') {
            $create = 'ACTIVITES';
        } else if (strtoupper($var) == 'FAQS') {
            $create = 'FAQS';
        } else if (strtoupper($var) == 'CONTACTS') {
            $create = 'CONTACTS';
        } else if (strtoupper($var) == 'USER') {
            $create = 'USER';
        }

        return view ('vintari.admin.form_input', [
            'create'        => true,
            'show'          => false,
            'edit'          => false,
            'create'        => $create
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = $request->create;
        DB::beginTransaction();
        $user   = Auth::user()->id;
        $today  = Carbon::now();
        try {
            if ($create == 'BANNERS') {
                $header     = $request->header;
                $headerEn   = $request->header;
                $desc1      = $request->desc1;
                $desc1En    = $request->desc1_en;
                $desc2      = $request->desc2;
                $desc2En    = $request->desc2_en;

                $insert = new Banner([
                    'header'        => $header,
                    'header_en'     => $headerEn,
                    'desc1'         => $desc1,
                    'desc1_en'      => $desc1En,
                    'desc2'         => $desc2,
                    'desc2_en'      => $desc2En,
                    'image_path'    => '',
                    'created_by'    => $user,
                    'created_at'    => $today,
                    'updated_by'    => $user,
                    'updated_at'    => $today,
                ]);
                
            } else if ($create == 'BRANDS') {
                $name   = $request->name;
                $insert = new Brand([
                    'name'        => $name,
                    'image_path'    => '',
                    'created_by'    => $user,
                    'created_at'    => $today,
                    'updated_by'    => $user,
                    'updated_at'    => $today,
                ]);
            } else if ($create == 'ABOUTS') {
               $history         = $request->history;
               $historyEn       = $request->history_en;
               $visi            = $request->visi;
               $visiEn          = $request->visi_en;
               $misi            = $request->misi;
               $misiEn          = $request->misi_en;
               $urlAlibaba      = $request->url_alibaba;
               $telpon          = $request->telpon;
               $email           = $request->email;
               $productSold     = $request->product_sold;
               $countriesSold   = $request->countries_sold;
               $client          = $request->client;
               $insert = new About([
                    'history'       => $history,
                    'history_en'    => $historyEn,
                    'visi'          => $visi,
                    'visi_en'       => $visiEn,
                    'misi'          => $misi,
                    'misi_en'       => $misiEn,
                    'image_path'    => '',
                    'url_alibaba'   => $urlAlibaba,
                    'telp'          => $telpon,
                    'email'         => $email,
                    'product_sold'  => $productSold,
                    'countries_sold'=> $countriesSold,
                    'client'        => $client,
                    'created_by'    => $user,
                    'created_at'    => $today,
                    'updated_by'    => $user,
                    'updated_at'    => $today,
                ]);
            } else if ($create == 'PRODUCT') {
                $category       = $request->category;
                $country        = $request->country;
                $title          = $request->title;
                $description    = $request->description;
                $descriptionEn  = $request->description_en;
                $bestSelling    = $request->best_selling;
                $insert = new Product([
                    'categories_id'     => $category,
                    'countries_id'      => $country,
                    'title'             => $title,
                    'description'       => $description,
                    'description_en'    => $descriptionEn,
                    'best_selling'      => $bestSelling,
                    'image_path1'       => '',
                    'image_path2'       => '',
                    'image_path3'       => '',
                    'image_path4'       => '',
                    'image_path5'       => '',
                    'created_by'        => $user,
                    'created_at'        => $today,
                    'updated_by'        => $user,
                    'updated_at'        => $today,
                ]);
            } else if ($create == 'CATEGORY') {
                $name   = $request->name;
                $nameEn = $request->name_en;
                $insert = new Category([
                    'name'          => $name,
                    'name_en'       => $nameEn,
                    'created_by'    => $user,
                    'created_at'    => $today,
                    'updated_by'    => $user,
                    'updated_at'    => $today,
                ]);
            } else if ($create == 'COUNTRIES') {
                $name   = $request->name;
                $insert = new Country([
                    'name'          => $name,
                    'image_path'    => '',
                    'created_by'    => $user,
                    'created_at'    => $today,
                    'updated_by'    => $user,
                    'updated_at'    => $today,
                ]);
            } else if ($create == 'ACTIVITES') {
                $title      = $request->title;
                $titleEn    = $request->title_en;
                $article    = $request->article;
                $articleEn  = $request->article_en;
                $insert = new Activity([
                    'title'         => $title,
                    'title_en'      => $titleEn,
                    'articles'      => $article,
                    'articles_en'   => $articleEn,
                    'image_path1'   => '',
                    'image_path2'   => '',
                    'image_path3'   => '',
                    'created_by'    => $user,
                    'created_at'    => $today,
                    'updated_by'    => $user,
                    'updated_at'    => $today,
                ]);
            } else if ($create == 'FAQS') {
                $question   = $request->question;
                $questionEn = $request->question_en;
                $answer     = $request->answer;
                $answerEn   = $request->answer_en;
                $insert = new Faq([
                    'question'      => $question,
                    'question_en'   => $questionEn,
                    'answer'        => $answer,
                    'answer_en'     => $answerEn,
                    'created_by'    => $user,
                    'created_at'    => $today,
                    'updated_by'    => $user,
                    'updated_at'    => $today,
                ]);
            } else if ($create == 'CONTACTS') {
                $name       = $request->name;
                $email      = $request->email;
                $message    = $request->message;
                $insert = new Contact([
                    'name'      => $name,
                    'email'     => $email,
                    'message'   => $message,
                    'created_by'    => $user,
                    'created_at'    => $today,
                    'updated_by'    => $user,
                    'updated_at'    => $today,
                ]);
            }
            $insert->save();
        } catch (Execption $e) {
            DB::rollback();
            return response()->json([
                'errors'    => true,
                'success'   => false,
                'message'   => $e->getMessage()
            ]);
        }
        DB::commit();
        return response()->json([
            'errors'    => false,
            'success'   => true,
            'message'   => ucfirst(__('vintari.success_create_data'))
        ]);
    }

    /**
     * function for show data in table
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dataTable(Request $request) {
        $create = $request->create;
        if ($create == 'BANNERS') {
            $data = Banner::with(['createdBy']);
            $datatables = DataTables::of($data);
        } else if ($create == 'BRANDS') {
            $data = Brand::with(['createdBy']);
            $datatables = DataTables::of($data);
        } else if ($create == 'ABOUTS') {
            $data = About::with(['createdBy']);
            $datatables = DataTables::of($data);
        } else if ($create == 'PRODUCT') {
            $data = Product::with(['createdBy']);
            $datatables = DataTables::of($data);
        } else if ($create == 'CATEGORY') {
            $data = Category::with(['createdBy']);
            $datatables = DataTables::of($data);
        } else if ($create == 'COUNTRIES') {
            $data = Country::with(['createdBy']);
            $datatables = DataTables::of($data);
        } else if ($create == 'ACTIVITES') {
            $data = Activity::with(['createdBy']);
            $datatables = DataTables::of($data);
        } else if ($create == 'FAQS') {
            $data = Faq::with(['createdBy']);
            $datatables = DataTables::of($data);
        } else if ($create == 'CONTACTS') {
            $data = Contact::with(['createdBy']);
            $datatables = DataTables::of($data);
        }
        $datatables = $datatables->addColumn('action', function ($item){
            $txt = "";
            $txt .= "<a href=\"#\" onclick=\"showItem('$item->id');\" title=\"" . ucfirst(__('detail')) . "\" class=\"btn btn-xs btn-secondary\"><i class=\"fa fa-eye fa-fw fa-xs\"></i></a>";
            $txt .= "<a href=\"#\" onclick=\"deleteItem('$item->id');\" title=\"" . ucfirst(__('delete')) . "\" class=\"btn btn-xs btn-danger\"><i class=\"fa fa-trash fa-fw fa-xs\"></i></a>";
            $txt .= "<a href=\"#\" onclick=\"editItem('$item->id');\" title=\"" . ucfirst(__('edit')) . "\" class=\"btn btn-xs btn-secondary\"><i class=\"fa fa-edit fa-fw fa-xs\"></i></a>";
            return $txt;
        });
        return $datatables->make(TRUE);
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
        $create = $request->create;
        DB::beginTransaction();
        $user   = Auth::user()->id;
        $today  = Carbon::now();
        try {
            if ($create == 'BANNERS') {
                $update = Banner::find($id);

                $header     = $request->header;
                $headerEn   = $request->header;
                $desc1      = $request->desc1;
                $desc1En    = $request->desc1_en;
                $desc2      = $request->desc2;
                $desc2En    = $request->desc2_en;

                $update->header     = $header;
                $update->header_en  = $headerEn;
                $update->desc1      = $desc1;
                $update->desc1En    = $desc1En;
                $update->desc2      = $desc2;
                $update->desc2En    = $desc2En;                
            } else if ($create == 'BRANDS') {
                $update     = Brand::find($id);
                $name       = $request->name;
                $update->name   = $name;
                
            } else if ($create == 'ABOUTS') {
                $update  = About::find($id);

                $history         = $request->history;
                $historyEn       = $request->history_en;
                $visi            = $request->visi;
                $visiEn          = $request->visi_en;
                $misi            = $request->misi;
                $misiEn          = $request->misi_en;
                $urlAlibaba      = $request->url_alibaba;
                $telpon          = $request->telpon;
                $email           = $request->email;
                $productSold     = $request->product_sold;
                $countriesSold   = $request->countries_sold;
                $client          = $request->client;

                $update->history         = $history;
                $update->history_en      = $historyEn;
                $update->visi            = $visi;
                $update->visi_en         = $visiEn;
                $update->misi            = $misi;
                $update->misi_en         = $misiEn;
                $update->url_alibaba     = $urlAlibaba;
                $update->telp            = $telpon;   
                $update->email           = $email;
                $update->product_sold    = $productSold;
                $update->countries_sold  = $countriesSold;
                $update->client          = $client;               
            } else if ($create == 'PRODUCT') {
                $update     = Product::find($id);

                $category       = $request->category;
                $country        = $request->country;
                $title          = $request->title;
                $description    = $request->description;
                $descriptionEn  = $request->description_en;
                $bestSelling    = $request->best_selling;

                $update->categories_id  = $category;
                $update->countires_id   = $country;
                $update->title          = $title;
                $update->description    = $description;
                $update->description_en = $descriptionEn;
                $update->best_selling   = $bestSelling;
            } else if ($create == 'CATEGORY') {
                $update = Category::find($id);

                $name   = $request->name;
                $nameEn = $request->name_en;
                
                $update->name       = $name;
                $update->name_en    = $nameEn;
            } else if ($create == 'COUNTRIES') {
                $update = Country::find($id);

                $name   = $request->name;

                $update->name   = $name;
            } else if ($create == 'ACTIVITES') {
                $update     = Activity::find($id);

                $title      = $request->title;
                $titleEn    = $request->title_en;
                $article    = $request->article;
                $articleEn  = $request->article_en;

                $update->title          = $title;
                $update->title_en       = $titleEn;
                $update->articles       = $article;
                $update->articles_en    = $articleEn;
            } else if ($create == 'FAQS') {
                $update     = Faq::find($id);

                $question   = $request->question;
                $questionEn = $request->question_en;
                $answer     = $request->answer;
                $answerEn   = $request->answer_en;

                $update->question       = $question;
                $update->question_en    = $questionEn;
                $update->answer         = $answer;
                $update->answer_en      = $answerEn;
            } else if ($create == 'CONTACTS') {
                $update     = Contact::find($id);

                $name       = $request->name;
                $email      = $request->email;
                $message    = $request->message;

                $update->name       = $name;
                $update->email      = $email;
                $update->message    = $message;
            }
            $update->updated_by  = $user;
            $update->updated_at  = $today;
            $update->save();
        } catch (Execption $e) {
            DB::rollback();
            return response()->json([
                'errors'    => true,
                'success'   => false,
                'message'   => $e->getMessage()
            ]);
        }
        DB::commit();
        return response()->json([
            'errors'    => false,
            'success'   => true,
            'message'   => ucfirst(__('vintari.success_update_data'))
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $create = $request->create;
        DB::beginTransaction();
        try {
            if ($create == 'BANNERS') {
                $delete = Banner::find($id);              
            } else if ($create == 'BRANDS') {
                $delete     = Brand::find($id);
            } else if ($create == 'ABOUTS') {
                $delete  = About::find($id);               
            } else if ($create == 'PRODUCT') {
                $delete     = Product::find($id);
            } else if ($create == 'CATEGORY') {
                $delete = Category::find($id);
            } else if ($create == 'COUNTRIES') {
                $delete = Country::find($id);
            } else if ($create == 'ACTIVITES') {
                $delete     = Activity::find($id);
            } else if ($create == 'FAQS') {
                $delete     = Faq::find($id);
            } else if ($create == 'CONTACTS') {
                $delete     = Contact::find($id);
            }
            $delete->delete();
        } catch (Execption $e) {
            DB::rollback();
            return response()->json([
                'errors'    => true,
                'success'   => false,
                'message'   => $e->getMessage()
            ]);
        }
        DB::commit();
        return response()->json([
            'errors'    => false,
            'success'   => true,
            'message'   => ucfirst(__('vintari.success_delete_data'))
        ]);
    }

    public function uploadFile($var) {
        
    }
}
