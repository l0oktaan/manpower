<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeeRequest;
use App\Http\Resources\EmployeeResource;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Search(Request $request)
    {
        $employee = Employee::query();

        if ($request->get('filter')){
            $filter = $request->get('filter');
            $employee->where('name','like','%' . $filter . '%')
                    ->orWhere('surname','like','%' . $filter . '%')
                    ->orWhere('citizen_id',$filter)
                    ->get();
            return new EmployeeResource($employee);
        }
    }
    public function index(Request $request)
    {


        if ($request->get('filter')){

            $employee = Employee::query();
            $filter = $request->get('filter');
            $employee->where('name','like','%' . $filter . '%')
                    ->orWhere('surname','like','%' . $filter . '%')
                    ->orWhere('citizen_id',$filter);

            return EmployeeResource::collection($employee->get());
        }

        $employee = new Employee;
        $employee = Employee::where('status',1)
                ->orderBy('id')
                ->get();
        return $employee;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
        // return $request;
        $employee = new Employee($request->all());
        $employee->save();
        return new EmployeeResource($employee);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
