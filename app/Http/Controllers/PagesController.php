<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('/layouts.home');
    } //
    public function about()
    {
        return view('/layouts.about');
    } //
    public function project()
    {
        return view('/layouts.project');
    } //
    public function services()
    {
        return view('/layouts.services');
    } 
    public function team()
    {
        return view('/layouts.team');
    }
    public function blog()
    {
        return view('/layouts.blog');
    } 
    public function contact()
    {
        return view('/layouts.contact');
    } 
}