<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('home/index');
	}
	public function contact()
	{
		return view('contact/index');
	}
	public function blog()
	{
		return view('blog/index');
	}
	public function blogPost()
	{
		return view('blog-post/index');
	}
	public function profil()
	{
		return view('profile/index');
	}
	public function matakuliah()
	{
		return view('matakuliah/index');
	}
}
