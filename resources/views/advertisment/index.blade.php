@extends('layouts.app')
@section('content')
    <!-- breadcrumbs -->
    <div class="w3layouts-breadcrumbs text-center">
        <div class="container">
            <span class="agile-breadcrumbs"><a href="/"><i class="fa fa-home home_1"></i></a> / <span>كل الاعلانات </span></span>
        </div>
    </div>
    <!-- //breadcrumbs -->
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
                            <span class="text">كل الاعلانات</span>
                        </a>
                    </li>
                    @if(count($advertisments) > 0)
                        @foreach($advertisments as $advertisment)

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
                                            <img src="/storage/advertisment_image/{{$advertisment->photo}}" title="" alt="" />
                                            <section class="list-left">
                                                <h5 class="title"> {{$advertisment->title}} </h5>
                                                <h3 class="adprice"> {{$advertisment->status}} </h3>
                                               
                                                <span class="adprice">{{$advertisment->description}}</span>
                                                
                                                <p class="catpath">{{$advertisment->category->name}} </p>
                                                <div style="margin-top:20px; ">
                                                    @if(!Auth::guest())
                                                        @if(Auth::user()->id == $advertisment->user_id)

                                                            <a class="btn btn-warning pull-right" style="width:70px;height: 50px; " href="/advertisment/{{$advertisment->id}}/edit">Edit</a>

                                                            <form action="{{route('advertisment.destroy',['id'=>$advertisment->id])}}" method="POST">
                                                                {{csrf_field()}}
                                                                <input name="_method" type="hidden" value="DELETE">
                                                                <button type="submit" style="margin-right: 5px; width:70px;height: 50px;"  class="btn btn-danger pull-right">Delete</button>
                                                            </form>



                                                        @endif
                                                    @endif


                                                        @if(Auth::guard('admin')->check())
                                                            <form action="{{route('advertisment.destroy',['id'=>$advertisment->id])}}" method="POST">
                                                                {{csrf_field()}}
                                                                <input name="_method" type="hidden" value="DELETE">
                                                                <button type="submit" style="margin-right: 5px; width:70px;height: 50px;"  class="btn btn-danger pull-right">Delete</button>
                                                            </form>
                                                        @endif


                                                        <a class="btn btn-warning pull-right" style="margin-right: 5px; width:70px;height: 50px;" href="{{ route('profile', $advertisment->user_id) }}" >Contact</a>


                            </div>
                                            </section>
                                            <section class="list-right">
                                                <span class="date">{{$advertisment->created_at}}</span>
                                                <span class="cityname">{{$advertisment->user->address}}</span>


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
                        <strong>Oh!</strong> No advertisments Founds.
                    </div>
                @endif
            </div>
        </div>
    </div>


    {{--<div class="content">
        <div class="container">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            <h1>advertisments</h1>
            @if(count($advertisments) > 0)
                @foreach($advertisments as $advertisment)
                    <div class="panel panel-primary">
                        <div class="panel-heading">

                            {{$advertisment->title}}-{{$advertisment->status}}

                            @if(!Auth::guest())
                                @if(Auth::user()->id == $advertisment->user_id)

                                    <a class="btn btn-warning pull-right" href="/advertisment/{{$advertisment->id}}/edit">Edit</a>

                                    <form action="{{route('advertisment.destroy',['id'=>$advertisment->id])}}" method="POST">
                                        {{csrf_field()}}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-danger pull-right">Delete</button>
                                    </form>

                                @endif
                            @endif


                        </div>
                        <div class="panel-body">
                            <img src="/storage/advertisment_image/{{$advertisment->photo}}" class="img-rounded" style="width: 50%;height: 50%;display: block">
                            <span class="label label-danger">{{$advertisment->created_at}}</span>

                        </div>
                    </div>
                @endforeach
            @else
                <div class="alert alert-danger">
                    <strong>Oh!</strong> No advertisments Founds.
                </div>
            @endif
        </div>
    </div>--}}
@endsection