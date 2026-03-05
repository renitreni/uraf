<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('welcome');
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function service(): View
    {
        return view('pages.service');
    }

    public function donation(): View
    {
        return view('pages.donation');
    }

    public function event(): View
    {
        return view('pages.event');
    }

    public function feature(): View
    {
        return view('pages.feature');
    }

    public function team(): View
    {
        return view('pages.team');
    }

    public function testimonial(): View
    {
        return view('pages.testimonial');
    }

    public function contact(): View
    {
        return view('pages.contact');
    }

    public function notFound(): View
    {
        return view('pages.404');
    }
}
