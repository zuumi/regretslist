@extends('layouts.home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                  Dashboard

                  <form action="/edit" method="post">
                    <table>
                      @csrf
                      <tr>
                        <th>todo</th><th>limit</th><th></th>
                      </tr>
                      <tr>
                        <input type="hidden" name="id" value="{{$list->id}}">
                        <td><input type="text" name="do" value="{{$list->do}}"></td>
                        <td><input type="text" name="date" value="{{$list->date}}"></td>
                        <td><input type="submit" value="更新する"></td>
                      </tr>
                      </table>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
