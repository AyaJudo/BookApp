<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Book;
use App\Review;
use Illuminate\Http\Request;

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
    public function logout(){
        Auth::logout();
        redirect('login');
    }
    public function index()
    {
        return view('home');
        //$user =auth::user();
         
    
        // $reviews = Review::all();
        // $result =array();

        // foreach($reviews as $review){
        //     if($review->user_id == $user->id)
        //         $result =array_add($result,$review->id,$review); 
        // }  
    
        
        //$cnt = count($reviews);
         //return view('profile',$user,compact('result'));
    }
}
