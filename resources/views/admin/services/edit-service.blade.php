@extends('layouts.adminlayout')

@section('content')
@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Sorry!</strong> There were more problems with your HTML input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="post" action="{{route('service.update',['service' => $services->id])}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Danh Mục</label>
        <div class="col-sm-9">
            <div class="form-line">
                <select type="text" name="brand" class="form-control">
                    @foreach($brands as $brand)
                    <option value="{{$brand->name_en}}">{{$brand->name_en}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Tên dịch vụ (Tiếng VIệt)</label>
        <div class="col-sm-9">
            <div class="form-line">
                <input type="text" name="name_vi" value="{{$services->name_vi}}" class="form-control">
            </div>
        </div>
    </div>


    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Thông tin chi tiết (Tiếng Việt)</label>
        <div class="col-sm-9">
            <div class="form-line">
                <textarea class="textarea form-control" name="description_vi" rows="6">{{$services->description_vi}}</textarea>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Tên dịch vụ (Tiếng Anh)</label>
        <div class="col-sm-9">
            <div class="form-line">
                <input type="text" name="name_en" value="{{$services->name_en}}" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Thông tin chi tiết (Tiếng Anh)</label>
        <div class="col-sm-9">
            <div class="form-line">
                <textarea class="textarea form-control" name="description_en" rows="6">{{$services->description_en}}</textarea>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Tên dịch vụ (Tiếng Nhật)</label>
        <div class="col-sm-9">
            <div class="form-line">
                <input type="text" name="name_jp" value="{{$services->name_jp}}" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Thông tin chi tiết (Tiếng Nhật)</label>
        <div class="col-sm-9">
            <div class="form-line">
                <textarea class="textarea form-control" name="description_jp" rows="6">{{$services->description_jp}}</textarea>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Tên dịch vụ (Tiếng Hàn)</label>
        <div class="col-sm-9">
            <div class="form-line">
                <input type="text" name="name_ko" value="{{$services->name_ko}}" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Thông tin chi tiết (Tiếng Hàn)</label>
        <div class="col-sm-9">
            <div class="form-line">
                <textarea class="textarea form-control" name="description_ko" rows="6">{{$services->description_ko}}</textarea>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Tên dịch vụ (Tiếng Trung)</label>
        <div class="col-sm-9">
            <div class="form-line">
                <input type="text" name="name_cn" value="{{$services->name_cn}}" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Thông tin chi tiết (Tiếng Trung)</label>
        <div class="col-sm-9">
            <div class="form-line">
                <textarea class="textarea form-control" name="description_cn" rows="6">{{$services->description_cn}}</textarea>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Tên dịch vụ (Tiếng Bồ đào nha)</label>
        <div class="col-sm-9">
            <div class="form-line">
                <input type="text" name="name_pt" value="{{$services->name_pt}}" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Thông tin chi tiết (Tiếng Bồ đào nha)</label>
        <div class="col-sm-9">
            <div class="form-line">
                <textarea class="textarea form-control" name="description_pt" rows="6">{{$services->description_pt}}</textarea>
            </div>
        </div>
    </div>
    <div class="input-group control-group ">
        <label class="col-sm-3 col-form-label">Ảnh Banner </label>
        <div class="col-sm-9">
            <div class="form-line">
                <input type="file" accept="image/*" name="images" class="form-control">
            </div>
        </div>
    </div>
    <div class="list-images">
    </div>
    <div class="button-submit">
        <button type="submit" class="btn btn-success" style="margin-top:10px">
            Submit
        </button>
    </div>
</form>
@endsection

@section('js')
<script src="{{asset('public/summernote/summernote.min.js')}}" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.textarea').summernote()

    });
</script>
@endsection
