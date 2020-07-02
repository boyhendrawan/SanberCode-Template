@extends("AdminLte.master")


@section("content")
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



<div class="card text-center">
	<div class="card-header"> <b> Jawabban </b> </div>
	<div class="card-body">
		<table class="table table-boredered">
			<thead>
				<tr>
					<th>isi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($items as $exe)
				<tr>
					<td>{{$exe->isi}}</td>
				
				@endforeach
				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection