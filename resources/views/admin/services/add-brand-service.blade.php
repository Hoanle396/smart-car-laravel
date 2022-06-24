@extends('layouts.adminlayout')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dịch Vụ</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Danh mục dịch vụ mới</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('brand-service.store')}}" method="POST" validate enctype='multipart/form-data'>
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tên dịch vụ (Tiếng Việt*)</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="name_vi" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tên dịch vụ (Tiếng Anh*)</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="name_en" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tên dịch vụ (Tiếng Nhật*)</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="name_jp" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tên dịch vụ (Tiếng Hàn Quốc*)</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="name_ko" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tên dịch vụ (Tiếng Trung Quốc*)</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="name_cn" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tên dịch vụ (Tiếng Bồ Đào Nha*)</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="name_pt" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Ảnh Banner (*)</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="file" accept="image/*" name="images" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="btnSaveOption" class="btn btn-primary btn-block">
                                <span>LƯU</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Các Hãng Xe</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên</th>
                            <th>Ảnh</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($brands as $brand)
                        <tr>
                            <td>{{ $brand->id }}</td>
                            <td>{{ $brand->name_vi }}</td>
                            <td><img src="{{asset($brand->images)}}" width="30" /></td>
                            <td>
                                <form method="post" action="{{route('brand-service.destroy',$brand->id)}}">
                                    @method('delete')
                                    @csrf
                                    <a href="{{ route('brand-service.edit', ['brand_service' => $brand->id]) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>|
                                    <button type="submit" onclick="return confirm('Bạn Có Chắc Muốn Xóa Chứ Hành Động Không Thể Phục Hồi')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
