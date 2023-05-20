@extends('dashboard.layouts.main')

@section('container')
<div class="main-content khusus">
		<div class="konten khusus2">
			<div class="konten_dalem khusus3 mt-5">
					<!-- bagian isi tabel -->
					<div class="headline">
						<h5>Data Kegiatan</h5>
					</div>

                    <div class="container" id="container">

                    <div class="row">
                         <div class="col-md-9">
                            <form action="/dashboard/kegiatan/daftar">
                                 <div class="input-group mb-2">
                                    <input type="text" name="search" class="form-control" placeholder="Search..." value={{ request('search') }}>
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                    
                        <div class="col">
                            <button type="button" class="btn btn-success btn2" data-toggle="modal" data-target="#exampleModalCenter">
                            <a class="text-white" style="text-decoration: none;"href="/dashboard/kegiatan/tambah"> <i class="fa-solid fa-circle-plus"></i> Tambah Kegiatan</a>
						</button>
                        </div>
                    </div>

                @if (session()->has('success'))
                    <div class="alert alert-success mt-2" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                            <div class="row tampil" id="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                    <table class="table table-sm table-hover table-striped table-bordered">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Satuan</th>
                                            <th>Harga</th>
                                            <th>Beban Anggaran</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>

                                    @foreach ($kegiatans as $key => $kegiatan)
                                        <tr>
                                            <td style="text-align: center;">{{ $kegiatans->firstItem() + $key }}</td>
                                            <td>{{ $kegiatan->name }}</td>
                                            <td>{{ $kegiatan->satuan->name }}</td>
                                            <td>{{ $kegiatan->harga }}</td>
                                            <td>{{ $kegiatan->ba }}</td>
                                            <td>
                                                <a href="/dashboard/kegiatan/{{ $kegiatan->id }}/edit" class="badge bg-warning">
                                                    <span data-feather="edit"></span>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="/dashboard/kegiatan/{{ $kegiatan->id }}" method="POST" class="d-inline">
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
				<!-- bagian isi tabel -->
					
			</div>
		</div>
            <div class="page-nav d-flex justify-content-center">
                {{ $kegiatans->links() }}
            </div>

    </div>
@endsection