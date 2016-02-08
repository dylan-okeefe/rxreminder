<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PublicPagesController extends Controller {


    // Create a function to make sure that these pages are available to non-users

    public function __construct()
  {
    $this->middleware('guest');
  }

    // Create the function to serve the about page

    public function about()
    {
      return view('about');
    }

    public function register()
    {
      return view('auth.register');
    }

    public function login()
    {
      return view('auth.login');
    }


	//

}
