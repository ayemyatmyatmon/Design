<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function index(){

        $responses=Http::get('https://api.themoviedb.org/3/movie/upcoming?api_key=fd5079575b161f2a4e700c8b8548161e&language=en-US&page=1')->json(['results']);
        $finalresults=$responses['results'];
        $fourresults=collect($responses['results'])->take(4);
        $latests=Http::get('https://api.themoviedb.org/3/movie/cartoon/lists?api_key=fd5079575b161f2a4e700c8b8548161e&language=en-US&page=1')->json(['results']);
        return view('welcome',compact('finalresults','fourresults'));
    }

    public function detail($id){
        $detail_result=Http::get('https://api.themoviedb.org/3/movie/'.$id.'?api_key=fd5079575b161f2a4e700c8b8548161e&language=en-US')->json(['']);
        $actors=Http::get('https://api.themoviedb.org/3/movie/'.$id.'/credits?api_key=fd5079575b161f2a4e700c8b8548161e&language=en-US')->json('cast');
        $finalactors=$actors['cast'];
        return view('detail',compact('detail_result','finalactors'));

        // dd($actor);
    }

};
