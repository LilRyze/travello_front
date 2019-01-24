<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class ReviewsController extends Controller
{
    public function getReviews() {
        $reviews = Review::all();
        return view('index', ['reviews' => $reviews]);
    }
}
