@extends("AdminLte.master")

@section('title')
Form Pertanyaan
@endsection
@section("content")
<div class="card card-primary">
	<form action="{{route('create')}}" method="post">
		@csrf
		<div class="card-body">
			<div class="form-group">
				<label for="judul">Judul</label>
				<input type="text" name="judul" class="form-control" placeholder="Tuliskan Judul" required >
			</div>
			<div class="form-group">
				<label for="isi">Pertanyaan</label>
				<textarea class="form-control" rows="3" placeholder="Tuliskan Pertanyaan"
				name="isi"  required ></textarea>
			</div>
			<button class="btn btn-success">Kirim</button>
			<a href="{{route('home_pertanyaan')}}" class="btn btn-danger my-2"> Back</a>
		</div>
	</form>
</div>
@endsection