@extends("AdminLte.master")


@section("content")
	<div class="card">
		<div class="card-body">
			<a href="{{url('/pertanyaan/create')}}" class="btn btn-success my-4">Pertanyaan Baru</a>
			<table class="table table-boredered">
				<thead>
					<tr>
						<th>#</th>
						<th>Judul</th>
						<th>Isi</th>
						<th colspan="2">action</th>
					</tr>
				</thead>
				<tbody>
						@foreach($items as $exe)
					<tr>
						<td>{{$exe->id}}</td>
						<td>{{$exe->judul}}</td>
						<td>{{$exe->isi}}</td>
						<td><a href="{{action('jawabbanController@index',$exe->id)}}" class="btn btn-sm btn-info">Info Jawaban</a></td>
						<td><a href="{{action('jawabbanController@create',$exe->id)}}" class="btn btn-sm btn-primary">Jawaban</a></td>
						@endforeach
					</tr>
				</tbody>
			</table>
		</div>
	</div>
@endsection