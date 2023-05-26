<?php

namespace App\Http\Controllers;

use App\Models\people;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class peopleController extends Controller
{
    //
    public $status = 'chưa tư ấn';
    public function index(){
        return view('service.index');
    }
    public function dstuvan(){
        $people = people::orderBy('created_at','DESC')->paginate(10);

        return view('service.index', compact('people'))->with('i', request()->input('page', 1) - 1 * 5);
    }
    public function store(Request $request  ){

            $request->validate([
               'name' =>'required',
                'phone' =>'required|min:10',
                'email'=>'required|email',
                'message'=>'required'
            ]);

          $this->create(['name'=> $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
              'message' => $request->message,
            'status'   => 'chưa tư vấn',
            ] );
            return redirect() ->route('home');
    }

    public function create(array $data ){
        return people::create([
           'name' => $data['name'],
             'phone' => $data['phone'],
            'email' => $data['email'],
            'message' => $data['message'],
            'status' => $data['status']

        ]);
    }
    public function destroy($id){
        people::destroy($id);
        return redirect()->back();
    }
    public function updateStatus($id){
        $people = people::find($id);
        $people->status = 'đã tư vấn';
        $people->save();
        return redirect()->back();
    }
}
