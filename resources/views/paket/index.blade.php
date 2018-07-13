@extends('layouts.admin')
@section('content')

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30">
                                    
                    <a href="{{ route('paket.create') }}" class="btn btn-outline-danger">
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
					<th>Jenis Paket</th>
					<th>Pembina Umroh</th>
					<th>Fasilitas</th>
					<th>Syarat Dan Ketentuan </th>
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($k as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td> {{ $data->jenis_paket }} </td>
		<td><p><b>{{ $data->Pembina->nama }}</b></p></td>
		<td>{{ $data->Fasilitas->bus }} <br> {{ $data->Fasilitas->pesawat }} <br> {{ $data->Fasilitas->hotel }}</td>
		<td>{{ $data->Syarat->termasuk }} <br> {{ $data->Syarat->tidak_termasuk }} <br> {{ $data->Syarat->persyaratan }} <br>{{ $data->Syarat->dp }}</td>
	<td><a href="{{ route('paket.edit',$data->id) }}" class="btn btn-primary">Edit</a>
                                @if($data->status == 1)
                                <form action="{{ route('paket.publish',$data->id) }}" method="post">
                                    @csrf
                                <button type="submit" class="btn btn-warning">unPublish</button>
                                </form>
                                @elseif($data->publish == 0)
                                <form action="{{ route('paket.publish',$data->id) }}" method="post">
                                    @csrf
                                    <button class="btn btn-info" type="submit">Publish</button>
                                </form>
                                </td>
								<td>
							<form method="post" action="{{ route('paket.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Hapus Data</button>
							</form>
						</td>
                                @endif
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