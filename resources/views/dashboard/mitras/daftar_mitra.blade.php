@extends('dashboard.layouts.main')

@section('container')
    <div class="main-content khusus">
		<div class="konten khusus2">
			<div class="konten_dalem khusus3 mt-5">

            <h2 class="heade" style="color: #4b4f58;">Daftar Mitra</h2>
					<hr style="margin-top: -2px;">
					
					<!-- bagian isi tabel -->
					<div class="headline">
						<h5>Data Mitra</h5>
					</div>

        <div class="container" id="container">

        <div class="row">
            <div class="col-md-10">
                <form action="/dashboard/mitra/daftar">
                    <div class="input-group mb-2">
                        <input type="text" name="search" class="form-control" placeholder="Search..." value={{ request('search') }}>
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </form>
            </div>

            <div class="col">
                <button type="button" class="btn btn-success btn2" data-toggle="modal" data-target="#exampleModalCenter">
                <a class="text-white" style="text-decoration: none;"href="/dashboard/mitra/tambah"> <i class="fa-solid fa-circle-plus"></i> Tambah Mitra</a>
                </button>
            </div>
        </div>

            @if (session()->has('success'))
                    <div class="alert alert-success col-lg-12" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
    <div class="row tampil" id="row">
		<div class="col-md-12">
            <div class="table-responsive">
            <table class="table table-sm table-hover table-striped table-bordered">

                    <tr>
                        <th class="">No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Gol</th>
                        <th>Nama Rekening</th>
                        <th>Bank</th>
                        <th>Nomor Rekening</th>
                        <th colspan="2">Actions</th>
                    </tr>
                @foreach ($mitras as $key => $mitra)
                    <tr>
                    <td style="text-align: center;">{{ $mitras->firstItem() + $key }}</td>
                        <td>{{ $mitra->name }}</td>
                        <td>{{ $mitra->alamat }}</td>
                        <td style="text-align: center;">{{ $mitra->golongan }}</td>
                        <td>{{ $mitra->nama_rek }}</td>
                        <td>{{ $mitra->bank->name }}</td>
                        <td>{{ $mitra->nomor_rek }}</td>

                        <td>
							<a href="/dashboard/mitra/{{ $mitra->id }}/edit" class="badge bg-warning">
								<span data-feather="edit"></span>
								</a>
						</td>
						<td>
						<form action="/dashboard/mitra/{{ $mitra->id }}" method="POST" class="d-inline">
							@method('delete')
							@csrf
							<button class="badge bg-danger border-0" onclick="return confirm('Yakin?')"><span><i
							data-feather="trash-2"></i></span></button>
						</form>
						</td>
                    </tr>
                @endforeach


            </table>
            </div>
		</div>
	</div>

</div>
            <div class="page-nav d-flex justify-content-center">
                {{ $mitras->links() }}
            </div>
					
			</div>
		</div>
	</div>
@endsection
