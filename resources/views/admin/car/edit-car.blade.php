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
<form method="POST" action="{{route('car.update',['car'=>$car->id])}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Tên Hãng</label>
        <div class="col-sm-9">
            <div class="form-line">
                <select type="text" name="brand" class="form-control">
                    @foreach($brands as $brand)
                    <option value="{{$brand->name}}">{{$brand->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Tên xe (Tiếng VIệt)</label>
        <div class="col-sm-9">
            <div class="form-line">
                <input type="text" name="name_vi" value="{{$car->name_vi}}" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Năm Sản Xuất</label>
        <div class="col-sm-9">
            <div class="form-line">
                <input type="text" name="manufacture" value="{{$car->manufacture}}" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Kilomet đã chạy</label>
        <div class="col-sm-9">
            <div class="form-line">
                <input type="text" name="kilomet" value="{{$car->kilomet}}" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Thông tin chi tiết (Tiếng Việt)</label>
        <div class="col-sm-9">
            <div class="form-line">
                <textarea class="textarea form-control" name="description_vi" rows="6">{{$car->description_vi}}</textarea>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Tên xe (Tiếng Anh)</label>
        <div class="col-sm-9">
            <div class="form-line">
                <input type="text" name="name_en" value="{{$car->name_en}}" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Thông tin chi tiết (Tiếng Anh)</label>
        <div class="col-sm-9">
            <div class="form-line">
                <textarea class="textarea form-control" name="description_en" rows="6">{{$car->description_en}}</textarea>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Tên xe (Tiếng Nhật)</label>
        <div class="col-sm-9">
            <div class="form-line">
                <input type="text" name="name_jp" value="{{$car->name_jp}}" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Thông tin chi tiết (Tiếng Nhật)</label>
        <div class="col-sm-9">
            <div class="form-line">
                <textarea class="textarea form-control" name="description_jp" rows="6">{{$car->description_jp}}</textarea>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Tên xe (Tiếng Hàn)</label>
        <div class="col-sm-9">
            <div class="form-line">
                <input type="text" name="name_ko" value="{{$car->name_ko}}" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Thông tin chi tiết (Tiếng Hàn)</label>
        <div class="col-sm-9">
            <div class="form-line">
                <textarea class="textarea form-control" name="description_ko" rows="6">{{$car->description_ko}}</textarea>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Tên xe (Tiếng Trung)</label>
        <div class="col-sm-9">
            <div class="form-line">
                <input type="text" name="name_cn" value="{{$car->name_cn}}" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Thông tin chi tiết (Tiếng Trung)</label>
        <div class="col-sm-9">
            <div class="form-line">
                <textarea class="textarea form-control" name="description_cn" rows="6">{{$car->description_cn}}</textarea>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Tên xe (Tiếng Bồ đào nha)</label>
        <div class="col-sm-9">
            <div class="form-line">
                <input type="text" name="name_pt" value="{{$car->name_pt}}" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">Thông tin chi tiết (Tiếng Bồ đào nha)</label>
        <div class="col-sm-9">
            <div class="form-line">
                <textarea class="textarea form-control" name="description_pt" rows="6">{{$car->description_pt}}</textarea>
            </div>
        </div>
    </div>
    <div class="input-group hdtuto control-group lst increment">
        <div class="list-input-hidden-upload">
            <input type="file" name="images[]" id="file_upload" class="d-none myfrm form-control hidden">
        </div>
        <div class="input-group-btn">
            <button class="btn btn-success btn-add-image" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>+Add image</button>
        </div>
    </div>
    <div class="list-images">
        @if (isset($car->images) && !empty($car->images))
        @foreach (json_decode($car->images) as $key => $img)
        <div class="box-image">
            <input type="hidden" name="images_uploaded[]" value="{{ $img }}" id="img-{{ $key }}">
            <img src="{{ asset($img) }}" class="picture-box">
            <div class="wrap-btn-delete"><span data-id="img-{{ $key }}" class="btn-delete-image">x</span></div>
        </div>
        @endforeach
        <input type="hidden" name="images_uploaded_origin" value="{{ $car->images }}">
        <input type="hidden" name="id" value="{{ $id }}">
        @endif
    </div>
    <div class="button-submit">
        <button type="submit" class="btn btn-success" style="margin-top:10px">
            LƯU
        </button>
    </div>
</form>

@endsection

@section('js')
<script src="{{asset('public/summernote/summernote.min.js')}}" type="text/javascript"></script>
<style>
    .list-images {
        width: 50%;
        margin-top: 20px;
        display: inline-block;
    }

    .hidden {
        display: none;
    }

    .box-image {
        width: 100px;
        height: 108px;
        position: relative;
        float: left;
        margin-left: 5px;
    }

    .box-image img {
        width: 100px;
        height: 100px;
    }

    .wrap-btn-delete {
        position: absolute;
        top: -8px;
        right: 0;
        height: 2px;
        font-size: 20px;
        font-weight: bold;
        color: red;
    }

    .btn-delete-image {
        cursor: pointer;
    }

    .table {
        width: 15%;
    }
</style>
<script type="text/javascript">
    $(document).ready(function() {
        $('.textarea').summernote()
        $(".btn-add-image").click(function() {
            $('#file_upload').trigger('click');
        });

        $('.list-input-hidden-upload').on('change', '#file_upload', function(event) {
            let today = new Date();
            let time = today.getTime();
            let image = event.target.files[0];
            let file_name = event.target.files[0].name;
            let box_image = $('<div class="box-image"></div>');
            box_image.append('<img src="' + URL.createObjectURL(image) + '" class="picture-box">');
            box_image.append('<div class="wrap-btn-delete"><span data-id=' + time + ' class="btn-delete-image">x</span></div>');
            $(".list-images").append(box_image);

            $(this).removeAttr('id');
            $(this).attr('id', time);
            let input_type_file = '<input type="file" name="images[]" id="file_upload" class="myfrm form-control d-none hidden">';
            $('.list-input-hidden-upload').append(input_type_file);
        });

        $(".list-images").on('click', '.btn-delete-image', function() {
            let id = $(this).data('id');
            $('#' + id).remove();
            $(this).parents('.box-image').remove();
        });
    });
</script>
@endsection
