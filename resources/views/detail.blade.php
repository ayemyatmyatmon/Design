@extends('layouts.app')
@section('body')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-6" style='border-right:1px solid #FF206E'>
            <img class="d-block w-100% " src="https://image.tmdb.org/t/p/original/{{$detail_result['backdrop_path']}}"
                alt="Second slide" style="width:526px;">
        </div>
        <div class="col-md-6 text-center">

            <h4 style="color:#ddd;text-align:center">{{$detail_result['original_title']}}</h4>
            <div style="width:100px;background:#FF206E;height:3px;margin:auto;margin-top:20px;margin-bottom:20px;">
            </div>

            <p style="color:#ddd;">
                {{$detail_result['overview']}}
            </p>
        </div>
    </div>
    <div>
        <div id="thumbnails">
            @foreach ($finalactors as $finalactor )
            <img class="d-block w-100% " src="https://image.tmdb.org/t/p/w500/{{$finalactor['profile_path']}}"
            alt="Second slide" style="width:526px;">
            @endforeach


        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
var thumbnails = document.getElementById("thumbnails")
var imgs = thumbnails.getElementsByTagName("img")
var main = document.getElementById("main")
var counter=0;

for(let i=0;i<imgs.length;i++){
  let img=imgs[i]


  img.addEventListener("click",function(){
  main.src=this.src
})

}
</script>
@endsection
