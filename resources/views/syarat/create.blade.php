@extends('layouts.admin')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                              
                    <a href="{{ route('syarat.index') }}" class="btn btn-outline-danger">
                        <i class="fa fa-pencil-square-o"></i>    
                       Kembali
                    </a>
                    
                </div>
			</div>
			  <div class="panel-body">
			  	<form action="{{ route('syarat.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('termasuk') ? ' has-error' : '' }}">
			  			<label class="control-label">paket Termasuk</label>	
			  			<input type="text" name="termasuk" class="form-control"  required>
			  			@if ($errors->has('termasuk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('termasuk') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('tidak_termasuk') ? ' has-error' : '' }}">
			  			<label class="control-label">paket tidak termasuk </label>	
			  			<TextArea name="tidak_termasuk" class="form-control"  required></TextArea>
			  			@if ($errors->has('tidak_termasuk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tidak_termasuk') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('persyaratan') ? ' has-error' : '' }}">
			  			<label class="control-label">persyaratan Umroh</label>	
			  			<input type="text" name="persyaratan" class="form-control"  required>
			  			@if ($errors->has('persyaratan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('persyaratan') }}</strong>
                            </span>
                        @endif
					  </div>
					  <div class="form-group {{ $errors->has('dp') ? ' has-error' : '' }}">
			  			<label class="control-label">Dp </label>	
			  			<input type="text" name="dp" class="form-control"  required>
			  			@if ($errors->has('dp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('dp') }}</strong>
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