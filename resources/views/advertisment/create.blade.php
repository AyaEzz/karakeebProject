
@extends('layouts.app')
@section('content')
<!-- //header -->
<!-- breadcrumbs -->
<div class="w3layouts-breadcrumbs text-center">
    <div class="container">
        <span class="agile-breadcrumbs"><a href="/"><i class="fa fa-home home_1"></i></a> / <span>قم بانشاء اعلانك </span></span>
    </div>
</div>

<div class="container">
    <h2 class="w3-head">قم بإنشاء اعلانك </h2>
    <div class="row">

        <div class="col-md-8 col-md-offset-2">





            <form action="{{route('advertisment.store')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
               <div class="form-group">
                    <label for="title">العنوان</label>
                    <input type="text" class="form-control" id="title" placeholder="اكتب العنوان ..." name="title">
                    @if($errors->get('title'))
                        <div style="color: red; font-weight: bold;">
                            @foreach($errors->get('title') as $error)
                                {{$error}}
                                <br>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="availability">تحديد الاتاحه لاستعارتها </label>
                    <select class="form-control" id="availability" name="availability" >
                        <option value="available">متاح</option>
                        <option value="used">مستخدم</option>
                    </select>
                    @if($errors->get('availability'))
                        <div style="color: red; font-weight: bold;">
                            @foreach($errors->get('availability') as $error)
                                {{$error}}
                                <br>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="catagory">تحديد الفئه </label>
                    <select class="form-control" id="catagory" name="catagory" >
                        <option value="Mobiles">موبايلات</option>
                        <option value="Electronics">الأجهزه الالكترونيه</option>
                        <option value="Cars">سيارات</option>
                        <option value="cycles">دراجات</option>
                        <option value="furnitures">أثاث</option>
                        <option value="funs">الترفيهيات </option>
                        <option value="fashions">الموضه </option>
                        <option value="games">العاب</option>
                    </select>
                    @if($errors->get('catagory'))
                        <div style="color: red; font-weight: bold;">
                            @foreach($errors->get('catagory') as $error)
                                {{$error}}
                                <br>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="photo">اختيار صوره المنتج </label>
                    <input type="file"   id="photo"  name="photo">
                    @if($errors->get('photo'))
                        <div style="color: red; font-weight: bold;">
                            @foreach($errors->get('photo') as $error)
                                {{$error}}
                                <br>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="description">الوصف</label>
                    <textarea rows="5" class="form-control" id="description" name="description"></textarea>
                    @if($errors->get('description'))
                        <div style="color: red; font-weight: bold;">
                            @foreach($errors->get('description') as $error)
                                {{$error}}
                            @endforeach
                        </div>
                    @endif
                </div>
               <!-- <input name="_method" type="hidden" value="PUT">-->
                <button type="submit" class="btn btn-info btn-block">إضافة </button>
            </form>

        </div>
    </div>
</div>





<!-- // Submit Ad -->

@endsection