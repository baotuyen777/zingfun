<?php

namespace App\Http\Controllers;

use App\Departments;
use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class DepartmentsController extends Controller
{
    public function index(){
        return redirect('dep/list');
    }
    public function create(){
        $arr_role=array(
            1=>'Quản trị viên',
            2=>'Nhân viên'
        );


        $arr_user = DB::table('users')->select('id', 'name')->get();
        $arr_user_select=array();
        foreach($arr_user as $arr_single_user){
            $arr_user_select[$arr_single_user->id]=$arr_single_user->name;
        }
        $data_action=array(
            'arr_role'=>$arr_role,
            'arr_user_select'=>$arr_user_select,
        );
//        var_dump($arr_user_select);die;
        return view('dep.create',compact('data_action'));
    }
    public function store(Requests\CheckDepartmentsRequest $request){
        $form_data=$request->all();
        Departments::create($form_data);
        return redirect('dep/list');
    }
    public function get_all(){
        $arr_all_dep=Departments::all();
        return view('dep/list',compact('arr_all_dep'));
    }
    public function show(){

    }
    public function edit($id){
        $user=User::findOrfail($id);
        $arr_role=array(
            1=>'Quản trị viên',
            2=>'Nhân viên'
        );
        $arr_department=array(
            1=>'SD1',
            2=>'SD2'
        );
        $data_action=array(
            'arr_role'=>$arr_role,
            'user'=>$user,
            'arr_department'=>$arr_department,
        );
        return view('user.edit',compact('data_action'));
    }
    public function update(Request $request,$id){
        $user=User::find($id);
        $form_data=$request->all();
        $user->update($form_data);
//        $user->update([
//            'name'=>$request->get('name'),
//            'email'=>$request->get('email')
//        ]);

        return \Redirect::route('user.edit',array($user->id))->with('message','Cập nhật thành công');
    }
    public function destroy($id){
        $obj=Departments::find($id);
        $obj->delete();
        echo 1;
    }

}
