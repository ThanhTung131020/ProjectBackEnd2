<?php

namespace App\Http\Controllers;

use App\Models\people;
use Illuminate\Http\Request;

class peopleController extends Controller
{
    //
    public function index(){
        return view('service.index');
    }
    public function dstuvan(){
        $people = people::paginate(2);

        return view('service.index', compact('people'))->with('i', request()->input('page', 1) - 1 * 5);
    }
    public function store(Request $request){

            $data = $request->all();
            $check = $this->create($data);
            return redirect() ->route('home');
    }
    public function create(array $data){
        return people::create([
           'name' => $data['name'],
             'phone' => $data['phone'],
            'email' => $data['email'],
            'message' => $data['message'],
        ]);
    }
    public function destroy($id){
        people::destroy($id);
        return redirect()->back();
    }
}
