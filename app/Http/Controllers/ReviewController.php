<?php

namespace App\Http\Controllers;
use App\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
	public function show(){
		
	}
    //
	 public function index()
    {
        //
    }
    public function edit($id)
    {
        //
    
    	$review =Review::Find($id);
    	return view('Review.edit')->with('review',$review) ;
    }
    public function destroy($id)
    {
        //
        $review = Review::find($id);
        $review-> delete();
        return redirect('home');
        //return Redirect::to('home');
    }
    public function update(Request $request,$id)
    {
        //
        
         $this->validate($request, [
            'review_text'=> 'required']);

        $review=  Review::Find($id);
        $review->review = $request->input('review_text');
      $review->save();
     return redirect('home');

    }

}
