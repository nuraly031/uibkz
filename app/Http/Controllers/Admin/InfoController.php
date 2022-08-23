<?php

namespace App\Http\Controllers\Admin;

use App\Http\Helpers;
use App\Models\Actions;
use App\Models\Info;
use App\Models\Faculty;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use View;
use DB;
use Auth;

class InfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
        View::share('menu', 'info');
    }

    public function index(Request $request)
    {
        $row = Info::select('*');

        if(isset($request->active))
            $row->where('info.is_show',$request->active);
        else $row->where('info.is_show','1');

      
        if(isset($request->info_name) && $request->info_name != ''){
            $row->where(function($query) use ($request){
                $query->where('info_name_ru','like','%' .$request->info_name .'%');
            });
        }
        
        $row = $row->paginate(20);

        return  view('admin.info.info',[
            'row' => $row,
            'request' => $request
        ]);
    }

    public function create()
    {
        $row = new Info();
        $row->info_image = '/media/default.jpg';

        return  view('admin.info.info-edit', [
            'title' => 'Добавить инфо',
            'row' => $row
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'info_text_ru' => 'required'
        ]);

        if ($validator->fails()) {
            $messages = $validator->errors();
            $error = $messages->all();
            return  view('admin.info.info-edit', [
                'title' => 'Добавить инфо',
                'row' => (object) $request->all(),
                'error' => $error[0]
            ]);
        }

        $info = new Info();
        $info->info_text_ru = $request->info_text_ru;
        $info->info_name_ru = $request->info_name_ru;
        $info->save();
        

        return redirect('/admin/info');
    }

    public function edit($id)
    {
        $row = Info::find($id);
     
        return  view('admin.info.info-edit', [
            'title' => 'Редактировать данные инфо',
            'row' => $row
        ]);
    }

    public function show(Request $request,$id){

    }

    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'info_text_ru' => 'required',
        ]);

        if ($validator->fails()) {
            $messages = $validator->errors();
            $error = $messages->all();
            return  view('admin.info.info-edit', [
                'title' => 'Редактировать данные инфо',
                'row' => (object) $request->all(),
                'error' => $error[0]
            ]);
        }

        $info = Info::find($id);
        $info->info_text_ru = $request->info_text_ru;
        $info->info_name_ru = $request->info_name_ru;
        $info->save();
        
        return redirect('/admin/info');
    }

    public function destroy($id)
    {
        $info = Info::find($id);

        $old_name = $info->info_name_ru;

        $info->delete();


    }

    public function changeIsShow(Request $request){
        $info = Info::find($request->id);
        $info->is_show = $request->is_show;
        $info->save();


    }

}
