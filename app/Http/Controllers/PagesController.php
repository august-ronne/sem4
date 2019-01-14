<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\User;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }

    public function calendar() {
        return view('calendar');
    }

    public function recipes_collection() {
        return view('recipes');
    }

    public function recipe($recipe) {
        $user = (new User())->getEmail();
        return view('/recipes.'.$recipe)->with(compact('recipe', 'user'));
    }
}
