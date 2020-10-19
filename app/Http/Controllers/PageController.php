<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getDefaultPage() {
        $content_text = 'Hello Default';
        return view('page')->with('page_title', 'Default')->with('content_text', $content_text)->with('theme', 'dark')->with('hasFooter', true);
    }

    public function getSecondPage() {
        $content_text = 'Hello Second';

        return view('page')->with('page_title', 'Second')->with('content_text', $content_text)->with('theme', 'dark')->with('hasFooter', false);
    }

    public function getThirdPage() {
        $content_text = 'Hello Third';

        return view('page')->with('content_text', $content_text)->with('theme', 'light')->with('hasFooter', true);
    }
}
