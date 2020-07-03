@extends("AdminLte.master")

@section('title')
Tanya Jawab 
@endsection
@section("content")
<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action active">
    <div class="d-flex w-100 justify-content-between">
      <h4 class="mb-1">{{$file->judul}}</h4>
     <small><strong>Tanggal Update</strong>  :{{$file->updated_at}}</small>
    </div>
      <hr style="background-color: white">
    <h5 class="mb-1">{{$file->isi}}</h5>
    <small><strong>Dibuat Tanggal</strong>:  {{$file->created_at}}</small>
  </a>

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
		 <table id="example2" class="table table-bordered table-hover ">
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
	<div class="card-header "><b> Jawabban Kamu </b> </div>
	<form action="/jawabban/{{$file->id}}" method="post">
		@csrf
		<div class="card-body">
			<div class="form-group">
				<textarea name="isi" rows="3" class ="form-control" placeholder="Masukkan Jawabban Anda" ></textarea>
			</div>
			<input type="hidden" name="pertanyaan_id" value="{{$file->id}}">
			<div class="card-footer" style="background-color: white">	
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