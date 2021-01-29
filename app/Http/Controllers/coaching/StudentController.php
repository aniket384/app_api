<?php

namespace App\Http\Controllers\coaching;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;
use App\User;

class StudentController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function addstudent(Request $request)
    {
        $addstudent = new Student;
        $addstudent->c_code = $request['c_code'];        
        $addstudent->c_name = $request['c_name'];
        $addstudent->owner_name = $request['owner_name'];
        $addstudent->c_address = $request['c_address'];
        $addstudent->s_name = $request['s_name'];
        $addstudent->f_name = $request['f_name'];
        $addstudent->m_name = $request['m_name'];
        $addstudent->p_number = $request['p_number'];
        $addstudent->s_address = $request['s_address'];
        $addstudent->s_number = $request['s_number'];
        $addstudent->s_altnumber = $request['s_altnumber'];
        $addstudent->s_email = $request['s_email'];
        $addstudent->s_class = $request['s_class'];
        $addstudent->b_day = $request['b_day'];
        $addstudent->b_time = $request['b_time'];
        $addstudent->s_subject = $request['s_subject'];
        $addstudent->s_dob = $request['s_dob'];
        $addstudent->gender = $request['gender'];
        $addstudent->st_id = $request['st_id'];
        $addstudent->si_number = $request['si_number'];
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $uploadPath = "public/student";
            $originalImage = $file->getClientOriginalName();
            $file->move($uploadPath, $originalImage);
        }
        $addstudent->image = $request['image'];
        $addstudent->save();

        $obj = new User;
        $obj->name = $request->s_name;
        $obj->email = $request->s_email;
        $obj->password = bcrypt($request->s_number);
        $obj->role_id=3;
        $obj->save();
    }
    public function get()
    {
        $records = Student::all();
    	return response()->json($records);
    }
}
