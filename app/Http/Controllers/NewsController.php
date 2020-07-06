<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\newstbl;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class NewsController extends Controller
{
    public function index()
    {
    	
    	$NewsData = DB::select('select * from newstbls where date_format(created_at, "%Y-%m-%d") = date_format(now(),"%Y-%m-%d") ');
    	
        return view('index')->with('TNdata',$NewsData);
       
    }

    public function action(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
            if($query != '')
            {
                $data = DB::table('newstbls')
                		->where('id','like','%'.$query.'%')
                        ->orwhere('heading','like','%'.$query.'%')
                        ->orWhere('description','like','%'.$query.'%')
                        ->get();
            }
            else
            {
                $data = DB::table('newstbls')
                        ->get();
            }
            $total_row = $data->count();
            if($total_row > 0)
            {
                foreach ($data as $row) {
                    $output.='
                    <div class="col-lg-6 ">
                    	<p>'.$row->heading.'</p>
                        <p>'.$row->description.'</p>
                        
                        
                    </div>
                    ';                
                }
            }
            else
            {
                $output = '
                    <div class="alert alert-danger" style="margin-left:10px">
                    <p style="margin-left:10px;display: inline;text-align: left;color: #721c24">No data found.</p></div>
                ';
            }
            $data = array(
                'table_data' => $output,
                'total_data' => $total_row
            ); 

            echo json_encode($data,$flag2=0);
        }
    }
}
