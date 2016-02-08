<?php namespace App\Http\Controllers;


use Auth;
use App\Medication;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateMedicationRequest;
use Illuminate\HttpResponse;
use Request;


// use Illuminate\Http\Request;

class MedicationsController extends Controller {

	//

  public function __construct()
  {
    $this->middleware('auth');
  }


  public function index()
  {

    $userId = Auth::user()['id'];

    $medications = Medication::where('user_id', $userId)->get();

    return view('medications.index')->with('medications', $medications);
  }


  public function show($id)
  {
    $medication = Medication::find($id);

    if ($medication['user_id'] == Auth::user()['id'])

      return view('medications.show', compact('medication'));

    else

      return redirect('medications');

  }

  public function create()
  {

    return view('medications.create');

  }

  public function store(CreateMedicationRequest $request)
  {

    $input = Request::all();

    $input['user_id'] = Auth::user()->id;

    Medication::create($input);

    // Medication::create($request->all());

    return redirect('medications');

  }

}
