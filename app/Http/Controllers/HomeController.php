<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Book;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        return view('home');
    }

    public function search()
    {
        return view('search');
    }
    
    public function TopBooks()
    {
    
        $user = \Auth::user();

        $books = DB::table('books')->where('average_rating', 5)->get();

        return view('TopBooks', compact('books'));

    }

    public function books(){
        $books = DB::table('books')->get();
        return view('books', compact('books'));
    }

    public function clickedbook(Book $book)
    {
        $reviews = DB::table('reviews')->where('book_id', $book->id)->get();
        return view('clickedBook', compact('book', 'reviews'));
    }

    public function addReview(Request $request, Book $book){
        $user = \Auth::user();
        $id = DB::table('reviews')->insertGetId([
            'review' => $request->body,
            'book_id' => $book->id,
            'user_id' => $user->id
            ]);

        return back();
    }

    public function result(Request $request){
        $books = DB::table('books')->where('title', $request->body)->get();

        return view('searchResult', compact('books'));
    }

}
