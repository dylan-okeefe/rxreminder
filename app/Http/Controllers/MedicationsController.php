<?php namespace App\Http\Controllers;

use App\Medication;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

// use Illuminate\Http\Request;

class MedicationsController extends Controller {

	//

  public function index()
  {
    $medications = Medication::all();

    return view('medications.index')->with('medications', $medications);
  }


  public function show($id)
  {
    $medication = Medication::find($id);

    // dd($medication);

    return view('medications.show', compact('medication'));
  }

  public function create()
  {

    return view('medications.create');

  }

  public function store()
  {

    $input = Request::all();

  }

}
