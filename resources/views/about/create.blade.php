@extends('layouts.admin')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                              
                    <a href="{{ route('about.index') }}" class="btn btn-outline-danger">    
                       Kembali
                    </a>
                    
                </div>
			</div>
			  <div class="panel-body">
			  	<form action="{{ route('about.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('sejarah') ? ' has-error' : '' }}">
			  			<label class="control-label">Sejarah </label>	
			  			<TextArea name="sejarah" class="form-control"  required></TextArea>
			  			@if ($errors->has('sejarah'))
                            <span class="help-block">
                                <strong>{{ $errors->first('sejarah') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('visi_misi') ? ' has-error' : '' }}">
			  			<label class="control-label">Visi & misi </label>	
			  			<TextArea name="visi_misi" class="form-control"  required></TextArea>
			  			@if ($errors->has('visi_misi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('visi_misi') }}</strong>
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