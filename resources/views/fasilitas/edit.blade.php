@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			<div class="m-b-10">
                    
                    
                </div>
			</div>
			  <div class="card">
                    <div class="card-header">Update Fasilitas</div>
                    <div class="card-body">
			  	<form action="{{ route('fasilitas.update',$fasilitas->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('bus') ? ' has-error' : '' }}">
			  			<label class="control-label">Jenis Bus</label>	
			  			<input type="text" name="bus" class="form-control" value="{{ $fasilitas->bus }}"  required>
			  			@if ($errors->has('bus'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bus') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('pesawat') ? ' has-error' : '' }}">
			  			<label class="control-label">Jenis Pesawat </label>	
			  			<input type="text" name="pesawat" class="form-control" value="{{ $fasilitas->pesawat }}"  
			  			required>
			  			@if ($errors->has('pesawat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pesawat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('hotel') ? ' has-error' : '' }}">
			  			<label class="control-label">Hotel Berbintang</label>	
			  			<input type="text" name="hotel" class="form-control" value="{{ $fasilitas->hotel }}"  required>
			  			@if ($errors->has('hotel'))
                            <span class="help-block">
                                <strong>{{ $errors->first('hotel') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		
			  		<button type="submit" class="btn btn-outline-primary"> 
                                    <i class="fa fa-check-circle fa-lg"></i>
                                    Simpan
                                </button>
                                <button type="reset" class="btn btn-outline-danger"> 
                                    <i class="fa  fa-exclamation-triangle fa-lg"></i>
                                    Batal
                                </button>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection