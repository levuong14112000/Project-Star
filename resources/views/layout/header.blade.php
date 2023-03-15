<div class="navbar navbar-inverse navbar-fixed-top " id="menu">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('main')}}"><img class="logo-custom" src="{{asset('picture/logo1.png')}}" alt="" /></a>
        </div>
        <div class="navbar-collapse collapse move-me">
            <ul class="nav navbar-nav navbar-right .nav">
                <li style="line-height: 65px ;opacity: 0.8;">SUBJECT

                    <select value="" class="option-header">
                        @foreach($xuat as $n)
                        <option value="{{$n->subject_id}}">{{$n->subject_name}}</option>
                        @endforeach
                    </select>

                </li>
                <li><a href="#home">HOME</a></li>
                <li><a href="#features-sec">FEATURES</a></li>
                <li><a href="#faculty-sec">FACULTY</a></li>
                <li><a href="#course-sec">COURSES</a></li>
                <li><a href="#contact-sec">CONTACT</a></li>
                <li><a><i style="font-size: 1.2em" class="fa fa-solid fa-bars menu top_menu"></i>
                    </a>
                    <ul class="show-menu">
                        @foreach($mn as $m)
                        <li><a href="{{route('kh',[$m->course_id])}}">{{$m->course_name}}</a> </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>

    </div>
</div>