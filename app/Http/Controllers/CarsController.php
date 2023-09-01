<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index() {
        $car = Cars::all();

        return view('welcome', compact('car'));
    }
    public function create() {
        return view('cars.create');
    } 

    public function store(Request $request) {
        $car = new Cars;
        $car->brand = $request->input('brand');
        $car->model = $request->input('model');
        $car->cylinders = $request->input('cylinders');
        $car->cylinder_type = $request->input('cylinder_type');
        $car->description = $request->input('description');
        $car->milage = $request->input('milage');
        if($request->hasfile('car_image')) {
            $file = $request->file('car_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/Cars/', $filename);
            $car->car_image = $filename;
        }
        $car->save();
        return redirect()->back()->with('status', 'your car added successfully.');
        

    }
}
