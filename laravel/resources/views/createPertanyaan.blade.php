@extends('myview/welcome')

@section('content')
<form action="/pertanyaan" method="POST">
@csrf
<label for="judul">Judul</label>
<input type="text" name="judul" id="judul">
<br>
<label for="isi">Pertanyaan</label>
<input type="text" name="isi" id="isi">
<br>
<input type="submit" value="Submit">
</form>
@endsection