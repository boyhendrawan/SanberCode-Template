@extends('AdminLte.master');


@section('content')
<a href="{{route('home_pertanyaan')}}" class="btn btn-danger my-2"> Back</a>
<div class="card text-center">
	<div class="card-header">
		<b>Pertanyaan </b>
	</div>
	<div class="card-body">
		<h3 class="card-text text-center"><b>{{$file->judul}}</b></h3>
		<p class="card-text">{{$file->isi}}</p>
	</div>
</div>


<div class="card card-primary">
	<div class="card-header text-center"><b>Form Jawabban </b> </div>
	<form action="{{route('create_jawab')}}" method="post">
		@csrf
		<div class="card-body">
			<div class="form-group">
				<label for="judul">Jawab</label>
				<input type="text" name="isi" class="form-control" placeholder="Masukkan Jawabban Anda" required >
			</div>
			<input type="hidden" name="pertanyaan_id" value="{{$file->id}}">
			<button class="btn btn-success">Kirim</button>
			<a href="{{route('home_pertanyaan')}}" class="btn btn-danger my-2"> Back</a>
		</div>
	</form>
</div>
@endsection