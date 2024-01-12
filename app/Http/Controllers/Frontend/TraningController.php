<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TraningController extends Controller
{
    public function showTrainingPage()
    {
        return view('fontend.home.traning');
    }
}
