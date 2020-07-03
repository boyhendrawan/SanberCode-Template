@extends("AdminLte.master")

@section('title')
Detail Pertanyaan & Jawabban 
@endsection
@section("content")
<div class="card">
	<div class="card-header">
		<h4 class="text-center">Pertanyaan</h4>
	</div>
	<div class="card-body">
		<ul class="list-group">
		  <li class="list-group-item" aria-disabled="true"><h5 class="text-center">{{$pertanyaan->judul}}</h5></li>
		  <li class="list-group-item"><strong>Pertanyaan</strong>:   {{$pertanyaan->isi}}</li>
		  <li class="list-group-item"><strong>Created at</strong>:   {{$pertanyaan->created_at}}</li>
		  <li class="list-group-item"><strong>updated at </strong>:  {{$pertanyaan->updated_at}}</li>
		</ul>
	</div>
</div>


<div class="card">
	<div class="card-body">
		 <table id="example2" class="table table-bordered table-hover text-center">
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

