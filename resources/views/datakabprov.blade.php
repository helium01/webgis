@include('layout.header')


            <center><h3><img height="70" width="70" src="{{ asset('/gambar/bengkulu.png') }}">&nbsp&nbspDaftar Kabupaten & Kecamatan&nbsp&nbsp<img height="70" width="70" src="{{ asset('/gambar/bengkulu.png') }}"></h3></center><hr />
            <center>
	<table border="1">
		<tr>
			<th>No.</th>
			<th width="100px">Nama Kabupaten</th>
            <th width="200px">warna pada peta</th>
		</tr>
		@php
			$no = 1;	
		@endphp
		@foreach($kecamatan as $row)
		<tr>
			<td>{{ $no++ }}</td>
			<td>{{ $row->nama }}</td>
			<td><div style="background-color: {{ $row->warna_kabupaten }}; width: 50px; height: 50px;"></div></td>
		</tr>
		
		@endforeach
	</table>
    <br>
	<a href="{{route('homeadmin')}}"><button>Kembali</button></a>
	</center>

	
	Halaman : {{ $kecamatan->currentPage() }} <br/>
	Jumlah Data : {{ $kecamatan->total() }} <br/>
	Data Per Halaman : {{ $kecamatan->perPage() }} <br/>
	
	<center>
	{{ $kecamatan->links() }}
	</center>
	

@include('layout.footerdata')