<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function Operations()
    {
        $data= DB::table('students')->paginate(3);
        $data_find= DB::table('students')
        ->where('stu_address', 'Dinajpur')
        ->paginate(3);
        
        return view('student_list', ['students'=>$data], ['base_addresses'=>$data_find]);
    }
    public function stu_delete($id)
    {
       $data=DB::table('students')->delete($id);
       return redirect('view_student_qb');
    }
    public function insert_student(Request $res)
    {
        $insert=DB::table('students')->insert([
            'stu_name' => $res->student_name,
            'stu_address' => $res->product_address,
            'stu_phone' => $res->phone,
            'stu_id' => $res->student_id
        ]);
        return redirect("view_student_qb");
    }
    public function update_student($id)
    {
        $data=DB::table('students')->find($id);
        return view('update_student', ['student_data'=>$data]);
    }
    public function update_student_data(Request $req)
    {
        $data=DB::table('students')
        ->where('id', $req->id)
        ->update(['stu_name' => $req->student_name, 'stu_address' => $req->address, 'stu_phone'=> $req->phone, 'stu_id'=>$req->student_id]);
        return redirect('view_student_qb');
    }
}
