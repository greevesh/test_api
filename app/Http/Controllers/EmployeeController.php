<?php

namespace App\Http\Controllers;

use App\Employee; // connects to the model
use App\Http\Resources\Employee as EmployeeResource; // connects to the resource file  
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::paginate(10);
        
        return EmployeeResource::collection($employees);
    }
}
