@extends('layouts.home')

@section('content')
<div class="container">
  <p>{{$msg}}</p>
  <form action="/todolist" method="post">
    @csrf
    <table class="login">
      <tr><th class="thead">ID</th><td><input class="ipbox" type="text" name="id" id="id"></td></tr>
      <tr><th class="thead">PASS</th><td><input class="ipbox" type="password" name="password" id="pass"></td></tr>
    </table>
    <input type="submit" value="ログイン" id="loginbtn">
  </form>
</div>
<div id="hinto">
  ※わしは市五郎兄さんじゃ，パスワードはHIMITUじゃ！
</div>
@endsection
