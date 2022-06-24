<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Http\Requests\BrandAdd;
use App\Models\CarBrand;
use Illuminate\Support\Facades\File;
class Brand extends Controller
{

    public function index()
    {
        $brands=CarBrand::paginate(10);
        return view('admin.brand.addbrand',compact('brands'));
    }


    public function create()
    {
        abort(404);
    }

    public function store(BrandAdd $request)
    {
        try{
        $image = $request->file('logo');
        $newimage = time(). "-".$request->name.".".$image->getClientOriginalExtension();
        $image->move('./public/car-logo', $newimage);
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'logo' =>'./public/car-logo/' . $newimage,
        ];
         $post = CarBrand::create($data);
          if ($post) {
             alert()->success('Thêm mới', 'Thành công');
         } else {
             alert()->error('Thêm mới', 'Thất Bại');
         }
          return redirect()->back();
        }
        catch (Exception $e){
            alert()->error('Thêm mới', 'Thất Bại');
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = CarBrand::where('id', $id)->get()->first();
        return view('admin.brand.edit-brand',compact('brand'));
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
        try{
        $data = [
                'name' => $request->name,
                'description' => $request->description,
            ];

        if($request->logo){
             $brand = CarBrand::where('id', $id)->get()->first();
             if(File::exists($brand->logo)){
                 File::delete($brand->logo);
             }
             $image = $request->file('logo');
             $newimage = time(). "-".$request->name.".".$image->getClientOriginalExtension();
             $image->move('./public/car-logo', $newimage);
             $data['logo']='./public/car-logo/' . $newimage;
        }
        $result = CarBrand::where('id', $id)->update($data);
        if ($result) {
             alert()->success('Thay đổi', 'Thành công');
         } else {
             alert()->error('Thay đổi', 'Thất Bại');
         }
          return redirect()->back();
        }
        catch (Exception $e){
            alert()->error('Thay đổi', 'Thất Bại');
            return redirect()->back();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $brand = CarBrand::where('id', $id)->get()->first();
            if(File::exists($brand->logo)){
                 File::delete($brand->logo);
            }
         $result = CarBrand::where('id', $id)->delete();
            if ($result) {
               alert()->success('Thay đổi', 'Thành công');
         } else {
             alert()->error('Thay đổi', 'Thất Bại');
         }
          return redirect()->back();
    }
}
