<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{

    public function getEmployees()
    {
        $employees = Employee::orderBy('id', 'DESC')->get();
        return view('employee.employees')->with('employees', $employees);
    }

    public function addEmployee(Request $request)
    {
        Employee::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'birthdate' => $request->birthdate,
            'personal_id' => $request->personal_id,
            'salary' => $request->salary

        ]);
        return redirect(route('employees.list'));
    }

    public function editEmployee($employee_id)
    {
        $employee = Employee::where('id', $employee_id)->firstOrFail();
        return view('employee.editEmployee')->with('employee', $employee);
    }

    public function updateEmployee(Request $request, $employee_id)
    {
        Employee::where('id', $employee_id)->update([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'birthdate' => $request->birthdate,
            'personal_id' => $request->personal_id,
            'salary' => $request->salary

        ]);
        return redirect()->back();

    }

    public function deleteEmployee(Request $request)
    {
        Employee::where('id', $request->employee_id)->delete();
        return redirect()->back();
    }
}
