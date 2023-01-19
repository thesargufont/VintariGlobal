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
        return view('vintari.admin.form_input', [
            'create'        => true,
            'show'          => false,
            'edit'          => false,
            'create_1'      => strtoupper($var),
            'id'            => 0
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
        $create = strtoupper($request->create);
        DB::beginTransaction();
        $user   = Auth::user()->id;
        $today  = Carbon::now();
        try {
            if ($create == 'BANNER') {
                $header         = $request->header;
                $headerEn       = $request->header_en;
                $desc1          = $request->desc1;
                $desc1En        = $request->desc1_en;
                $desc2          = $request->desc2;
                $desc2En        = $request->desc2_en;
                $hasFile        = $request->hasFile('banner');
                $file           = $request->file('banner');
                $uploadPhoto    = $this->uploadFile($hasFile, $file, $create);
                if ($uploadPhoto['errors']) {
                    DB::rollback();
                    return response()->json([
                        'errors'    => true,
                        'success'   => false,
                        'message'   => $uploadPhoto['message']
                    ]);
                }
                $insert = new Banner([
                    'header'        => $header,
                    'header_en'     => $headerEn,
                    'desc1'         => $desc1,
                    'desc1_en'      => $desc1En,
                    'desc2'         => $desc2,
                    'desc2_en'      => $desc2En,
                    'image_path'    => $uploadPhoto['image_path'],
                    'created_by'    => $user,
                    'created_at'    => $today,
                    'updated_by'    => $user,
                    'updated_at'    => $today,
                ]);    
            } else if ($create == 'BRAND') {
                $name   = $request->name;
                $hasFile        = $request->hasFile('brand');
                $file           = $request->file('brand');
                $uploadPhoto    = $this->uploadFile($hasFile, $file, $create);
                if ($uploadPhoto['errors']) {
                    DB::rollback();
                    return response()->json([
                        'errors'    => true,
                        'success'   => false,
                        'message'   => $uploadPhoto['message']
                    ]);
                }
                $insert = new Brand([
                    'name'        => $name,
                    'image_path'    => '',
                    'created_by'    => $user,
                    'created_at'    => $today,
                    'updated_by'    => $user,
                    'updated_at'    => $today,
                ]);
            } else if ($create == 'ABOUT') {
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
               $hasFile        = $request->hasFile('about');
               $file           = $request->file('about');
               $uploadPhoto    = $this->uploadFile($hasFile, $file, $create);
               if ($uploadPhoto['errors']) {
                   DB::rollback();
                   return response()->json([
                       'errors'    => true,
                       'success'   => false,
                       'message'   => $uploadPhoto['message']
                   ]);
               }
               $insert = new About([
                    'history'       => $history,
                    'history_en'    => $historyEn,
                    'visi'          => $visi,
                    'visi_en'       => $visiEn,
                    'misi'          => $misi,
                    'misi_en'       => $misiEn,
                    'image_path'    => $uploadPhoto['image_path'],
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
                $hasFile        = $request->hasFile('product');
                $file           = $request->file('product');
                $uploadPhoto    = $this->uploadFile($hasFile, $file, $create);
                if ($uploadPhoto['errors']) {
                    DB::rollback();
                    return response()->json([
                        'errors'    => true,
                        'success'   => false,
                        'message'   => $uploadPhoto['message']
                    ]);
                }
                $insert = new Product([
                    'categories_id'     => $category,
                    'countries_id'      => $country,
                    'title'             => $title,
                    'description'       => $description,
                    'description_en'    => $descriptionEn,
                    'best_selling'      => $bestSelling,
                    'image_path1'       => $uploadPhoto['image_path'],
                    'image_path2'       => $uploadPhoto['image_path1'],
                    'image_path3'       => $uploadPhoto['image_path2'],
                    'image_path4'       => $uploadPhoto['image_path3'],
                    'image_path5'       => $uploadPhoto['image_path4'],
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
            } else if ($create == 'COUNTRY') {
                $name   = $request->name;
                $hasFile        = $request->hasFile('country');
                $file           = $request->file('country');
                $uploadPhoto    = $this->uploadFile($hasFile, $file, $create);
                if ($uploadPhoto['errors']) {
                    DB::rollback();
                    return response()->json([
                        'errors'    => true,
                        'success'   => false,
                        'message'   => $uploadPhoto['message']
                    ]);
                }
                $insert = new Country([
                    'name'          => $name,
                    'image_path'    => $uploadPhoto['imgae_path'],
                    'created_by'    => $user,
                    'created_at'    => $today,
                    'updated_by'    => $user,
                    'updated_at'    => $today,
                ]);
            } else if ($create == 'ACTIVITY') {
                $title      = $request->title;
                $titleEn    = $request->title_en;
                $article    = $request->article;
                $articleEn  = $request->article_en;
                $hasFile        = $request->hasFile('activity');
                $file           = $request->file('activity');
                $uploadPhoto    = $this->uploadFile($hasFile, $file, $create);
                if ($uploadPhoto['errors']) {
                    DB::rollback();
                    return response()->json([
                        'errors'    => true,
                        'success'   => false,
                        'message'   => $uploadPhoto['message']
                    ]);
                }
                $insert = new Activity([
                    'title'         => $title,
                    'title_en'      => $titleEn,
                    'articles'      => $article,
                    'articles_en'   => $articleEn,
                    'image_path1'   => $uploadPhoto['image_path'],
                    'image_path2'   => $uploadPhoto['image_path1'],
                    'image_path3'   => $uploadPhoto['image_path2'],
                    'created_by'    => $user,
                    'created_at'    => $today,
                    'updated_by'    => $user,
                    'updated_at'    => $today,
                ]);
            } else if ($create == 'FAQ') {
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
            } else if ($create == 'CONTACT') {
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
        $create = strtoupper($request->create);
        if ($create == 'BANNER') {
            $data = Banner::with(['createdBy']);
            $datatables = DataTables::of($data);
        } else if ($create == 'BRAND') {
            $data = Brand::with(['createdBy']);
            $datatables = DataTables::of($data);
        } else if ($create == 'ABOUT') {
            $data = About::with(['createdBy']);
            $datatables = DataTables::of($data);
        } else if ($create == 'PRODUCT') {
            $data = Product::with(['createdBy']);
            $datatables = DataTables::of($data);
        } else if ($create == 'CATEGORY') {
            $data = Category::with(['createdBy']);
            $datatables = DataTables::of($data);
        } else if ($create == 'COUNTRY') {
            $data = Country::with(['createdBy']);
            $datatables = DataTables::of($data);
        } else if ($create == 'ACTIVITY') {
            $data = Activity::with(['createdBy']);
            $datatables = DataTables::of($data);
        } else if ($create == 'FAQ') {
            $data = Faq::with(['createdBy']);
            $datatables = DataTables::of($data);
        } else if ($create == 'CONTACT') {
            $data = Contact::with(['createdBy']);
            $datatables = DataTables::of($data);
        } else if ($create == 'USER') {
            $data = User::with(['createdBy']);
            $datatables = DataTables::of($data);
        }
        $datatables = $datatables->addColumn('action', function ($item) use ($request){
            $txt = "";
            $txt .= "<a href=\"#\" onclick=\"showItem('$item->id|$request->create');\" title=\"" . ucfirst(__('detail')) . "\" class=\"btn btn-xs btn-secondary\"><i class=\"fa fa-eye fa-fw fa-xs\"></i></a>";
            $txt .= "<a href=\"#\" onclick=\"editItem('$item->id|$request->create');\" title=\"" . ucfirst(__('edit')) . "\" class=\"btn btn-xs btn-secondary\"><i class=\"fa fa-edit fa-fw fa-xs\"></i></a>";
            if (strtoupper($request->create) != 'USER') {
                $txt .= "<a href=\"#\" onclick=\"deleteItem('$item->id|$request->create');\" title=\"" . ucfirst(__('delete')) . "\" class=\"btn btn-xs btn-danger\"><i class=\"fa fa-trash fa-fw fa-xs\"></i></a>";
            }
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
        $var = explode('|', $id);
            
        return view('vintari.admin.form_input', [
            'create'        => false,
            'show'          => true,
            'edit'          => false,
            'create_1'      => strtoupper($var[1]),
            'id'            => $var[0]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $var = explode('|', $id);
            
        return view('vintari.admin.form_input', [
            'create'        => false,
            'show'          => false,
            'edit'          => true,
            'create_1'      => strtoupper($var[1]),
            'id'            => $var[0]
        ]);
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
        $create = strtoupper($request->create);
        DB::beginTransaction();
        $user   = Auth::user()->id;
        $today  = Carbon::now();
        try {
            if ($create == 'BANNER') {
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
            } else if ($create == 'BRAND') {
                $update     = Brand::find($id);
                $name       = $request->name;
                $update->name   = $name;
                
            } else if ($create == 'ABOUT') {
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
            } else if ($create == 'COUNTRY') {
                $update = Country::find($id);

                $name   = $request->name;

                $update->name   = $name;
            } else if ($create == 'ACTIVITY') {
                $update     = Activity::find($id);

                $title      = $request->title;
                $titleEn    = $request->title_en;
                $article    = $request->article;
                $articleEn  = $request->article_en;

                $update->title          = $title;
                $update->title_en       = $titleEn;
                $update->articles       = $article;
                $update->articles_en    = $articleEn;
            } else if ($create == 'FAQ') {
                $update     = Faq::find($id);

                $question   = $request->question;
                $questionEn = $request->question_en;
                $answer     = $request->answer;
                $answerEn   = $request->answer_en;

                $update->question       = $question;
                $update->question_en    = $questionEn;
                $update->answer         = $answer;
                $update->answer_en      = $answerEn;
            } else if ($create == 'CONTACT') {
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
        $var = explode('|', $id);
        $create = strtoupper($var[1]);
        DB::beginTransaction();
        try {
            if ($create == 'BANNER') {
                $delete = Banner::find($id);              
            } else if ($create == 'BRAND') {
                $delete     = Brand::find($id);
            } else if ($create == 'ABOUT') {
                $delete  = About::find($id);               
            } else if ($create == 'PRODUCT') {
                $delete     = Product::find($id);
            } else if ($create == 'CATEGORY') {
                $delete = Category::find($id);
            } else if ($create == 'COUNTRY') {
                $delete = Country::find($id);
            } else if ($create == 'ACTIVITY') {
                $delete     = Activity::find($id);
            } else if ($create == 'FAQ') {
                $delete     = Faq::find($id);
            } else if ($create == 'CONTACT') {
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

    public function uploadFile($hasFile, $file, $create) {
        $data = [
            'errors'        => true,
            'success'       => false,
            'message'       => '',
            'image_path'    => '',
            'image_path1'   => '',
            'image_path2'   => '',
            'image_path3'   => '',
            'image_path4'   => ''
        ];
        $files = [];
        
        $ext = [
            'jpg',
            'jpeg',
            'png'
        ];
        foreach($ext as $item){
            $ext[] = strtoupper($item);
        }

        if (!$hasFile) {
            $data['message']    = ucfirst(__('vintari.file_not_found'));
            return $data;  
        }
        $counter = 1;
        $today = Carbon::now()->format('Ymd');
        $today1 = Carbon::now()->format('Y/m/d');
        if ($create != 'PRODUCT' && $create != 'ACTIVITY') {
            $name       = $file->getClientOriginalName();
            $extension  = pathinfo($name, PATHINFO_EXTENSION);
            if (!in_array($extension, $ext)) {
                $data['message']    = ucfirst(__('vintari.file_format_not_allowed'));
                return $data;
            }
            
            $name = $create.$today.'-'.$counter.'.'.$extension;
            $imagePath = '';
            $exists = Storage::disk('public')->exists($create.DIRECTORY_SEPARATOR.$today1.DIRECTORY_SEPARATOR);
            if ($exists) {
                $allFiles = Storage::files($create.DIRECTORY_SEPARATOR.$today1.DIRECTORY_SEPARATOR);
                foreach ($allFiles as $allFile) {
                    $exists = Storage::disk('public')->exists($create.DIRECTORY_SEPARATOR.$today1.DIRECTORY_SEPARATOR.$name);
                    if ($exists) {
                        $counter++;
                        $name =  $name = $create.$today.'-'.$counter.'.'.$extension;
                    }
                }
                $fileStore = $file->storeAs($create.DIRECTORY_SEPARATOR.$today1.DIRECTORY_SEPARATOR,$name);
                $imagePath = $create.DIRECTORY_SEPARATOR.$today1.DIRECTORY_SEPARATOR.$name;
                // for check size file
                if (round(Storage::size($fileStore) / 1024, 2 ) <= 0) {
                    Storage::delete($fileStore);
                    $data['message']    = ucfirst(__('vintari.file_corrupt'));
                    return $data;
                }
    
                if (round(Storage::size($filename) / 1024, 2) > pow(1024,2)) {
                    Storage::delete($fileStore);
                    $data['message']    = ucfirst(__('vintari.file_max'));
                    return $data;
                }
            }
            $data['errors']     = false;
            $data['success']    = true;
            $data['message']    = ucfirst(__('vintari.success_add_photo'));
            $data['image_path'] = $imagePath;
            return $data;
        } else {
            $name = $create.$today.'-'.$counter.'.'.$extension;
            foreach ($file as $item) {
                $name = $item->getClientOriginalName();
                $extension = pathinfo($name, PATHINFO_EXTENSION);
                if (!in_array($extension, $ext)) {
                    $data['message']    = ucfirst(__('vintari.file_format_not_allowed'));
                    return $data;
                }
                $exists = Storage::disk('public')->exists($create.DIRECTORY_SEPARATOR.$today1.DIRECTORY_SEPARATOR.$name);
                if ($exists) {
                    $counter++;
                    $name = $create.$today.'-'.$counter.'.'.$extension;
                } else {
                    $fileStore = $item->storeAs($create.DIRECTORY_SEPARATOR.$today1.DIRECTORY_SEPARATOR.$name);
                    $imagePath = $create.DIRECTORY_SEPARATOR.$today1.DIRECTORY_SEPARATOR.$name;
                    if(round(Storage::size($fileStore) / 1024, 2) <= 0){
                        Storage::delete($fileStore);
                        $data['message']    = ucfirst(__('vintari.file_corrupt'));
                        return $data;
                    }
                    if(round(Storage::size($fileStore) / 1024, 2) > pow(1024,2)){
                        Storage::delete($fileStore);
                        $data['message']    = ucfirst(__('vintari.file_max'));
                        return $data;
                    }
                }
                if (isset($fileStore)) {
                    if ($data['image_path'] == '') {
                        $data['image_path'] = $imagePath;
                    } else if ($data['image_path1'] == '') {
                        $data['image_path1'] = $imagePath;
                    } else if ($data['image_path2'] == '') {
                        $data['image_path2'] = $imagePath;
                    } else if ($data['image_path3'] == '') {
                        $data['image_path3'] = $imagePath;
                    } else if ($data['image_path4'] == '') {
                        $data['image_path4'] = $imagePath;
                    }
                }
            }
            $data['errors']     = false;
            $data['success']    = true;
            $data['message']    = ucfirst(__('vintari.success_add_photo'));
            return $data;
        }
    }

    public function loadData(Request $request) {
        $create = strtoupper($request->create);
        if ($create == 'BANNER') {
            $banner = Banner::find($request->id);
            $header     = $banner->header;
            $headerEn   = $banner->header_en;
            $desc1      = $banner->desc1;
            $desc1En    = $banner->desc1_en;
            $desc2      = $banner->desc2;
            $desc2En    = $banner->desc2_en;
            return response()->json([
                'success'       => true,
                'create'        => $create,
                'header'        => $header,
                'header_en'     => $headerEn,
                'desc1'         => $desc1,
                'desc1_en'      => $desc1En,
                'desc2'         => $desc2,
                'desc2_en'      => $desv2En
            ]);
        } else if ($create == 'BRAND') {
            $brand = Brand::find($request->id);
            $name  = $brand->name;
            return response()->json([
                'success'   => true,
                'create'    => $create,
                'name'      => $name
            ]);
        } else if ($create == 'ABOUT') {
            $about = About::find($request->id);
            $history        = $about->history;
            $historyEn      = $about->history_en;
            $visi           = $about->visi;
            $visiEn         = $about->visi_en;
            $misi           = $about->misi;
            $misiEn         = $about->misi_en;
            $urlAlibaba     = $about->url_alibaba;
            $telpon         = $about->telp;
            $email          = $about->email;
            $proudctSold    = $about->product_sold;
            $countriesSold  = $about->countries_sold;
            $client         = $about->client;
            return response()->json([
                'success'       => true,
                'create'        => $create,
                'history'       => $history,
                'history_en'    => $historyEn,
                'visi'          => $visi,
                'visi_en'       => $visiEn,
                'misi'          => $misi,
                'misi_en'       => $misiEn,
                'url_alibaba'   => $urlAlibaba,
                'telpon'        => $telpon,
                'email'         => $email,
                'product_sold'  => $productSold,
                'countries_sold'=> $countriesSold,
                'client'        => $client
            ]);
        } else if ($create == 'PRODUCT') {
            $product        = Product::find($request->id);
            $category       = optional($product->category)->name;
            $country        = optional($product->country)->name;
            $title          = $product->title;
            $description    = $product->description;
            $descriptionEn  = $product->description_en;
            $bestSelling    = $proudct->best_selling;
            return response()->json([
                'success'       => true,
                'create'        => $create,
                'category'      => $category,
                'country'       => $country,
                'title'         => $title,
                'description'   => $description,
                'description_en'=> $descriptionEn,
                'best_selling'  => $bestSelling
            ]);
        } else if ($create == 'CATEGORY') {
            $category   = Category::find($request->id);
            $name       = $category->name;
            $nameEn     = $category->name_en;
            return response()->json([
                'success'   => true,
                'create'    => $create,
                'name'      => $name,
                'name_en'   => $nameEn
            ]);
        } else if ($create == 'COUNTRY') {
            $country = Country::find($request->id);
            $name    = $country->name;
            return response()->json([
                'success'   => true,
                'create'    => $create,
                'name'      => $name
            ]);
        } else if ($create == 'ACTIVITY') {
            $activity = Activity::find($request->id);
            $title      = $activity->title;
            $titleEn    = $activity->title_en;
            $article    = $activity->articles;
            $articleEn  = $activity->articles_en;
            return response()->json([
                'success'       => true,
                'create'        => $create,
                'title'         => $title,
                'title_en'      => $titleEn,
                'articles'      => $article,
                'articles_en'   => $articleEn
            ]);
        } else if ($create == 'FAQ') {
            $faq        = Faq::find($request->id);
            $question   = $faq->question;
            $questionEn = $faq->question_en;
            $answer     = $faq->answer;
            $answerEn   = $faq->answer_en;
            return response()->json([
                'success'       => true,
                'create'        => $create,
                'question'      => $question,
                'question_en'   => $questionEn,
                'answer'        => $answer,
                'answer_en'     => $answerEn
            ]);
        } else if ($create == 'CONTACT') {
            $contact    = Contact::find($request->id);
            $name       = $contact->name;
            $email      = $contact->email;
            $message    = $contact->message;
            return response()->json([
                'success'   => true,
                'create'    => $create,
                'name'      => $name,
                'email'     => $email,
                'message'   => $message
            ]);
        } else {
            flash(ucfirst(__('vintari.menu_not_found')))->error()->important();
            return redirect()->back();
        }
    }
}
