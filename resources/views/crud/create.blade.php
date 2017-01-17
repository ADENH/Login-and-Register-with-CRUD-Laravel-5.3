@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Tutorial CRUD Laravel 5.3</h3>
			<div class="panel panel-default">
				<div class="panel-body">
					<form action="{{route('crud.store')}}" method="post">
					{{csrf_field()}}
						<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
							<input type="text" name="nama" class="form-control" placeholder="Nama">
							{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
							<input type="text" name="alamat" class="form-control" placeholder="Alamat">
							{!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
							<input type="datetime" name="tanggal_lahir" class="form-control" placeholder="yyyy/mm/dd">
						
							{!! $errors->first('tanggal_lahir', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ $errors->has('pekerjaan') ? ' has-error' : '' }}">
							<select name="pekerjaan" id="pekerjaan" class="form-control">
								<option value="">Select One</option>
								<option value="pns">Pegawai Negeri Sipil</option>
								<option value="guru">Guru</option>
								<option value="mahasiswa">Mahasiswa</option>
								<option value="nelayan">Nelayan</option>
								<option value="dll">Lainnya</option>
							</select>
							{!! $errors->first('pekerjaan', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="Simpan">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('.datepicker').datepicker({
    format: 'mm/dd/yyyy',
    startDate: '-3d'
});
</script>
@endsection