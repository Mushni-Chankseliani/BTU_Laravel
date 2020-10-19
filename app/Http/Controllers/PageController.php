<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getDefaultPage() {
        $text = 'Hello Default';
        return view('page')->with('title', 'Default')->with('text', $text)->with('theme', 'dark')->with('hasFooter', true);
    }

    public function getSecondPage() {
        $text = 'Hello Second';

        return view('page')->with('title', 'Second')->with('text', $text)->with('theme', 'dark')->with('hasFooter', false);
    }

    public function getThirdPage() {
        $text = 'Hello Third';

        return view('page')->with('text', $text)->with('theme', 'light')->with('hasFooter', true);
    }
}
