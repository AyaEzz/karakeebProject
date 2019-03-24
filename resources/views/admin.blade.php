@extends('layouts.app')

@section('content')

    <div class="w3layouts-breadcrumbs text-center">
        <div class="container">
            <span class="agile-breadcrumbs"><a href="/"><i class="fa fa-home home_1"></i></a> / <span>الصفحة الشخصية </span></span>
        </div>
    </div>


    <div class="agileinfo-ads-display col-md-9">
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        <div class="wrapper">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                            <span class="text">كل المستخدمين</span>
                        </a>
                    </li>
                    @if(count($users) > 0)
                        @foreach($users as $user)

                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                        <div>
                            <div id="container">
                                <div class="view-controls-list" id="viewcontrols">
                                    <label>عرض:</label>

                                    <a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
                                </div>
                                <div class="sort">
                                    <div class="sort-by">

                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <ul class="list">
                                    <a href="single.html">
                                        <li>
                                            <img src="/storage/advertisment_image/{{$user->user_photo}}" title="" alt="" />
                                            <section class="list-left">
                                                <h5 class="title"> {{$user->firstname}}--{{$user->lastname}}</h5>
                                                <h3 class="adprice"> {{$user->email}} </h3>

                                                <span class="adprice">Phone : {{$user->phone}}</span>
                                                <p class="catpath"> </p>
                                                <div style="margin-top:20px; ">




                                                            <form action="{{route('destroyUser',['id'=>$user->id])}}" method="POST">
                                                                {{csrf_field()}}
                                                                <input name="_method" type="hidden" value="DELETE">
                                                                <button type="submit" style="margin-right: 5px; width:70px;height: 50px;"  class="btn btn-danger pull-right">Delete</button>
                                                            </form>



                                                </div>
                                            </section>
                                            <section class="list-right">
                                                <span class="date">{{$user->created_at}}</span>
                                                <span class="cityname">{{$user->address}}</span>


                                            </section>


                                            <div class="clearfix"></div>

                                        </li>

                                    </a>

                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                @endforeach
                @else
                    <div class="alert alert-danger">
                        <strong>عفواً ! </strong> ﻻ يوجد مستخدمين لعرضها.
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection