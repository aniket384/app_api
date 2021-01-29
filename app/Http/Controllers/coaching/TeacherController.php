<?php

namespace App\Http\Controllers\coaching;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Transaction;
use App\User;

class TeacherController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function get()
    {
        $records = Transaction::all();
    	return response()->json($records);
    }
}
