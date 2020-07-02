@extends('myview/welcome')

@section('content')
<table class="table table-bordered">
    <thead>                  
      <tr>
        <th style="width: 10px">No</th>
        <th>Judul</th>
        <th>Pertanyaan</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pertanyaan as $key => $item)
        <tr>
          <td>{{$key+1}}</td>
          <td>{{$item->judul}}</td>
          <td>{{$item->isi}}</td>
        </tr>
      @endforeach
      
    </tbody>
  </table>
@endsection