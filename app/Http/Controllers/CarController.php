<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Car;

class CarController extends Controller
{
    public function getCarData()
    {
        $cars = Car::all();

        return response()->json($cars);
    }

    public function findCar($id)
    {
        $car = Car::find($id);

        if (!$car) {
            return response()->json(['error' => 'Car not found for ID ' . $id], 404);
        }
        return response()->json($car);
    }

    public function updateCar(Request $request, $id)
    {
        $car = Car::find($id);

        if (!$car) {
            return response()->json(['error' => 'Car not found for ID ' . $id], 404);
        }

        $car->fill($request->all())->save();

        return response()->json($car);
    
    }

    public function deleteCar($id)
    {
        $car = Car::find($id);

        if (!$car) {
            return response()->json(['error' => 'Car not found for ID ' . $id], 404);
        }

        $car->delete();

        return response()->json(['message' => 'Car deleted successfully']);
    }

}