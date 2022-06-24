<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\CarBrand;
use App\Http\Requests\Car as CarRequest;
use Illuminate\Support\Facades\File;
use Exception;
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars=Car::paginate(10);
        return view('admin.car.listcar',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands=CarBrand::all();
        return view('admin.car.add-car',compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarRequest $request)
    {
        $this->validate($request, [
                'images' => 'required',
                'images.*' => 'required'
        ]);

        $files = [];
        try{
        if($request->hasfile('images'))
		{
			foreach($request->file('images') as $key => $file)
			{
			    $newimage = time(). "-".str_replace([" "],["-"],$request->name_en)."-".$key.".".$file->getClientOriginalExtension();
			    $file->move('./public/car', $newimage);
			    $files[] = './public/car/' . $newimage;
			}
		}

         $car= new Car();
		 $car->fill($request->all());
         $car->images=json_encode($files);
		 $car->save();
         alert()->success('Thêm mới', 'Thành công');
        }
        catch(Exception $e){
         alert()->error('Thêm Xe',$e->getMessage());
        }
        return redirect()->back();
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
        $car=Car::find($id);
        $brands=CarBrand::all();
        return view('admin.car.edit-car',compact('car','brands','id'));
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
            $input=$request->all();
        $files = [];
        $files_remove = [];
        if($request->hasfile('images'))
		{
			foreach($request->file('images') as $key => $file)
			{
			    $newimage = time(). "-".str_replace([" "],["-"],$request->name_en)."-".$key.".".$file->getClientOriginalExtension();
			    $file->move('./public/car', $newimage);
			    $files[] = './public/car/' . $newimage;
			}
		}

		if (isset($input['images_uploaded'])) {
			$files_remove = array_diff(json_decode($input['images_uploaded_origin']), $input['images_uploaded']);
			$files = array_merge($input['images_uploaded'], $files);
		} else {
			$files_remove = json_decode($input['images_uploaded_origin']);
		}

        $car = Car::find($id);
        $car->fill($request->all());
		$car->images = json_encode($files);
		if($car->update()) {
			foreach ($files_remove as $file_name) {
				File::delete($file_name);
			}
		}
         alert()->success('Thay Đổi', 'Thành công');
        }
        catch(Exception $e){
         alert()->error('Thay Đổi',$e->getMessage());
        }
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cars=Car::find($id);
        foreach(json_decode($cars->images) as $img){
            if(File::exists($img)){
                File::delete($img);
           }
        }
        $result = Car::where('id', $id)->delete();
        if ($result) {
           alert()->success('Thay đổi', 'Thành công');
       } else {
         alert()->error('Thay đổi', 'Thất Bại');
       }
        return redirect()->back();
    }
}
