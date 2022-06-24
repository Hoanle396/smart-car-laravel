@extends('layouts.adminlayout')

@section('content')
<div class="row  justify-content-between align-center">
    <div class="col-2 ">
        <h1 class="h3 mb-2 text-gray-800"> Ô Tô</h1>
    </div>
    <div class="col-2 ">
        <a href="{{route('car.create')}}" class="btn btn-primary"> Thêm Xe Mới</a>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách ô tô</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên</th>
                        <th>Hãng</th>
                        <th>Năm sản xuất</th>
                        <th>Kilomet</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cars as $car)
                    <tr>
                        <td>{{$car->id}}</td>
                        <td>{{$car->name_vi}}</td>
                        <td>{{$car->brand}}</td>
                        <td>{{$car->manufacture}}</td>
                        <td>{{$car->kilomet}}</td>
                        <td>
                            <form method="post" action="{{route('car.destroy',$car->id)}}">
                                @method('delete')
                                @csrf
                                <a href="{{ route('car.edit', ['car' => $car->id]) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>|
                                <button type="submit" onclick="return confirm('Bạn Có Chắc Muốn Xóa Chứ Hành Động Không Thể Phục Hồi')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
