<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Home';
        return view ('index',compact('title'));
    }
    public function about()
    {
        $title = 'About';
        return view ('about',compact('title'));
    }
    public function shop()
    {
        $title = 'Our Team';
        return view ('shop',compact('title'));
    }
    public function contact()
    {
        $title = 'Contact';
        return view ('contact',compact('title'));
    }
    public function portfolio()
    {
        $title = 'Portfolio';
        return view ('portfolio',compact('title'));
    }
    public function portfolioList()
    {
        $title = 'Portfolio list';
        return view ('portfolio-list',compact('title'));
    }
    public function portfolioMasonry()
    {
        $title = 'Gallery';
        return view ('portfolio-masonry',compact('title'));
    }
    public function blogStandard()
    {
        $title = 'Blog standard';
        return view ('blog-standard',compact('title'));
    }
    public function blogSingle()
    {
        $title = 'Blog Post';
        return view ('blog-single',compact('title'));
    }
    public function blogGrid()
    {
        $title = 'Blog grid';
        return view ('blog-grid',compact('title'));
    }
    public function ioi()
    {
        $title = '404';
        return view ('404',compact('title'));
    }
}
