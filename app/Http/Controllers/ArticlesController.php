<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Articles;
use App\Http\Controllers\Controller;
use App\Http\Requests\CheckArticlesRequest;

class ArticlesController extends Controller
{
    public function index(){
        $articles =Articles::all();
        return view("articles")->with("articles",$articles);
        return $articles;
//        $articles = Articles::lastest('created_at')->where('create_at','<=',Carbon::now())->get();
//        return view('articles')->with('articles',$articles);
    }
    public function create(){
        return view("create");
    }
    public function store(CheckArticlesRequest $request){
        $dulieu_tu_input=$request->all();
        //call model
//        $articles= new Articles();
//        $articles->name=$dulieu_tu_input['name'];
//        $articles->author=$dulieu_tu_input['author'];
//        $articles->save();

        Articles::create($dulieu_tu_input);
        return redirect('articles');

        return $dulieu_tu_input;
    }
    public function edit($id){
        $article= Articles::findOrfail($id);
        return view('edit',compact('article'));
    }
    public function update($id,Request $request){

        $articles=Articles::findOrFail($id);
        $articles->update($request->all());
        return redirect('articles');
    }

    public function show(){

    }

}
