@extends('layouts.app')
@section('content')

    <div class="content">
        <div class="container">

            <h1>الاعلان</h1>
            @if(count($advertisments) > 0)
                @foreach($advertisments as $advertisment)

                    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">

                            @if(count($advertisments) > 0)
                                @foreach($advertisments as $advertisment)

                        </ul>

                            <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                <div>
                                    <div id="container">


                                        <div class="clearfix"></div>
                                        <ul class="list">

                                                <li>
                                                    <img src="/storage/advertisment_image/{{$advertisment->photo}}" title="" alt="" />
                                                    <section class="list-left">
                                                        <h5 class="title"> {{$advertisment->title}} </h5>
                                                        <h3 class="adprice"> {{$advertisment->status}} </h3>

                                                        <span class="adprice">$290</span>
                                                        <p class="catpath">سيارات </p>
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

                                                        </div>
                                                    </section>
                                                    <section class="list-right">
                                                        <span class="date">{{$advertisment->created_at}}</span>
                                                        <span class="cityname">المدينه</span>


                                                    </section>


                                                    <div class="clearfix"></div>

                                                </li>

                                        </ul>

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



                @endforeach
            @else
                <div class="alert alert-danger">
                    <strong>Oh!</strong> No advertisments Founds.
                </div>
            @endif
        </div>
    </div>


@endsection