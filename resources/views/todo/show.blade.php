@extends('layouts.home')

@section('content')

<table>
    <tr>
      <th>TODO</th><th>Limit</th>
    </tr>
    @foreach($lists as $list)
      <tr>
        <td class="contentdo">{{$list->do}}</td>
        <td class="contentdate">{{$list->date}}</td>
      </tr>
    @endforeach
</table>
<a href="/todolist">戻る</a>

@endsection
