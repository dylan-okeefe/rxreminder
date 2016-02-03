<?php namespace App\Http\Controllers;

use App\Medication;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MedicationsController extends Controller {

	//

  public function index()
  {
    $medications = Medication::all();

    return view('medications.index')->with('medications', $medications);
  }

}
