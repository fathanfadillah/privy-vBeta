@extends('layout.app')
@section('style')
<style>
#btn-link.scrolled {
    background: #F32013;
    border: none;
    color: white;
}

#btn-link {
    background: white;
    color: #F32013;
    border: none;
}

#btn-link:hover {
    text-shadow: 1px 1px 1xp 1px black;
    filter: brightness(90%);
}

#dokumentasi-image {
    /* z-index: -1; */
}

.testimony {
    background-image: url('../images/testimony-bg.jpg');
}

.cta {
    background-image: url('../images/cta-bg.png');
}
</style>
@endsection
@section('title','Home')
@section('content')
<!-- header -->
<div class="">
    <div class="hero">
        <div class="container">
            <p class="text-white display-3 font-weight-light">Save the future</p>
            <p class="text-white display-3 font-weight-light">with digital technology</p>
            <h4 class="text-white">A powerful API that works with documents.</h4>
        </div>
        <!-- /.hero__bg -->
    </div>


    <!-- .container -->
</div>
<!-- hero -->
<!-- tambahin z index di icon atau kontennya -->
<div class="container">
    <div class="mt-n5 pt-n5">
        <div class="mt-n5 pt-n5 row justify-content-center">
            @foreach($dokumentasis as $d)
            <div id="dokumentasi" class="col-md-3 bg-white m-4 shadow rounded">
                <div class="h-50 text-center text-justify">
                    <div class="row justify-content-center">
                        <div id="dokumentasi-image" class="mt-5">
                            <img src="{{ config('app.url_storage').$d->icon }}" alt="" height="50" width="50">
                        </div>
                    </div>
                    <div class="h-50 col-md-12 mx-auto">
                        <div class="">
                            <h2 id="dokumentasi-title" class="my-5">{{$d->title}}</h2>
                        </div>
                        <div class="">
                            <p id="dokumentasi-description" class="my-5">{{$d->deskripsi}}</p>
                        </div>
                        <div class=""> <u><a href="{{route('login')}}" class="text-danger my-5">
                                    {{$d->link}}
                                </a></u>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="testimony ">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 text-white mx-auto">
                <p class="">PrivyID is very easy to use. AwanTunai uses PrivyID to sign 1,000 documents every month. We
                    trust
                    PrivyID's
                    team and highly recommend PrivyID products to anyone.</p>
                <p>Windy Natriavi
                </p>
                <p>COO AwanTunai, ex-Gojek & McKinsey
                </p>
            </div>
        </div>
    </div>
</div>

<div class="cta">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <h1 class="font-weight-bold">Start building your app today</h1>
                <p>Immerse yourself to explore and taste the API
                    in this playground. Ready?
                    EnterpriseID</p>
                <a class="btn btn-danger btn-lg my-3" href="">Let's Start</a>
            </div>
        </div>
    </div>
</div>
<!-- /.section--wrapper -->
</div>
<!-- /.container -->
@endsection
@section('script')
<script>
$(document).ready(function() {
    $('footer').css("background", "grey");
    $('.nav-link').remove();
});

$(window).scroll(function() {
    $('#btn-link').toggleClass('scrolled', $(this).scrollTop() > 50);
});
</script>
@endsection

<!-- <ion-icon id="arrow" name="arrow-forward-outline" class="ml-2 font-weight-bolder"></ion-icon> -->