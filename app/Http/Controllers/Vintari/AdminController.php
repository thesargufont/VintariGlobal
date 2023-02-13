<?php

namespace App\Http\Controllers\Vintari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use Log;
use Excel;
use Storage;
use ArtHelper;
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

use Rap2hpoutre\FastExcel\FastExcel;
use Rap2hpoutre\FastExcel\SheetCollection;

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
        if (strtoupper($var) == 'ABOUT') {
            $about = About::count();
            if ($about >= 1) {
                return redirect()->back();
            }
        }
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
        // $user   = Auth::user()->id;
        $today  = Carbon::now();
        try {
            if ($create == 'BANNER') {
                $header         = $request->header;
                $headerEn       = $request->header_en;
                $desc1          = $request->desc1;
                $desc1En        = $request->desc1_en;
                $desc2          = $request->desc2;
                $desc2En        = $request->desc2_en;
                $imagePath      = $request->image_path;
                $insert = new Banner([
                    'header'        => $header,
                    'header_en'     => $headerEn,
                    'desc1'         => $desc1,
                    'desc1_en'      => $desc1En,
                    'desc2'         => $desc2?$desc2:'',
                    'desc2_en'      => $desc2En?$desc2En:'',
                    'image_path'    => $imagePath,
                    'created_by'    => Auth::user()->id,
                    'created_at'    => $today,
                    'updated_by'    => Auth::user()->id,
                    'updated_at'    => $today,
                ]);    
            } else if ($create == 'BRAND') {
                $name   = $request->name;
                $imagePath      = $request->image_path;
                $insert = new Brand([
                    'name'          => $name,
                    'image_path'    => $imagePath,
                    'created_by'    => Auth::user()->id,
                    'created_at'    => $today,
                    'updated_by'    => Auth::user()->id,
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
               $imagePath      = $request->image_path;
               $insert = new About([
                    'history'       => $history,
                    'history_en'    => $historyEn,
                    'visi'          => $visi,
                    'visi_en'       => $visiEn,
                    'misi'          => $misi,
                    'misi_en'       => $misiEn,
                    'image_path'    => $imagePath,
                    'url_alibaba'   => $urlAlibaba,
                    'telp'          => $telpon,
                    'email'         => $email,
                    'product_sold'  => $productSold?$productSold:0,
                    'countries_sold'=> $countriesSold?$countriesSold:0,
                    'client'        => $client?$client:0,
                    'created_by'    => Auth::user()->id,
                    'created_at'    => $today,
                    'updated_by'    => Auth::user()->id,
                    'updated_at'    => $today,
                ]);
            } else if ($create == 'PRODUCT') {
                $category       = $request->category;
                $country        = $request->country;
                $title          = $request->title;
                $bestSelling    = $request->best_selling;
                $description    = $request->description;
                $descriptionEn  = $request->description_en;
                $imagePath      = $request->image_path;
                $imagePath1     = $request->image_path1?$request->image_path1:'';
                $imagePath2     = $request->image_path2?$request->image_path2:'';
                $imagePath3     = $request->image_path3?$request->image_path3:'';
                $imagePath4     = $request->image_path4?$request->image_path4:'';
                
                $insert = new Product([
                    'categories_id'     => $category,
                    'countries_id'      => $country,
                    'title'             => $title,
                    'description'       => $description,
                    'description_en'    => $descriptionEn,
                    'best_selling'      => $bestSelling,
                    'image_path1'       => $imagePath,
                    'image_path2'       => $imagePath1,
                    'image_path3'       => $imagePath2,
                    'image_path4'       => $imagePath3,
                    'image_path5'       => $imagePath4,
                    'created_by'        => Auth::user()->id,
                    'created_at'        => $today,
                    'updated_by'        => Auth::user()->id,
                    'updated_at'        => $today,
                ]);
            } else if ($create == 'CATEGORY') {
                $name   = $request->name;
                $nameEn = $request->name_en;
                $insert = new Category([
                    'name'          => $name,
                    'name_en'       => $nameEn,
                    'created_by'    => Auth::user()->id,
                    'created_at'    => $today,
                    'updated_by'    => Auth::user()->id,
                    'updated_at'    => $today,
                ]);
            } else if ($create == 'COUNTRY') {
                $name       = $request->name;
                $imagePath  = $request->image_path;
                $insert = new Country([
                    'name'          => $name,
                    'image_path'    => $imagePath,
                    'created_by'    => Auth::user()->id,
                    'created_at'    => $today,
                    'updated_by'    => Auth::user()->id,
                    'updated_at'    => $today,
                ]);
            } else if ($create == 'ACTIVITY') {
                $title      = $request->title;
                $titleEn    = $request->title_en;
                $article    = $request->articles;
                $articleEn  = $request->articles_en;
                $imagePath  = $request->image_path?$request->image_path:'';
                $imagePath1 = $request->image_path1?$request->image_path1:'';
                $imagePath2 = $request->image_path2?$request->image_path2:'';
                $insert = new Activity([
                    'title'         => $title,
                    'title_en'      => $titleEn,
                    'articles'      => $article,
                    'articles_en'   => $articleEn,
                    'image_path1'   => $imagePath,
                    'image_path2'   => $imagePath1,
                    'image_path3'   => $imagePath2,
                    'created_by'    => Auth::user()->id,
                    'created_at'    => $today,
                    'updated_by'    => Auth::user()->id,
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
                    'created_by'    => Auth::user()->id,
                    'created_at'    => $today,
                    'updated_by'    => Auth::user()->id,
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
                    'created_by'    => Auth::user()->id,
                    'created_at'    => $today,
                    'updated_by'    => Auth::user()->id,
                    'updated_at'    => $today,
                ]);
            } else if ($create == 'USER') {
                $name       = $request->name;
                $email      = $request->email;
                $password   = bcrypt($request->password);
                $insert = new User([
                    'name'      => $name,
                    'email'     => $email,
                    'password'  => $password,
                    'email_verified_at' => null,
                    'remember_token' => null,
                    'created_by'    => Auth::user()->id,
                    'created_at'    => $today,
                    'updated_by'    => Auth::user()->id,
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
            $data = User::orderBy('id');
            $datatables = DataTables::of($data);
        }
        
        if ($create == 'PRODUCT') {
            $datatables = $datatables->addColumn('action', function ($item) use ($request){
                $txt = "";
                $txt .= "<a href=\"#\" onclick=\"showItem('$item->id|$request->create');\" title=\"" . ucfirst(__('detail')) . "\" class=\"btn btn-xs btn-secondary\"><i class=\"fa fa-eye fa-fw fa-xs\"></i></a>";
                $txt .= "<a href=\"#\" onclick=\"editItem('$item->id|$request->create');\" title=\"" . ucfirst(__('edit')) . "\" class=\"btn btn-xs btn-secondary\"><i class=\"fa fa-edit fa-fw fa-xs\"></i></a>";
                $txt .= "<a href=\"#\" onclick=\"deleteItem('$item->id|$request->create');\" title=\"" . ucfirst(__('delete')) . "\" class=\"btn btn-xs btn-danger\"><i class=\"fa fa-trash fa-fw fa-xs\"></i></a>";
                return $txt;
            })
            ->editColumn('categories_id', function($item) {
                return optional($item->category)->name;
            })
            ->editColumn('countries_id', function($item) {
                return optional($item->country)->name;
            })
            ->editColumn('best_selling', function($item) {
                return $item->best_selling?'YES':'NO';
            })
            ->editColumn('created_by', function($item) {
                return strtoupper(optional($item->createdBy)->name);
            });
        } else {
            $datatables = $datatables->addColumn('action', function ($item) use ($request){
                $txt = "";
                if (strtoupper($request->create) != 'USER') {
                    $txt .= "<a href=\"#\" onclick=\"showItem('$item->id|$request->create');\" title=\"" . ucfirst(__('detail')) . "\" class=\"btn btn-xs btn-secondary\"><i class=\"fa fa-eye fa-fw fa-xs\"></i></a>";
                    if (strtoupper($request->create) != 'CONTACT') {
                        $txt .= "<a href=\"#\" onclick=\"editItem('$item->id|$request->create');\" title=\"" . ucfirst(__('edit')) . "\" class=\"btn btn-xs btn-secondary\"><i class=\"fa fa-edit fa-fw fa-xs\"></i></a>";
                        $txt .= "<a href=\"#\" onclick=\"deleteItem('$item->id|$request->create');\" title=\"" . ucfirst(__('delete')) . "\" class=\"btn btn-xs btn-danger\"><i class=\"fa fa-trash fa-fw fa-xs\"></i></a>";
                    }
                }
                return $txt;
            })
            ->editColumn('created_by', function($item) {
                return strtoupper(optional($item->createdBy)->name);
            });
        }
        
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
        // $user   = Auth::user()->id;
        $today  = Carbon::now();
        try {
            if ($create == 'BANNER') {
                $update = Banner::find($id);

                $header     = $request->header;
                $headerEn   = $request->header_en;
                $desc1      = $request->desc1;
                $desc1En    = $request->desc1_en;
                $desc2      = $request->desc2;
                $desc2En    = $request->desc2_en;

                $update->header     = $header;
                $update->header_en  = $headerEn;
                $update->desc1      = $desc1;
                $update->desc1_en   = $desc1En;
                $update->desc2      = $desc2;
                $update->desc2_en   = $desc2En;                
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
                $update->countries_id   = $country;
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
            $update->updated_by  = 1;
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
                $delete = Banner::find($var[0]); 
                $exists = Storage::disk('public')->exists($delete->image_path);
                if ($exists) {
                    Storage::disk('public')->delete($delete->image_path);
                }             
            } else if ($create == 'BRAND') {
                $delete     = Brand::find($var[0]);
                $exists = Storage::disk('public')->exists($delete->image_path);
                if ($exists) {
                    Storage::disk('public')->delete($delete->image_path);
                }     
            } else if ($create == 'ABOUT') {
                $delete  = About::find($var[0]);     
                $exists = Storage::disk('public')->exists($delete->image_path);
                if ($exists) {
                    Storage::disk('public')->delete($delete->image_path);
                }               
            } else if ($create == 'PRODUCT') {
                $delete     = Product::find($var[0]);
            } else if ($create == 'CATEGORY') {
                $delete = Category::find($var[0]);
            } else if ($create == 'COUNTRY') {
                $delete = Country::find($var[0]);
                $exists = Storage::disk('public')->exists($delete->image_path);
                if ($exists) {
                    Storage::disk('public')->delete($delete->image_path);
                }   
            } else if ($create == 'ACTIVITY') {
                $delete     = Activity::find($var[0]);
            } else if ($create == 'FAQ') {
                $delete     = Faq::find($var[0]);
            } else if ($create == 'CONTACT') {
                $delete     = Contact::find($var[0]);
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
            'message'   => ucfirst(__('vintari.success_delete_data')),
            'create_1'  => $var[1]
        ]);
    }

    public function uploadFile($create,Request $request) {
        $files = [];
        $ext = [
            'jpg',
            'jpeg',
            'png'
        ];
        foreach($ext as $item){
            $ext[] = strtoupper($item);
        }

        if (!$request->fileupload) {
            return response()->json([
                'errors'    => ucfirst(__('vintari.file_not_found'))
            ]);
        }
        $counter = 1;
        $today = Carbon::now()->format('Ymd');
        $today1 = Carbon::now()->format('Y/m/d');
        if ($create != 'PRODUCT' && $create != 'ACTIVITY') {
            $name       = $request->fileupload->getClientOriginalName();
            $extension  = pathinfo($name, PATHINFO_EXTENSION);
            if (!in_array($extension, $ext)) {
                return response()->json([
                    'errors'    => ucfirst(__('vintari.file_format_not_allowed'))
                ]);
            }
            
            $name = $create.$today.'-'.$counter.'.'.$extension;
            $imagePath = '';
            $exists = Storage::disk('public')->exists($create.DIRECTORY_SEPARATOR.$today1.DIRECTORY_SEPARATOR);
            
            if (!Storage::disk('public')->exists($create.DIRECTORY_SEPARATOR.$today1.DIRECTORY_SEPARATOR)) {
                Storage::makeDirectory('public'.DIRECTORY_SEPARATOR.$create.DIRECTORY_SEPARATOR.$today1.DIRECTORY_SEPARATOR);
            }
            $exists = Storage::disk('public')->exists($create.DIRECTORY_SEPARATOR.$today1.DIRECTORY_SEPARATOR);
            if ($exists) {
                $allFiles = Storage::files('public'.DIRECTORY_SEPARATOR.$create.DIRECTORY_SEPARATOR.$today1.DIRECTORY_SEPARATOR);
                foreach ($allFiles as $allFile) {
                    $exists = Storage::disk('public')->exists($create.DIRECTORY_SEPARATOR.$today1.DIRECTORY_SEPARATOR.$name);
                    if ($exists) {
                        $counter++;
                        $name =  $name = $create.$today.'-'.$counter.'.'.$extension;
                    }
                }
                $fileStore = $request->fileupload->storeAs('public'.DIRECTORY_SEPARATOR.$create.DIRECTORY_SEPARATOR.$today1.DIRECTORY_SEPARATOR,$name);
                $imagePath = $create.'/'.$today1.'/'.$name;
                // for check size file
                if (round(Storage::size($fileStore) / 1024, 2 ) <= 0) {
                    Storage::delete($fileStore);
                    return response()->json([
                        'errors'    => ucfirst(__('vintari.file_corrupt'))
                    ]);
                }
    
                if (round(Storage::size($fileStore) / 1024, 2) > pow(1024,2)) {
                    Storage::delete($fileStore);
                    return response()->json([
                        'errors'    => ucfirst(__('vintari.file_max'))
                    ]);
                }
            }
            $file_object = new \stdClass();
            $file_object->name = $request->fileupload->getClientOriginalName();
            $file_object->size = round(Storage::size($fileStore) / 1024, 2);
            $file_object->url  = $imagePath;
            
            $files[] = $file_object;
            return response()->json(['files'=>$files], 200);
        } else {
            $files  = [];
            $exists = Storage::disk('public')->exists($create.DIRECTORY_SEPARATOR.$today1.DIRECTORY_SEPARATOR);
            if (!Storage::disk('public')->exists($create.DIRECTORY_SEPARATOR.$today1.DIRECTORY_SEPARATOR)) {
                Storage::makeDirectory('public'.DIRECTORY_SEPARATOR.$create.DIRECTORY_SEPARATOR.$today1.DIRECTORY_SEPARATOR);
            }
            foreach ($request->fileupload as $item) {
                $name       = $item->getClientOriginalName();
                $extension  = pathinfo($name, PATHINFO_EXTENSION);
                $name       = $create.$today.'-'.$counter.'.'.$extension;
                if (!in_array($extension, $ext)) {
                    return response()->json([
                        'errors'    => ucfirst(__('vintari.file_format_not_allowed'))
                    ]);
                }
                $allFiles = Storage::files('public'.DIRECTORY_SEPARATOR.$create.DIRECTORY_SEPARATOR.$today1.DIRECTORY_SEPARATOR);
                foreach ($allFiles as $allFile) {
                    $exists = Storage::disk('public')->exists($create.DIRECTORY_SEPARATOR.$today1.DIRECTORY_SEPARATOR.$name);
                    if ($exists) {
                        $counter++;
                        $name = $create.$today.'-'.$counter.'.'.$extension;
                    } 
                }
                $fileStore = $item->storeAs('public'.DIRECTORY_SEPARATOR.$create.DIRECTORY_SEPARATOR.$today1.DIRECTORY_SEPARATOR,$name);
                $imagePath = $create.'/'.$today1.'/'.$name;
                // for check size file
                if (round(Storage::size($fileStore) / 1024, 2 ) <= 0) {
                    Storage::delete($fileStore);
                    return response()->json([
                        'errors'    => ucfirst(__('vintari.file_corrupt'))
                    ]);
                }
    
                if (round(Storage::size($fileStore) / 1024, 2) > pow(1024,2)) {
                    Storage::delete($fileStore);
                    return response()->json([
                        'errors'    => ucfirst(__('vintari.file_max'))
                    ]);
                }
                $file_object = new \stdClass();
                $file_object->name = $item->getClientOriginalName();
                $file_object->size = round(Storage::size($fileStore) / 1024, 2);
                $file_object->url  = $imagePath;
                
                $files[] = $file_object;
               
            }
            return response()->json(['files'=>$files], 200);
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
            if ($banner->image_path != '') {
                $imagePath  = url('storage/'.$banner->image_path);
            } else {
                $imagePath = '';
            }
            return response()->json([
                'success'       => true,
                'create'        => $create,
                'header'        => $header,
                'header_en'     => $headerEn,
                'desc1'         => $desc1,
                'desc1_en'      => $desc1En,
                'desc2'         => $desc2,
                'desc2_en'      => $desc2En,
                'image_path'    => $imagePath
            ]);
        } else if ($create == 'BRAND') {
            $brand = Brand::find($request->id);
            $name  = $brand->name;
            if ($brand->image_path != '') {
                $imagePath  = url('storage/'.$brand->image_path);
            } else {
                $imagePath = '';
            }
            return response()->json([
                'success'       => true,
                'create'        => $create,
                'name'          => $name,
                'image_path'    => $imagePath
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
            $productSold    = $about->product_sold;
            $countriesSold  = $about->countries_sold;
            $client         = $about->client;
            if ($about->image_path != '') {
                $imagePath  = url('storage/'.$about->image_path);
            } else {
                $imagePath = '';
            }
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
                'client'        => $client,
                'image_path'    => $imagePath
            ]);
        } else if ($create == 'PRODUCT') {
            $product        = Product::find($request->id);
            $category       = $product->categories_id;
            $country       = $product->countries_id;
            // $category       = '<option value="'.$product->categories_id.'" selected>'.optional($product->category)->name.'</option>';
            // $country        = '<option value="'.$product->countries_id.'" selected>'.optional($product->country)->name.'</option>';;
            $title          = $product->title;
            $description    = $product->description;
            $descriptionEn  = $product->description_en;
            $bestSelling    = $product->best_selling;
            $imagePath1 = '';
            $imagePath2 = '';
            $imagePath3 = '';
            $imagePath5 = '';
            $imagePath4 = '';
            $imagePath = [];
            if ($product->image_path1 != '') {
                $imagePath1 = url('storage/'.$product->image_path1);
                $imagePath[] = $imagePath1;
            } 
            if ($product->image_path2 != '') {
                $imagePath2 = url('storage/'.$product->image_path2);
                $imagePath[] = $imagePath2;
            } 
            if ($product->image_path3 != '') {
                $imagePath3 = url('storage/'.$product->image_path3);
                $imagePath[] = $imagePath3;
            } 
            if ($product->image_path4 != '') {
                $imagePath4 = url('storage/'.$product->image_path4);
                $imagePath[] = $imagePath4;
            } 
            if ($product->image_path5 != '') {
                $imagePath5 = url('storage/'.$product->image_path5);
                $imagePath[] = $imagePath5;
            } 
            return response()->json([
                'success'       => true,
                'create'        => $create,
                'category'      => $category,
                'country'       => $country,
                'title'         => $title,
                'description'   => $description,
                'description_en'=> $descriptionEn,
                'best_selling'  => $bestSelling,
                'image_path'    => $imagePath
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
            if ($country->image_path != '') {
                $imagePath  = url('storage/'.$country->image_path);
            } else {
                $imagePath = '';
            }
            return response()->json([
                'success'       => true,
                'create'        => $create,
                'name'          => $name,
                'image_path'    => $imagePath
            ]);
        } else if ($create == 'ACTIVITY') {
            $activity = Activity::find($request->id);
            $title      = $activity->title;
            $titleEn    = $activity->title_en;
            $article    = $activity->articles;
            $articleEn  = $activity->articles_en;
            $imagePath1 = '';
            $imagePath2 = '';
            $imagePath3 = '';
            $imagePath = [];
            if ($activity->image_path1 != '') {
                $imagePath1 = url('storage/'.$activity->image_path1);
                $imagePath[] = $imagePath1;
            } 
            if ($activity->image_path2 != '') {
                $imagePath2 = url('storage/'.$activity->image_path2);
                $imagePath[] = $imagePath2;
            } 
            if ($activity->image_path3 != '') {
                $imagePath3 = url('storage/'.$activity->image_path3);
                $imagePath[] = $imagePath3;
            } 
        
            return response()->json([
                'success'       => true,
                'create'        => $create,
                'title'         => $title,
                'title_en'      => $titleEn,
                'articles'      => $article,
                'articles_en'   => $articleEn,
                'image_path'    => $imagePath
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
            // flash(ucfirst(__('vintari.menu_not_found')))->error()->important();
            return redirect()->back();
        }
    }

    public function getSelectOption(Request $request) {
        $country    = Country::orderBy('name');
        $category   = Category::orderBy('name');

        $select     = '';
        $select1    = '';

        foreach ($country->cursor() as $item) {
            if ($item->id == $request->country) {
                $select .= '<option value="'.$item->id.'" selected>'.$item->name.'</option>';    
            } else {
                $select .= '<option value="'.$item->id.'">'.$item->name.'</option>';
            }
        }

        foreach ($category->cursor() as $item) {
            if ($item->id == $request->category) {
                $select1 .= '<option value="'.$item->id.'" selected>'.$item->name.'</option>';    
            } else {
                $select1 .= '<option value="'.$item->id.'">'.$item->name.'</option>';
            }
        }

        return response()->json([
            'success'   => true,
            'country'   => $select,
            'category'  => $select1
        ]);
    }

    public function exportExcel($var) {
        $create = strtoupper($var);
        $dataCsv = [];
        if ($create == 'BANNER') {
            $data = Banner::with(['createdBy']);
            foreach ($data->cursor() as $item) {
                $itemData = [
                    ucwords(__('vintari.header'))       => $item->header,
                    ucwords(__('vintari.header_en'))    => $item->header_en,
                    ucwords(__('vintari.desc1'))        => $item->desc1,
                    ucwords(__('vintari.desc1_en'))     => $item->desc1_en,
                    ucwords(__('vintari.desc2'))        => $item->desc2,
                    ucwords(__('vintari.desc2_en'))     => $item->desc2_en,
                    ucwords(__('vintari.created_by'))   => optional($item->createdBy)->name,
                    ucwords(__('vintari.created_at'))   => Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->format('d/m/Y H:i:s'),
                    ucwords(__('vintari.updated_by'))   => optional($item->updatedBy)->name,
                    ucwords(__('vintari.updated_at'))   => Carbon::createFromFormat('Y-m-d H:i:s',$item->updated_at)->format('d/m/Y H:i:s'),
                ];
                $dataCsv[] = $itemData;
            }
        } else if ($create == 'BRAND') {
            $data = Brand::with(['createdBy']);
            foreach ($data->cursor() as $item) {
                $itemData = [
                    ucwords(__('vintari.name'))       => $item->name,
                    ucwords(__('vintari.created_by'))   => optional($item->createdBy)->name,
                    ucwords(__('vintari.created_at'))   => Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->format('d/m/Y H:i:s'),
                    ucwords(__('vintari.updated_by'))   => optional($item->updatedBy)->name,
                    ucwords(__('vintari.updated_at'))   => Carbon::createFromFormat('Y-m-d H:i:s',$item->updated_at)->format('d/m/Y H:i:s'),
                ];
                $dataCsv[] = $itemData;
            }
        } else if ($create == 'ABOUT') {
            $data = About::with(['createdBy']);
            foreach ($data->cursor() as $item) {
                $itemData = [
                    ucwords(__('vintari.history'))          => $item->history,
                    ucwords(__('vintari.history_en'))       => $item->history_en,
                    ucwords(__('vintari.visi'))             => $item->visi,
                    ucwords(__('vintari.visi_en'))          => $item->visi_en,
                    ucwords(__('vintari.misi'))             => $item->misi,
                    ucwords(__('vintari.misi_en'))          => $item->misi_en,
                    ucwords(__('vintari.url_alibaba'))      => $item->url_alibaba,
                    ucwords(__('vintari.telp'))             => $item->telp,
                    ucwords(__('vintari.email'))            => $item->email,
                    ucwords(__('vintari.product_sold'))     => $item->product_sold,
                    ucwords(__('vintari.countries_sold'))   => $item->countries_sold,
                    ucwords(__('vintari.client'))           => $item->client,
                    ucwords(__('vintari.created_by'))       => optional($item->createdBy)->name,
                    ucwords(__('vintari.created_at'))       => Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->format('d/m/Y H:i:s'),
                    ucwords(__('vintari.updated_by'))       => optional($item->updatedBy)->name,
                    ucwords(__('vintari.updated_at'))       => Carbon::createFromFormat('Y-m-d H:i:s',$item->updated_at)->format('d/m/Y H:i:s'),
                ];
                $dataCsv[] = $itemData;
            }
        } else if ($create == 'PRODUCT') {
            $data = Product::with(['createdBy']);
        } else if ($create == 'CATEGORY') {
            $data = Category::with(['createdBy']);
        } else if ($create == 'COUNTRY') {
            $data = Country::with(['createdBy']);
            foreach ($data->cursor() as $item) {
                $itemData = [
                    ucwords(__('vintari.name'))       => $item->name,
                    ucwords(__('vintari.created_by'))   => optional($item->createdBy)->name,
                    ucwords(__('vintari.created_at'))   => Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->format('d/m/Y H:i:s'),
                    ucwords(__('vintari.updated_by'))   => optional($item->updatedBy)->name,
                    ucwords(__('vintari.updated_at'))   => Carbon::createFromFormat('Y-m-d H:i:s',$item->updated_at)->format('d/m/Y H:i:s'),
                ];
                $dataCsv[] = $itemData;
            }
        } else if ($create == 'ACTIVITY') {
            $data = Activity::with(['createdBy']);
        } else if ($create == 'FAQ') {
            $data = Faq::with(['createdBy']);
        } else if ($create == 'CONTACT') {
            $data = Contact::with(['createdBy']);
        } else if ($create == 'USER') {
            $data = User::orderBy('id');
        }
        $sheets = new SheetCollection([$dataCsv]);
        return (new FastExcel($sheets))->download($create.'.xlsx');
    }
}