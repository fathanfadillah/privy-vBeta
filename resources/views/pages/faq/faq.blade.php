@extends('layout.app')
@section('style')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<style>
#searchBar {
    transform: translate(-50%, -50%);
    transition: all 1s;
    width: 50px;
    height: 50px;
    background: white;
    box-sizing: border-box;
    border-radius: 25px;
    border: 4px solid white;
}

#searchInput {
    width: 100%;
    height: 42.5px;
    line-height: 30px;
    outline: 0;
    border: 0;
    display: none;
    font-size: 1em;
    border-radius: 20px;
    padding: 20px;
}

.fa {
    box-sizing: border-box;
    padding: 14px;
    width: 42.5px;
    height: 42.5px;
    position: absolute;
    top: 0;
    right: 0;
    border-radius: 50%;
    color: #e52e2b;
    text-align: center;
    font-size: 1.2em;
    transition: all 1s;
}

#searchBar:hover {
    width: 200px;
    cursor: pointer;
}

#searchBar:hover #searchInput {
    display: block;
}

#searchBar:hover .fa {
    background: #e52e2b;
    color: white;
}

/* 
#searchDiv {
    margin-left: 170px;
} */
</style>
@endsection
@section('title','Home')
@section('content')
<!-- header -->
<div class="mb-auto mt-md-n5 mb-md-5">
    <div class="hero">
        <div class="container">
            <div class="text-white text-center">
                <h4 class="display-4 font-weight-bold my-4">F.A.Q</h4>
                <h5 class="font-weight-bold my-3">Frequently Asked Question
                </h5>
                <div class="row">
                    <div class="col-sm-5 mx-auto pl-5 py-4">
                        <div id="searchDiv" class="">
                            <form id="searchBar" action="/faq/search" class="mx-auto" method="GET">
                                <input id="searchInput" type="search" name="search" placeholder="Search . . .">
                                <i class="fa fa-search"></i>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.hero__bg -->
        <!-- .container -->
    </div>
    <!-- hero -->

    <div class="container my-5">
        <div class="row mx-auto justify-content-center">
            @isset($faqstop)
            <div class="col-md-6">

                <div class="row p-5">
                    <h2 class="font-weight-bold">Top Asked Question</h2>
                    <div id="accordion">
                        @foreach($faqstop as $index => $ft)
                        <div class="card my-3">
                            <div class="card-header bg-white border-0 h-25 rounded-lg" id="headingTop">

                                <div class="row">
                                    <div class="col-md-10">{{$ft->question}}</div>
                                    <div class="col-md-2">
                                        <a class="btn btn-link collapsed text-primary float-right"
                                            data-toggle="collapse" data-target="#collapseTop{{ $index }}"
                                            aria-expanded="false" aria-controls="collapseTop">
                                            <ion-icon name="chevron-down-outline"></ion-icon>
                                        </a></div>

                                </div>
                            </div>
                            <div id="collapseTop{{ $index }}" class="collapse" aria-labelledby="headingTop"
                                data-parent="#accordion">
                                <div class="card-body">{{$ft->answer}}</div>
                            </div>
                        </div>
                        <!--  -->

                        @endforeach

                    </div>
                </div>

            </div>
            @endisset
            @isset($faqsen)
            <div id="right" class="col-md-6 p-5">
                <div class="row">
                    <h2 class="font-weight-bold">Enterprise</h2>
                    <div id="accordion">
                        @foreach($faqsen as $index => $fe)
                        <div class="card my-3">
                            <div class="card-header bg-white border-0 h-25 rounded-lg" id="headingEnterprise">

                                <div class="row">
                                    <div class="col-md-10">{{$fe->question}}</div>
                                    <div class="col-md-2">
                                        <a class="btn btn-link collapsed text-primary float-right"
                                            data-toggle="collapse" data-target="#collapseEnterprise{{ $index }}"
                                            aria-expanded="false" aria-controls="collapseEnterprise">
                                            <ion-icon name="chevron-down-outline"></ion-icon>
                                        </a></div>

                                </div>
                            </div>
                            <div id="collapseEnterprise{{ $index }}" class="collapse"
                                aria-labelledby="headingEnterprise" data-parent="#accordion">
                                <div class="card-body">{{$fe->answer}}</div>
                            </div>
                        </div>
                        <!--  -->
                        @endforeach

                    </div>

                </div>
                @endisset
                @isset($faqsgen)
                <div class="row my-3">

                    <h2 class="font-weight-bold">General</h2>
                    <div id="accordion">

                        @foreach($faqsgen as $index => $fg)
                        <div class="card my-3">
                            <div class="card-header bg-white border-0 h-25 rounded-lg" id="headingEnterprise">

                                <div class="row">
                                    <div class="col-md-10">{{$fg->question}}</div>
                                    <div class="col-md-2">
                                        <a class="btn btn-link collapsed text-primary float-right"
                                            data-toggle="collapse" data-target="#collapseGeneral{{ $index }}"
                                            aria-expanded="false" aria-controls="collapseGeneral">
                                            <ion-icon name="chevron-down-outline"></ion-icon>
                                        </a></div>

                                </div>
                            </div>
                            <div id="collapseGeneral{{ $index }}" class="collapse" aria-labelledby="headingGeneral"
                                data-parent="#accordion">
                                <div class="card-body">{{$fg->answer}}</div>
                            </div>
                        </div>
                        <!--  -->
                        @endforeach
                    </div>
                </div>
                @endisset
            </div>
        </div>
    </div>


    <div class="container">
        @isset($faqs)
        @foreach($faqs as $f)
        <div class="card my-5">
            <div class="card-header">
                <h3>{{$f->kategori}}</h3>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>{{$f->question}}</p>
                    <p class="blockquote-footer">{{$f->answer}}</p>
                </blockquote>
            </div>
        </div>
        @endforeach
        @endisset
    </div>

    <!-- /.section--wrapper -->
</div>
<!-- /.container -->
@endsection
@section('script')
<script>
$('#arrow').hide();
$("#right").addClass("border-left");
$(window).resize(function() {

    if (window.matchMedia('(max-width: 768px)').matches) {
        $("#right").removeClass("border-left");
        $("#right").addClass("border-top");
    }
    if (window.matchMedia('(min-width: 768px)').matches) {
        $("#right").removeClass("border-top");
        $("#right").addClass("border-left");
    }
});
</script>
@endsection