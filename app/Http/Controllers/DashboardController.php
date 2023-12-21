<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyModel; // Make sure to import your model at the top

class DashboardController extends Controller
{
    // app\Http\Controllers\DashboardController.php

public function index()
{
    $records = MyModel::all(); // Assuming your model is named MyModel
    return view('auth.dashboard', compact('records'));
}

}

    

