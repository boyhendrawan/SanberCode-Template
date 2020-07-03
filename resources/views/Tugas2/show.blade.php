@extends("AdminLte.master")

@section('title')
Detail Pertanyaan & Jawabban 
@endsection
@section("content")
<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action active">
    <div class="d-flex w-100 justify-content-between">
      <h4 class="mb-1">{{$pertanyaan->judul}}</h4>
     <small><strong>Tanggal Update</strong>  :{{$pertanyaan->updated_at}}</small>
    </div>
      <hr style="background-color: white">
    <h5 class="mb-1">{{$pertanyaan->isi}}</h5>
    <small><strong>Dibuat Tanggal</strong>:  {{$pertanyaan->created_at}}</small>
  </a>

</div>

<div class="card">
	<div class="card-body">
		<table id="example2" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Jawabban</th>
				</tr>
			</thead>
			<tbody>
				@foreach($jawabban as $exe)
				<tr>
					<td>{{$exe->isi}}</td>

					@endforeach
				</tr>
			</tbody>
		</table>
	</div>
</div>

<a href="{{route('home_pertanyaan')}}" class="btn btn-danger my-2"> Back</a>
@endsection


@push("script")
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

