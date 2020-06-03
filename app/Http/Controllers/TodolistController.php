<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Todolist;
use Illuminate\Support\Facades\Auth;
use App\Person;

class TodolistController extends Controller
{
  public static $order = 'desc';

  public static function dbcall()
  {
    return Todolist::orderBy('id',self::$order)
            ->simplePaginate(8);
  }//databaseからすべてのデータ呼び出しを一元メソッド化．

  public static function dbfindById($id)
  {
    return Todolist::where('id',$id);
  }

  public function index(Request $request)
  {
    return view('todo.index',['msg'=>'ログインしてください.']);
  }

  public function page(Request $request)
  {
    session_start();
    if($_SESSION['id'] =='15623' && $_SESSION['password'] == 'HIMITU'){
        return view('todo.todolist',['lists'=>self::dbcall()]);
        //'受け取りで使用なまえ'=>リク->フォームinput属性なまえ
    }else{
        unset($_SESSION['id']);
        unset($_SESSION['password']);
        return view('todo.index');
        exit;
    }
  }

  public function add(Request $request)
  {
        return view('todo.add');
  }

  public function create(Request $request)
  {
      $param = [
        'do'=>$request->do,
        'date'=>$request->date
      ];
      Todolist::insert($param);
      $count = Todolist::count();
      $page = $count / 8 - 1;
      $limit = $count % 8;
      return view('home',['lists'=>self::dbcall()]);
  }

  public function edit(Request $request)
  {
      $id = $request->id;
      $param = self::dbfindById($id)->first();
      return view('todo.edit',['list'=>$param]);
  }

  public function update(Request $request)
  {
    $count = Todolist::count();
    $id = $request->id;
    $param = [
      'do'=>$request->do,
      'date'=>$request->date
    ];
    self::dbfindById($id)->update($param);
    return view('home',['lists'=>self::dbcall()]);
  }

  public function del(Request $request)
  {
      $id = $request->id;
      $param = self::dbfindById($id)->first();
      return view('todo.del',['list'=>$param]);
  }

  public function remove(Request $request)
  {
    $id = $request->id;//hiddenから送られてきたカラムを取得，
    self::dbfindById($id)->delete();
    return view('home',['lists'=>self::dbcall()]);
  }

  public function show(Request $request)
  {
    $do = $request->do;
    $date = $request->date;
    $items= DB::table('todolists')->where('do','like','%'.$do.'%')
                ->offset(0)
                ->limit(8)
                ->get();
    return view('home',['lists'=>$items]);
  }

}
