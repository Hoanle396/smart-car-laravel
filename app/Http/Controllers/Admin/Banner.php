<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner as mdBanner;
use Exception;
use Illuminate\Support\Facades\File;

class Banner extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners=mdBanner::all();
        return view('admin.setting.banner',compact('banners'));
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
        try{
            $image = $request->file('images');
            $newimage = time(). "-banner.".$image->getClientOriginalExtension();
            $image->move('./public/images', $newimage);
            $data = [
                'images' =>'./public/images/' . $newimage,
            ];
             $post = mdBanner::create($data);
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
        abort(404);
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
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = mdBanner::where('id', $id)->get()->first();
            if(File::exists($brand->images)){
                 File::delete($brand->images);
            }
         $result = mdBanner::where('id', $id)->delete();
            if ($result) {
               alert()->success('Thay đổi', 'Thành công');
         } else {
             alert()->error('Thay đổi', 'Thất Bại');
         }
          return redirect()->back();
    }
}
