<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use App\Models\Car;
use App\Models\News;
use App\Models\CarBrand;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Feedback;

class HomeController extends Controller
{
    public function index(){
        $banners=Banner::all();
        $logos=CarBrand::all();
        $cars=Car::latest()->limit(8)->get();
        $news=News::latest()->limit(8)->get();
        $papper=News::latest()->first();
        return view('pages.index',compact('banners','cars','news','logos','papper'));
    }
    public function product(){
        $logos=CarBrand::all();
        $cars=Car::paginate(9);
        return view('pages.product',compact('logos','cars'));
    }
    public function news(){
        $news=News::latest()->paginate(8);
        return view('pages.news',compact('news'));
    }
    public function new($id){
        $data=News::where('id',$id)->first();
        return view('pages.detail',compact('data'));
    }
    public function service($service){
        $banner=DB::table('services_brands')->where('name_en',$service)->get()->first();
        if(!$banner){
            abort(404);
        }
        else{
            $services=Service::where('brand',$service)->paginate(8);
            return view('pages.service',compact('banner','services'));
        }
    }
    public function services($id){
        $data=Service::where('id',$id)->first();
        return view('pages.detail',compact('data'));
    }
    public function car($brand){
        $logos=CarBrand::all();
        $cars=Car::where('brand',$brand)->paginate(9);
        return view('pages.product',compact('logos','cars'));
    }
    public function search(Request $request){
        $logos=CarBrand::all();
        if($request->hang=='all'){
            $cars=Car::where('name_en','LIKE','%'.$request->tukhoa.'%')
            ->orWhere('name_vi','LIKE','%'.$request->tukhoa.'%')
            ->orWhere('name_jp','LIKE','%'.$request->tukhoa.'%')
            ->orWhere('name_cn','LIKE','%'.$request->tukhoa.'%')
            ->orWhere('name_pt','LIKE','%'.$request->tukhoa.'%')
            ->orWhere('name_ko','LIKE','%'.$request->tukhoa.'%')
            ->paginate(9);
        }
        else{
            $cars=Car::where('brand',$request->hang)
            ->where(function ($query)use($request){
                $query->where('name_en','LIKE','%'.$request->tukhoa.'%')
                ->orWhere('name_vi','LIKE','%'.$request->tukhoa.'%')
                ->orWhere('name_jp','LIKE','%'.$request->tukhoa.'%')
                ->orWhere('name_cn','LIKE','%'.$request->tukhoa.'%')
                ->orWhere('name_pt','LIKE','%'.$request->tukhoa.'%')
                ->orWhere('name_ko','LIKE','%'.$request->tukhoa.'%');
            })->paginate(9);
        }
        return view('pages.product',compact('logos','cars'));
    }

    public function detail($id){
        $car=Car::where('id',$id)->get()->first();
        return view('pages.detailproduct',compact('car'));
    }
    public function feedbackpost(Request $request){
        try {
            $feedback =Feedback::create($request->all());
            return redirect()->back()->with('success','Successfully!');
        } catch (Exception $th) {
            return redirect()->back()->with('error','Failed!');
        }
    }
}
