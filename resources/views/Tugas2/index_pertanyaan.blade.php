@extends("AdminLte.master")

@section('title')
 Daftar pertanyaan
@endsection
@section("content")
@if(session('update'))
<div class="alert alert-success my-4">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>

{{session('update')}}</div>

@elseif(session('create_per'))
<div class="alert alert-success my-4">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>

{{session('create_per')}}</div>
@elseif(session('delete'))
<div class="alert alert-danger my-4">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>

{{session('delete')}}</div>

@endif
	<div class="card">
		<div class="card-body">
			<a href="{{url('/pertanyaan/create')}}" class="btn btn-success my-4">Pertanyaan Baru</a>
			<table id="example1" class="table table-boredered">
				<thead>
					<tr>
						<th>#</th>
						<th>Judul</th>
						<th>Isi</th>
						<th>action</th>
					</tr>
				</thead>
				<tbody>
						@foreach($items as $exe)
					<tr>
						<td>{{$exe->id}}</td>
						<td>{{$exe->judul}}</td>
						<td>{{$exe->isi}}</td>
						<td><a href="{{action('jawabbanController@index',$exe->id)}}" class="btn btn-sm btn-primary"> Jawab</a>
							<a href="{{action('pertanyaanController@show',$exe->id)}}" class="btn btn-sm btn-info">Detail</a>
						<a href="{{action('pertanyaanController@edit',$exe->id)}}" class="btn btn-sm btn-warning">Edit</a>

						<form action="/pertanyaan/{{$exe->id}}/delete" method="post" style="display: inline;">
							@csrf
							@method('DELETE')
							<button class="btn btn-sm btn-danger">Hapus</button>
						</form></td>
						@endforeach
					</tr>
				</tbody>
			</table>
		</div>
	</div>
@endsection


@push('script')
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@endpush