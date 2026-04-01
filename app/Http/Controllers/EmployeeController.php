<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['employee']= Employee::all();
        // $data['employee']= Employee::orderby('name','asc')->take(2)->get();
       // $data['employee']= Employee::orderby('name','asc')->paginate(2);
        return view('Employee.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'gender'=>'required',
            'age'=>'required',
            'designation'=>'required'
        ]);

        $emp = new Employee();
        $emp->name =$request->input('name');
        $emp->gender =$request->input('gender');
        $emp->age =$request->input('age');
        $emp->designation =$request->input('designation');
        $emp->save();
        return redirect('/employee')->with('Insert_Message','Data has been inserted successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
