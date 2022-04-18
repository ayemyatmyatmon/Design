@extends('layouts.app')
@section('body')
<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 " src="{{asset('image/movie1.jpg')}}" alt="First slide">
            </div>
            @foreach ( $finalresults as $finalresult)

            <div class="carousel-item">
                <img class="d-block w-100% " src="https://image.tmdb.org/t/p/original/{{$finalresult['backdrop_path']}}"
                    alt="Second slide">
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<hr style="background:#ed5478; height:2px;margin-top:50px;margin-bottom:50px;">

<div class="container">
    <div>
        <h3 style="color:white;margin-bottom:15px;">New items</h3>
        <ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist" style="border_bottom:none;">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1"
                    aria-selected="true">NEW RELEASES</a>
            </li>

            <li class="nav-item" role="presentation">
                <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2"
                    aria-selected="false">MOVIES</a>
            </li>

            <li class="nav-item" role="presentation">
                <a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3"
                    aria-selected="false">TV SERIES</a>
            </li>

            <li class="nav-item" role="presentation">
                <a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4"
                    aria-selected="false">CARTOONS</a>
            </li>
        </ul>
    </div>

    <div class="container my-5" >
        <div class="row">
            @foreach( $fourresults as $fourresult)
            <div class="col-md-6 col-sm-6 mb-4">
                <div class="box">
                    <img src="https://image.tmdb.org/t/p/original/{{$fourresult['backdrop_path']}}">
                    <div class="box-content">
                        <h5 style="color:#ddd;">{{$fourresult['original_title']}}</h5>
                        <p style="color:#ddd;">
                            {{Str::limit($fourresult['overview'],100)}}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <div class="row my-4">
        @foreach ( $finalresults as $finalresult)

        <div class="col-md-3 mb-2" >
                <figure class="first_img">
                    <a href="#"><img class="d-block w-100% " src="https://image.tmdb.org/t/p/original/{{$finalresult['poster_path']}}"
                        alt="Second slide" style="width:200px;height:260px;"></a>
                </figure>

                <div class="my-3">
                        <h6 style="color:#fff;">{{$finalresult['original_title']}}</h6>
                    <div class="detail" >
                        <div style="color:#ed5478;width:180px;float:left;margin-top:10px;"><i class="fas fa-star"></i> {{$finalresult['vote_average']}}</div>
                        <div ><a href="{{route('detail',$finalresult['id'])}}" class="btn btn-theme btn-sm" >Detail</a></div>
                    </div>

                </div>


        </div>
        @endforeach
    </div>
</div>

@endsection

@section('scripts')
<script>
    $(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);

</script>
@endsection
