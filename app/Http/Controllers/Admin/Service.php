<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service as modelService;
use App\Models\BrandService;
use Exception;
use Illuminate\Support\Facades\File;

class Service extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=modelService::paginate(10);
        return view('admin.services.listservice', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands=BrandService::all();
        return view('admin.services.add-service', compact('brands'));
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
            $brands=new modelService();
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
                alert()->error('Thêm mới', $e->getMessage());
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
        $services=modelService::find($id);
        $brands=BrandService::all();
        return view('admin.services.edit-service',compact('services','id','brands'));
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
                'description_vi'=>$request->description_vi,
                'name_en'=>$request->name_en,
                'description_en'=>$request->description_en,
                'name_jp'=>$request->name_jp,
                'description_jp'=>$request->description_jp,
                'name_ko'=>$request->name_ko,
                'description_ko'=>$request->description_ko,
                'name_cn'=>$request->name_cn,
                'description_cn'=>$request->description_cn,
                'name_pt'=>$request->name_pt,
                'description_pt'=>$request->description_pt,
            ];
            if($request->images){
                 $brand = modelService::where('id', $id)->get()->first();
                 if(File::exists($brand->images)){
                     File::delete($brand->images);
                 }
                 $image = $request->file('images');
                 $newimage = time(). "-".$request->name_en.".".$image->getClientOriginalExtension();
                 $image->move('./public/brand-logo', $newimage);
                 $data['images']='./public/brand-logo/' . $newimage;
            }
            $result = modelService::where('id', $id)->update($data);
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
        $brand = modelService::where('id', $id)->get()->first();
            if(File::exists($brand->images)){
                 File::delete($brand->images);
            }
         $result = modelService::where('id', $id)->delete();
            if ($result) {
               alert()->success('Thay đổi', 'Thành công');
         } else {
             alert()->error('Thay đổi', 'Thất Bại');
         }
          return redirect()->back();
    }
}
