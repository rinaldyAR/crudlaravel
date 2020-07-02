@extends('myview/welcome')

@section('content')
<form action="/jawaban/{balas_id}" method="POST">
@csrf
<label for="konten">Jawaban</label>
<input type="text" name="konten" id="konten">
<br>
<label for="balas_id">Id Pertanyaan</label>
<input type="text" readonly="true" name="balas_id" value={{$id}} id="balas_id">
<br>
<input type="submit" value="Submit">
</form>
@endsection