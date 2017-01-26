<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Review;
use App\Http\Controllers\Auth;

class ProfileController extends Controller
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
        $user = \Auth::user();
        return view('profile', compact('user'));
    }

    public function updateGenres(Request $request)
    {
        $user = \Auth::user();

        $user->prefered_genre = $request->body;

        $user->save();

        return back();
    }

    public function myReviews()
    {
        $user = \Auth::user();

        $reviews = DB::table('reviews')->where('user_id', $user->id)->get();

        return view('myReviews', compact('reviews'));
    }

    public function updateReview(Request $request, Review $review)
    {

         $review->review = $request->body;

         $review->save();

         return back();
    }

    public function clickedReview(Review $review)
    {

        return view('clickedReview', compact('review'));
    }

    public function deleteReview(Review $review)
    {
        $review->delete();
        return redirect('/profile/myReviews')->withSuccess('Review has been deleted');
    }
}
