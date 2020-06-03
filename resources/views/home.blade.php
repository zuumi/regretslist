@extends('layouts.home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Dashboard
                    <div class="search">
                      <form action="/show" method="get">
                        @csrf
                        <table>
                            <tr>
                                <td><label for="do"></label><input type="text" name="do" placeholder="DOのキーワードを含む"></td>
                                <td><label for="date"></label><input type="text" name="date" placeholder="Limitのキーワードを含む"></td>
                                <td><input type="submit" value="検索"></td>
                                <td class="insert"><a href="/add">＋ 新規作成</a></td>
                            </tr>
                        </table>
                      </form>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
