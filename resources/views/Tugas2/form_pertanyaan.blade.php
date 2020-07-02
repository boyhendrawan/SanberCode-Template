@extends("AdminLte.master")


@section("content")
<div class="card card-primary">
	<form action="{{route('create')}}" method="post">
		@csrf
		<div class="card-body">
			<div class="form-group">
				<label for="judul">Judul</label>
				<input type="text" name="judul" class="form-control" placeholder="Masukkan Judul">
			</div>
			<div class="form-group">
				<label for="isi">Isi</label>
				<textarea class="form-control" rows="3" placeholder="enter isi"
				name="isi" ></textarea>
			</div>
			<button class="btn btn-success">Kirim</button>
		</div>
	</form>
</div>
@endsection