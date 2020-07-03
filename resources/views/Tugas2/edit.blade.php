@extends("AdminLte.master")

@section('title')
Edit Pertanyaan
@endsection
@section("content")
<div class="card card-primary">
	<form action="/pertanyaan/{{$items->id}}" method="post">
		@csrf
		@method('put')
		<div class="card-body">
			<div class="form-group">
				<label for="judul">Judul</label>
				<input type="text" name="judul" class="form-control" placeholder="Tuliskkan Judul" value="{{$items->judul}}" required >
			</div>
			<div class="form-group">
				<label for="isi">Pertanyaan</label>
				<textarea class="form-control" rows="3" placeholder="Tuliskkan pertanyaan"
				name="isi" required  >{{$items->isi}}</textarea>
			</div>
			<button class="btn btn-success">Kirim</button>
			<a href="{{route('home_pertanyaan')}}" class="btn btn-danger my-2"> Back</a>
		</div>
	</form>
</div>
@endsection