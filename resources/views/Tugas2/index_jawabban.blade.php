@extends("AdminLte.master")


@section("content")
<div class="card text-center">
	<div class="card-header">
		<b>Pertanyaan </b>
	</div>
	<div class="card-body">
		<h3 class="card-text text-center"><b>{{$file->judul}}</b></h3>
		<p class="card-text">{{$file->isi}}</p>

		
	</div>
</div>



			@if(session('jawabban'))
					<div class="alert alert-success my-4">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						
					{{session('jawabban')}}</div>
				@endif
<div class="card">
	<div class="card-body">
		 <table id="example2" class="table table-bordered table-hover text-center">
			<thead>
				<tr>
					<th>Jawabban</th>
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

<div class="card card-primary">
	<div class="card-header text-center"><b>Form Jawabban </b> </div>
	<form action="/jawabban/{{$file->id}}" method="post">
		@csrf
		<div class="card-body">
			<div class="form-group">
				<label for="judul">Jawab</label>
				<input type="text" name="isi" class="form-control" placeholder="Masukkan Jawabban Anda">
			</div>
			<input type="hidden" name="pertanyaan_id" value="{{$file->id}}">
			<div class="card-footer text-center" style="background-color: white">	
				<button class="btn btn-success">Kirim</button>
				<a href="{{route('home_pertanyaan')}}" class="btn btn-danger my-2"> Back</a>
			</div>
		</div>
	</form>
</div>
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