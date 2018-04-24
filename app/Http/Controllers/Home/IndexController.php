<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Good;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
class IndexController extends Controller
{
    public function index()
    {   
        //定义Redis的key
        $keylist = 'LIST:YT';
        $keyhash = 'HASH:YT:';
       
        //Redis中判断$keylist是否存在
        if(Redis::exists($keylist))
        {   
            //取出唯一识别id数组    //根据键名获取键值
            $id = Redis::lrange($keylist,0,-1);

            foreach($id as $k=>$v)
            {   
                // 取出哈希里的数据写入数组中
                $arr[$k] = $keyhash.$v;
            }
            echo "缓存取出数据成功！打印数据";
            foreach($arr as $k=>$v)
            {
                var_dump(Redis::hVals($v));
            }
            echo '走缓存';
        }else
        {   
            // 从数据库取出数据
            $links = DB::table('links')->get();

            // 遍历时写入Redis list为索引 hash为数据
            foreach($links as $k => $v)
            {   
                 Redis::rpush($keylist,$k);
                 Redis::hMset($keyhash.$k,$v);
            }
            echo "数据写入缓存成功！打印数据";

            foreach($links as $k=>$v)
            {
                var_dump($v);           
            }
            echo '走数据库';
        }
       

       


     // $ytlist = Redis::lrange($keylist,0,-1);
     // dd( $ytlist );
     //   if(Redis::exists($keylist)){
     //            //根据键名获取键值
     //            // dd(Redis::get($keylist));

     //       $id = Redis::lrange($keylist,0,-1);

     //       $arr = array();

     //       foreach($id as $k=>$v)
     //       {

     //       $arr[$k] =  $keyhash.$v;


     //       }

     //       foreach($arr as $k=>$v)
     //       {

     //        var_dump(Redis::hVals($v));


     //       }
 // var_dump($arr);

     //       echo 111;
     //    }else{

     //        echo "走数据库";
     //    }
     //    die;
    

    	
        

    	// $ytlist = Redis::lrange($keylist,0,-1);
     //    $yts=[];
    	// if($links){
     //        foreach ($links as $k){
     //            $yts[]= Redis::hgetall($keyhash.$k);
     //        }
     //    }


     //    $goods=[];
     //    $goods=Good::where('gstatic',1)->orderBy('gid','desc')->take(6)->get();
     //    //类别显示
     //    $types = DB::table('type')->where('pid','0')->get();
     //     $types_2 = [];
     //    foreach($types as $k => $v)
     //    {
     //        $types_2[]=DB::table('type')->where('pid',$v['tid'])->get();
     //    }
     //    $collgoods=Good::where('gstatic',1)->orderBy('gcoll','desc')->take(6)->get();
     //    $slides = DB::table('slide')->orderBy('sort','asc')->get();
     //    $ads = DB::table('ad')->orderBy('aid','asc')->get();
     //    //获取二级分类
     //    return view('home.homepage.index',[
					// 					'links'       =>  $links,
     //                                    'yts'         =>  $yts,
     //                                    'goods'       =>  $goods,
     //                                    'types'       =>  $types,
     //                                    'collgoods'   =>  $collgoods,
     //                                    'slides'      =>  $slides,
     //                                    'ads'      =>  $ads,
					// 					]);
    	
    }

    /**
    *前台搜索功能
    *--hby
    */
    public function search(Request $request)
    {
        // dd($request->has('search'));
        //判断如果为空则返回

        if($request->has('tid'))
        {

            $data = DB::table('goods')
                ->where('tid',$request->input('tid'))
                ->orderBy('gpic','asc')
                ->paginate(8);
        }else{
            if(!$request->has('search'))
            {
                return back();
            }
            //不为空则开始查询
            $data =  DB::table('goods')
                    ->where('gname','like','%'.$request->input('search').'%')
                    ->orwhere('gdesc','like','%'.$request->input('search').'%')
                    ->orderBy('gpic','asc')
                    ->paginate(8);
        }
        // dd($data);
        $cnt = count($data,true);
        
        $arr = ['search'=>$request->input('search')];
        return view('home.goods.search',['data'=>$data,'arr'=>$arr,'cnt'=>$cnt]);
    }


}
