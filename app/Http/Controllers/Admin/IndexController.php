<?php

namespace App\Http\Controllers\Admin;

use App\Models\Actions;
use App\Models\Comment;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers;
use Auth;
use View;
use DB;



class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function index(Request $request)
    {
      

        return  view('admin.index.index',
            [
                'menu' => 'home',
                'request' => $request

            ]);
    }

    public function getUrl(Request $request){
        $result['result'] = \App\Http\Helpers::getTranslatedSlugRu($request->word);
        return response()->json($result);
    }

    public function getOrderCount(){
        $result['status'] = true;
        $result['comment_count'] = Comment::where('is_view','=','0')->count();
        $result['contact_count'] =  Contact::where('is_show','=','0')->count();
        return response()->json($result);
    }
}
