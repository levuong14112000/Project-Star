@extends('detailkhoahoc')
@section("lessionsview")
<div class="d-flex flex-column">
    <div>
        @foreach($vd as $v)
        <img class="img-thumbnail" style="height: 20%;" src="{{asset('img/sub/'.$v->picture)}}" alt="">
        @endforeach
    </div>
        @foreach($ls as $l)
        <h4>{{$l->lession_name}}</h4>
        @endforeach
    </div>
</div>

@endsection
