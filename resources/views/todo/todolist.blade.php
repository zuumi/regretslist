@extends('layouts.home')
<style media="screen">
  .pagination{ font-size: 10px;}
  .pagination li{ display: inline-block;}
</style>


@section('content')
<div class="search">
    <table>
      <tr>
        <form action="/show" method="get">
        @csrf
        <td><input type="text" name="do" placeholder="[Todoリスト]を含む"></td>
        <td><input type="text" name="date" placeholder="[Limit]キーワード"></td>
        <td><input type="submit" value="検索"></td>
        </form>
        <td class="insert"><a href="/add">＋ 新規作成</a></td>
        <td><a href="/todolist/logout">ログアウト</a></td>
      </tr>
    </table>
</div>

<div class="todolists">
  <table class="lists">
    <tr><th>Todoリスト</th><th>Limit</th><th>Just do it</th><th></th><th></th></tr>
    @foreach($lists as $li)
      <tr>
        <td class="contentdo">{{$li->do}}</td>
        <td class="contentdate">{{$li->date}}</td>
        <td><button type="button">即実行</button></td>
        <td><a href="/edit/{{$li->id}}">更新</a></td>
        <td><a href="/del/{{$li->id}}">削除</a></td>
      </tr>
    @endforeach
  </table>
  {{$lists->links()}}
</div>
@endsection
