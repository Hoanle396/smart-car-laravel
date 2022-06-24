@extends('layouts.adminlayout')

@section('content')
<div class="row  justify-content-between align-center">
    <div class="col-2 ">
        <h1 class="h3 mb-2 text-gray-800">Dịch vụ</h1>
    </div>
    <div class="col-3 ">
        <a href="{{route('news.create')}}" class="btn btn-primary"> Thêm Tin Mới</a>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách tin</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($news as $new)
                    <tr>
                        <td>{{$new->id}}</td>
                        <td>{{$new->name_vi}}</td>
                        <td>
                            <form method="post" action="{{route('news.destroy',$new->id)}}">
                                @method('delete')
                                @csrf
                                <a href="{{ route('news.edit', ['news' => $new->id]) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>|
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
