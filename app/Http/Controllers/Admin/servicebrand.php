<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BrandService;
use Exception;
use Illuminate\Support\Facades\File;

class servicebrand extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands=BrandService::paginate(10);
        return view('admin.services.add-brand-service',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'images' => 'required',
        ]);
        try{
            $image = $request->file('images');
            $newimage = time(). "-".$request->name_en.".".$image->getClientOriginalExtension();
            $image->move('./public/brand-logo', $newimage);
            $brands=new BrandService();
            $brands->fill($request->all());
            $brands->images='./public/brand-logo/' . $newimage;
            $brands->save();
              if ($brands) {
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
        $brands=BrandService::find($id);
        return view('admin.services.edit-brand-service',compact('brands'));
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
            $data=[
                'name_vi'=>$request->name_vi,
                'name_en'=>$request->name_en,
                'name_jp'=>$request->name_jp,
                'name_ko'=>$request->name_ko,
                'name_cn'=>$request->name_cn,
                'name_pt'=>$request->name_pt,
            ];
            if($request->images){
                 $brand = BrandService::where('id', $id)->get()->first();
                 if(File::exists($brand->images)){
                     File::delete($brand->images);
                 }
                 $image = $request->file('images');
                 $newimage = time(). "-".$request->name_en.".".$image->getClientOriginalExtension();
                 $image->move('./public/brand-logo', $newimage);
                 $data['images']='./public/brand-logo/' . $newimage;
            }
            $result = BrandService::where('id', $id)->update($data);
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
        $brand = BrandService::where('id', $id)->get()->first();
        if(File::exists($brand->images)){
             File::delete($brand->images);
        }
     $result = BrandService::where('id', $id)->delete();
        if ($result) {
           alert()->success('Thay đổi', 'Thành công');
     } else {
         alert()->error('Thay đổi', 'Thất Bại');
     }
      return redirect()->back();
    }
}
