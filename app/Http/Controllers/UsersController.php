<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use App\Departments;
use App\Http\Requests;
use DB;

class UsersController extends Controller
{
    public function index(){
        $user = Auth::User();
//        var_dump();
        $this->get_all();
    }
    public function create(){

        $arr_role=array(
            1=>'Quản trị viên',
            2=>'Nhân viên'
        );
        $arr_department = DB::table('departments')->select('code', 'name')->get();
        $arr_dep_select=array();
        foreach($arr_department as $arr_single_deppartment){
            $arr_dep_select[$arr_single_deppartment->code]=$arr_single_deppartment->name;
        }

        $data_action=array(
            'arr_role'=>$arr_role,
            'arr_department'=>$arr_dep_select,
        );
        return view('user.create',compact('data_action'));
    }
    public function store(Requests\CheckUsersRequest $request){
        $form_data=$request->all();
        User::create($form_data);
        return redirect('user/list');
    }
    public function get_all(){
        $arr_all_user=User::all();
        return view('user/list',compact('arr_all_user'));
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
        $user=User::find($id);
        $user->delete();
        echo 1;
    }
    public function delete(){
        echo 11;die;
        $user=User::find($id);
        $user->delete();
        return \Redirect::route('user.list',array($user->id))->with('message','Success');
    }
}
