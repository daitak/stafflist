<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Http\Request;

class StaffController extends Controller {
    public function getIndex(Request $request)
    {
        $staff_list = [];
        if ($request->has('keyword'))
        {
            $search_input = '%'.$request->input('keyword').'%';
            $staff_list = DB::select('select * from staff_master where mail like ? or f_name like ? or l_name like ?', [$search_input, $search_input, $search_input]);
        }

        //$staff_list = DB::select('select * from staff_master where mail like ?', [$search_input]);
        return view('staff.index')->with(compact('staff_list'));
    }

    public function getShow($mail)
    {
        $staff = DB::select('select * from staff_master where mail = ?', [$mail])[0];
        $staff_detail = DB::select('select * from staff_detail where mail = ? order by utime desc', [$mail]);
        if (!$staff->imgfile) {
            $staff->imgfile = "/image/photo.jpg";
        }
        return view('staff.show')->with(compact('staff_detail'))->with(compact('staff'));
    }
}
