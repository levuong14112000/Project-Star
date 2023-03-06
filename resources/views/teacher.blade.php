@foreach($ds1 as $n)

<div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
    <div class="faculty-div">
        <div  >
             <img  src="{{asset('img/teacher/'.$n->picture)}}" style="width:300px ;height:400px;object-fit: cover ;" class="img-rounded" />
        </div>
       
        <h3>{{$n->full_name}}</h3>
        <hr />
        <h4>{{$n->address}} <br />
            {{$n->course_name}}
        </h4>
        <p>
            {{$n->decription}}
        </p>
    </div>
</div>

@endforeach