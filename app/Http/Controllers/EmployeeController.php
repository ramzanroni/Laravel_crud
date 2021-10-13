<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EmployeeController extends Controller
{
    //
    public function employee()
    {
        # code...
        return DB::table('employees')
        ->join('companys', 'employees.id', '=', 'companys.employee_id')
        ->select('employees.name','companys.company_name')
        ->get();
    }
}
