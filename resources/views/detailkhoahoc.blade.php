@extends('layout.main')
@section("content")
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4">
            @foreach($ds as $n)
            <div id="course-sec" class="container set-pad">
                <div class="col">
                    <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                        <div class="about-div">
                            <a href="{{route('lsshow',[$n->course_id,$n->subject_id])}}">
                                <h3 class="text-center">{{$n->subject_name}}</h3>
                            </a>
                            <hr />
                            <p class="text-center content-detail">{{($n->content)}} </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
             <div class="col-lg-8">
            <div id="course-sec" class="set-lessions">
                <!-- <div>
{{--                    @foreach($vd as $v)--}}
{{--                        <img class="img-thumbnail" style="height: 208.96px;" src="{{asset('img/sub/'.$v->picture)}}" alt="">--}}
{{--                    @endforeach--}}
                </div>
{{--                @foreach($ls as $l)--}}
{{--                    <strong style="margin: 0px 10px 0px 10px ;">Less {{$l->lession_id}}</strong>--}}
{{--                    <h4>{{$l->lession_name}}</h4>--}}
{{--                @endforeach--}}
            </div> -->
                @yield('lessionsview')
            </div>
        </div>


    </div>
</div>

@endsection
