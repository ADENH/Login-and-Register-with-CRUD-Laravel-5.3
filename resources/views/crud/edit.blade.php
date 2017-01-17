@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Tutorial CRUD Laravel 5.3</h3>
			<div class="panel panel-default">
				<div class="panel-body">
					<form action="{{route('crud.update', $cruds->id)}}" method="post">
					<input name="_method" type="hidden" value="PATCH">
					{{csrf_field()}}
						<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
							<input type="text" name="nama" class="form-control" placeholder="Nama" value="{{$cruds->nama}}">
							{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
							<input type="text" name="alamat" class="form-control" placeholder="alamat" value="{{$cruds->alamat}}">
							{!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
							<input type="date" name="tanggal_lahir" class="form-control" placeholder="yyyy/mm/dd" value="{{$cruds->tanggal_lahir}}">
							{!! $errors->first('tanggal_lahir', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
							<select name="pekerjaan" id="pekerjaan" class="form-control" value="{{$cruds->pekerjaan}}">
								<option value="">Select One</option>
								<option value="pns">Pegawai Negeri Sipil</option>
								<option value="guru">Guru</option>
								<option value="mahasiswa">Mahasiswa</option>
								<option value="nelayan">Nelayan</option>
								<option value="dll">Lainnya</option>
							</select>
							{!! $errors->first('tanggal_lahir', '<p class="help-block">:message</p>') !!}
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
@endsection