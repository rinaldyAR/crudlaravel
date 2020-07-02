@extends('myview/welcome')

@section('content')
<table class="table table-bordered">
    <thead>                  
      <tr>
        <th style="width: 10px">No</th>
        <th>Jawaban</th>
        <th>Pertanyaan id</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($jawaban as $key => $item)
        <tr>
          <td>{{$key+1}}</td>
          <td>{{$item->konten}}</td>
          <td>{{$item->balas_id}}</td>
        </tr>
      @endforeach
      
    </tbody>
  </table>
@endsection