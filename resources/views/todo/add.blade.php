@extends('layouts.home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                  Addboard

                  <form action="/add" method="post">
                    @csrf
                      <table>
                        <input type="hidden" name="id">
                        <tr>
                          <th>Todo</th><th>Limit</th><th></th>
                        </tr>
                        <tr>
                          <td><input type="text" name="do"></td>
                          <td><input type="text" name="date"></td>
                          <td><input type="submit" value="追加する"></td>
                        </tr>
                      </table>
                  </form>

              </div>
            </div>
        </div>
    </div>
</div>
@endsection
