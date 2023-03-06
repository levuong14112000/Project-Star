
@foreach($ds as $n)
<div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
    <div class="about-div">
        <div class="d-flex flex-column align-items-center col-3 form-group" style="
            display: flex;
    flex-direction: column;
    align-items: center;">
            <div class="hand"><img class="img-thumbnail" style="height: 208.96px;" src="{{asset('img/khoahoc/'.$n->picture)}}" alt=""></div>
            <div class="text-center">{{$n->course_name}}</div>
            <div class="pb-1 btn btn-button ">{{number_format($n->price)}} VNĐ</div>
            <div>
                <a class="btn btn-primary" href="{{route('kh',[$n->course_id])}}">Detail</a>
            </div>
        </div>
    </div>
</div>
@endforeach


