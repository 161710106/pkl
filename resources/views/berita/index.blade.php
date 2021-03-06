@extends('layouts.admin')
@section('content')

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                   
                    <a href="{{ route('berita.create') }}" class="btn btn-outline-danger">
                        <i class="fa fa-pencil-square-o"></i>    
                        Tambah Data
                    </a>
                    
                </div>
			</div>
			</div>
<table class="table table-borderless table-striped table-earning">
			<thead>
				<tr>
					<th>No</th>
					<th>Tanggal</th>
					<th>Judul</th>
					<th>Isi Berita</th>
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($beritas as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td> {{ $data->tanggal }} </td>
		<td><p> {{ $data->judul }} </p></td>
		<td><p> {{ $data->isi }} </p></td>	
	<td>
		<a class="btn btn-primary" href=" {{ route('berita.edit',$data->id)}} ">Edit Data</a>
	</td>
	<td>
		<a class="btn btn-success" href=" {{ route('berita.show',$data->id)}} ">Lihat data</a>
	</td>
	<td>
							<form method="post" action="{{ route('berita.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Hapus Data</button>
							</form>
						</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection