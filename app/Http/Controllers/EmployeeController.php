<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use DataTables;

class EmployeeController extends Controller
{
    public function index(Request $request) {
        if ($request->ajax()) {
            $data = Employee::all();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row) {
                           $action_btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">View</a>';
                           return $action_btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('employee');
    }
}
