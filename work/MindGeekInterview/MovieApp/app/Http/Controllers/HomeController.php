<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function PHPUnit\Framework\fileExists;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $moviesData = $request->get('movieData');
        dd($moviesData[0]);
        return view("home", ['allMovies'=>$moviesData]);
    }

    public function viewMovie(Request $request){
        $movieName = $request->get('movieName');

        $path = __DIR__ . '/../resources/movies/' . $movieName. '.html';

        if( !fileExists($path)) {
            return redirect('/');
        }

        $movie = ['title' => 'Sample Movie'];

        return view('movie', ['movie' => $movie]);
    }
}
?>
