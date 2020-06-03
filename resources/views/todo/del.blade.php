@extends('layouts.home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <p>下記の情報を削除しようとしています．<br>本当に削除してもいいですか</p>
                  <form action="/del" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$list->id}}">
                    <table>
                        <tr>
                          <th>TODO</th><th>Limit</th><th></th>
                        </tr>
                        <tr>
                          <td class="contentdo">{{$list->do}}</td><td class="contentdate">{{$list->date}}</td><td><input type="submit" value="削除する"></td>
                        </tr>
                    </table>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection
