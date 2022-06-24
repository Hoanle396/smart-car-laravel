<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarBrand;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\News;
use App\Models\Service;
use App\Models\Setting;

class DashBoard extends Controller
{
    public function index()
    {
        $services = Service::count();
        $new=News::count();
        $brand=CarBrand::count();
        $car = Car::count();
        return view('admin.dashboard.index', compact('car','brand','services','new'));
    }


    public function settings(Request $request)
    {
        $data = [
            ['name' => 'phone', 'value' => $request->phone],
            ['name' => 'background', 'value' => $request->background],
            ['name' => 'navcolor', 'value' => $request->navcolor],
            ['name' => 'tenweb', 'value' => $request->tenweb],
            ['name' => 'mota', 'value' => $request->mota],
            ['name' => 'tukhoa', 'value' => $request->tukhoa],
            ['name' => 'logo', 'value' => $request->logo],
            ['name' => 'favicon', 'value' => $request->favicon],
            ['name' => 'anhbia', 'value' => $request->anhbia],
            ['name' => 'hotline', 'value' => $request->hotline],
            ['name' => 'zalo', 'value' => $request->zalo],
            ['name' => 'facebook', 'value' => $request->facebook],
            ['name' => 'email', 'value' => $request->email],
            ['name' => 'dieu_khoan', 'value' => $request->dieu_khoan],
            ['name' => 'youtube', 'value' => $request->youtube],
            ['name' => 'address', 'value' => $request->address]
        ];
        foreach($data as $up){
            Setting::where('name',$up['name'])->update(['value' => $up['value']]);
        }
        alert()->success('Thành công','Cập Nhật Thành Công');
        return redirect()->back();
    }
    public function getsetting()
    {
        $category = Categories::all();
        $settings = Setting::all();
        $setting = [];
        foreach ($settings as $data) {
            $setting["$data->name"] = $data->value;
        }
        return view('admin.setting.general', compact('category', 'setting'));
    }
}
