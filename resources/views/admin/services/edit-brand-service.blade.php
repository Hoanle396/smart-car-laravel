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
                                        <input type="text" name="name_vi" value="{{$brands->name_vi}}" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tên dịch vụ (Tiếng Anh*)</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="name_en" value="{{$brands->name_en}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tên dịch vụ (Tiếng Nhật*)</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="name_jp" value="{{$brands->name_jp}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tên dịch vụ (Tiếng Hàn Quốc*)</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="name_ko" value="{{$brands->name_ko}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tên dịch vụ (Tiếng Trung Quốc*)</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="name_cn" value="{{$brands->name_cn}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tên dịch vụ (Tiếng Bồ Đào Nha*)</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="name_pt" value="{{$brands->name_pt}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Ảnh Banner (*)</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="file" accept="image/*" name="images" class="form-control">
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
</div>
@endsection
