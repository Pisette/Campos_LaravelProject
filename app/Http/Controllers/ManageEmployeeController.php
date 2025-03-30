<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ManageEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $employee = employee::all();
        $employee = employee::paginate(5);
        return view('employeelist')->with('employee', $employee);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addemployee');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'employee_id' => 'required|min:10|max:11|unique:employees',
                'fname' => 'required|min:3|max:25',
                'mname' => 'required|min:3|max:25',
                'lname' => 'required|min:3|max:25',
                'address' => 'required|min:3|max:50',
                'contact_no' => 'required|min:11|max:11'
            ],
            [
                'required' => 'This field is required.',
                'min' => 'This field must be at least :min characters.',
                'max' => 'This field must be at most :max characters.',
                'unique' => 'This field is already taken.'
            ]
        );

        $employee = new employee;

        $employee->employee_id = $request->input('employee_id');
        $employee->fname = $request->input('fname');
        $employee->mname = $request->input('mname');
        $employee->lname = $request->input('lname');
        $employee->address = $request->input('address');
        $employee->contact_no = $request->input('contact_no');

        $employee->save();

        return redirect()->route('employee.index')->with('success', 'Employee added successfully!');



        // employee::create($request->all());

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $employee = employee::find($id);
        // return view('showemployee', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $employee = employee::find($id);
        return view("editemployee")->with("employee", $employee);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
            $request->validate([
            'employee_id' => 'required|string|min:10|unique:employees,employee_id,' . $id,
            'fname' => 'required|min:3|max:25',
            'mname' => 'required|min:3|max:25',
            'lname' => 'required|min:1|max:25',
            'address' => 'required|min:3|max:50',
            'contact_no' => 'required|min:11|max:11'
        ],
        [
            'required' => 'This field is required.',
            'min' => 'This field must be at least :min characters.',
            'max' => 'This field must be at most :max characters.',
            'unique' => 'This field is already taken.'
        ]);
        

        $employee = employee::find($id);
        $employee->employee_id = $request->employee_id;
        $employee->fname = $request->fname;
        $employee->mname = $request->mname;
        $employee->lname = $request->lname;
        $employee->address = $request->address;
        $employee->contact_no = $request->contact_no;
        
        $employee->save();
        
        return redirect()->route('employee.index')->with('success', 'Employee updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        employee::destroy($id);
        return redirect()->route('employee.index')->with('success', 'Employee deleted successfully!');
    }
}
