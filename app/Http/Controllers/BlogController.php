<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\newstbl;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
    	// $Blog = DB::select('select n.*, c.cname as cnm from newstbls n , categories c,scategories s  where n.cid = s.id AND s.cid = c.id') ->paginate(10);
        $Blog = DB::table('newstbls')
                ->join('scategories','newstbls.cid','=','scategories.id')
                ->join('categories','scategories.cid','=','categories.id')
                ->select('newstbls.*','categories.cname')->paginate(4);
        return view('news')->with("data",$Blog)->with('flag',1);
    }
    public function CategoryWise(Request $request)
    {
        $CWid = $request->input('cid');
        // $CW = DB::select("select n.* from newstbls n ,scategories s  where n.cid = s.id AND s.cid = '$CWid'")->paginate(10);
        $CW = DB::table('newstbls')
                ->join('scategories','newstbls.cid','=','scategories.id')
                ->where('scategories.cid','=',$CWid)
                ->select('newstbls.*')->paginate(4);
        return view('news')->with('data',$CW)->with('flag',0);   
    }

    public function SubCategoryWise(Request $request)
    {
        $SCWid = $request->input('scid');
        // $SCW = DB::select("select * from newstbls where cid = '$SCWid'")->paginate(10);
        $SCW = DB::table('newstbls')
                ->where('cid','=',$SCWid)
                ->select('*')->paginate(4);
        return view('news')->with('data',$SCW)->with('flag',0);   
    }

    public function ViewBlog(Request $request)
    {
    	$id = $request->input('nid');
    	$news = DB::select("select n.*,c.cname as cnm from newstbls n, categories c,scategories s where n.id = '$id' AND (n.cid = s.id AND s.cid = c.id)");
        $Related = DB::select("select n.*,c.cname as cnm from newstbls n, categories c,scategories s where n.cid = s.id AND s.cid = c.id");
        return view('blog')->with('data',$news)->with('RelData',$Related);
        // View::share ( 'notifications', $notifications );
    }  
    public function HomeNews()
    {
    	
    	$NewsData = DB::select('select * from newstbls  ORDER BY created_at LIMIT 6  ');
    	$MostPData = DB::select('select * from newstbls where date_format(created_at, "%Y-%m-%d") = date_format(now(),"%Y-%m-%d")');
        $Allnews = DB::select('select n.*,s.cid as catid FROM newstbls n , scategories s WHERE n.cid = s.id'); /*Data for home category wise*/
    	$Allcategory = DB::select('select * from categories where id IN (SELECT DISTINCT cid from scategories where id IN (SELECT DISTINCT cid FROM newstbls))');
        $VideoData = DB::select('select * from videos where date_format(created_at, "%Y-%m-%d") = date_format(now(),"%Y-%m-%d") order by created_at LIMIT 2 ');
         $Gujdata = DB::select('select * from covidtbls where area = "Gujarat"');
        return view('index')->with('TNdata',$NewsData)->with('Mdata',$MostPData)->with('Allnews',$Allnews)->with('Allcategory',$Allcategory)->with('Videodata',$VideoData)->with('flag2',1)->with('Gujdata',$Gujdata);
       
    }
}
