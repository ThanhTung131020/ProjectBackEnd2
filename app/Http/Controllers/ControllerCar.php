<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Directory;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;
use function PHPUnit\Framework\returnValueMap;

class ControllerCar extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $data = [];

    public function index()
    {
        //
        return view('Car.index');
    }
    public function products()
    {
        return view('Car.sanpham');
    }
    public function listCar()
    {
        $car = Car::paginate(3);
        if ($key = request()->key) {
            $car = Car::orderBy('id', 'DESC')->where('name', 'like', '%' . $key . '%')->paginate(3);
        } else {
        }
        return view('Car.sanpham', compact('car'))->with('i', request()->input('page', 1) - 1 * 5);
    }
    public function delailProduct($id)
    {
        $cars = DB::table('cars')->find($id);
        return view('Car.detail', compact('cars'));
    }
    public function adminListCar()
    {
        $car = Car::paginate(10);
        return view('admin.index', compact('car'))->with('i', request()->input('page', 1) - 1 * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        //
        return Car::create([
            'name' => $data['name'],
            'price' => $data['price'],
            'description' => $data['description'],
            'company' => $data['company'],
            'mainImage' => $data['filename'],
            'image1' => $data['filename1'],
            'image2' => $data['filename2'],
            'image3' => $data['filename3'],
            'manufacture' => $data['manufacture'],

        ]);
    }
    public function add()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function custumAddCar(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'price' => 'required|integer',
            'description' => 'required',
            'manufacture' => 'required'
        ]);

        $data = $request->all();
        $file = $request->file('mainImage');
        $file1 = $request->file('image1');
        $file2 = $request->file('image2');
        $file3 = $request->file('image3');
        $filename = 'car_' . $file->getClientOriginalName();
        $filename1 = 'car_' . $file1->getClientOriginalName();
        $filename2 = 'car_' . $file2->getClientOriginalName();
        $filename3 = 'car_' . $file3->getClientOriginalName();
        $destinationPath = 'uploads';
        $file->move($destinationPath, 'car_' . $file->getClientOriginalName());
        $file1->move($destinationPath, 'car_' . $file1->getClientOriginalName());
        $file2->move($destinationPath, 'car_' . $file2->getClientOriginalName());
        $file3->move($destinationPath, 'car_' . $file3->getClientOriginalName());
        $data['filename'] = $filename;
        $data['filename1'] = $filename1;
        $data['filename2'] = $filename2;
        $data['filename3'] = $filename3;
        $check = $this->create($data);

        return redirect()->route('admin.car')->with('thongbao', 'them thanh cong');
    }
    public function store(Request $request)
    {
        Car::create($request->all());
        return redirect()->route('admin.car')->with('thongbao', 'them thanh cong');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        //r
        $cars = DB::table('cars')->find($id);

        return view('admin.edit', compact('cars'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {


        $car = Car::find($id);
        $car->name = Request()->name;
        $car->price = Request()->price;
        $car->description = Request()->description;
        $car->company = Request()->company;
        $file = Request()->file('mainImage');
        $file1 = Request()->file('image1');
        $file2 = Request()->file('image2');
        $file3 = Request()->file('image3');
        $filename = 'car_' . $file->getClientOriginalName();
        $filename1 = 'car_' . $file1->getClientOriginalName();
        $filename2 = 'car_' . $file2->getClientOriginalName();
        $filename3 = 'car_' . $file3->getClientOriginalName();
        $destinationPath = 'uploads';
        $file->move($destinationPath, 'car_' . $file->getClientOriginalName());
        $file1->move($destinationPath, 'car_' . $file1->getClientOriginalName());
        $file2->move($destinationPath, 'car_' . $file2->getClientOriginalName());
        $file3->move($destinationPath, 'car_' . $file3->getClientOriginalName());
        $car['mainImage'] = $filename;
        $car['image1'] = $filename1;
        $car['image2'] = $filename2;
        $car['image3'] = $filename3;
        // $car->image1 = Request()->image1;
        // $car->image2 = Request()->image2;
        // $car->image3 = Request()->image3;
        $car->manufacture = Request()->manufacture;

        $car->save();
        return redirect()->route('admin.car');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
