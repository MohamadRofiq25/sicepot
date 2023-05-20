@extends('dashboard.layouts.main')

@section('container')
<div class="main-content khusus">
		<div class="konten khusus2">
			<div class="konten_dalem khusus3 mt-5">
					<h2 class="heade" style="color: #4b4f58;">Data SPK</h2>
					<hr style="margin-top: -2px;">
					

                        <div class="container" id="container">

                            <div class="row">
                                <div class="col-md-8">
                                    <form action="/dashboard/mitra/daftar">
                                        <div class="input-group mb-2">
                                            <input type="text" name="search" class="form-control" placeholder="Search..." value={{ request('search') }}>
                                            <button class="btn btn-primary" type="submit">Search</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="col">
                                    <button type="button" class="btn btn-success btn2 ms-2" data-toggle="modal" data-target="#exampleModalCenter">
                                    <a class="text-white" style="text-decoration: none;"href="/dashboard/master_kegiatan/tambah"> <i class="fa-solid fa-circle-plus"></i> Tambah SPK </a>
                                    </button>
                                </div>

                                <div class="col">
                                    <button type="button" class="btn btn-primary btn2" data-toggle="modal" data-target="#exampleModalCenter">
                                    <a class="text-white" style="text-decoration: none;"href="/dashboard/print/print_spk"> <i class="fa-solid fa-print me-2"></i> Cetak SPK</a>
                                    </button>
                                </div>
                            </div>

<br>
                <font size="2"> 
                <table class="table table-sm table-striped table-bordered">
                
                    <tr>
                        <th class="">No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Bulan</th>
                        <th>Nilai</th>
                        <th>Terbilang</th>
                        <th colspan="2">Aksi</th>
                    </tr>
               
                    <tr>
                        <td style="text-align: center;">1</td>
                        <td>AGUS FATHUL AMRI</td>
                        <td>DUSUN KARANGJATI RT 01 RW 016 SAMPANG</td>
                        <td style="text-align: center; margin:5px;">November 2022</td>
                        <td style="text-align: center;">464.000</td>
                        <td style="text-align: center;"> Empat Ratus Enam Puluh Empat Ribu Rupiah </td>
                        <td>
                            <a href="/dashboard/data_spk/spk" class="badge bg-warning">
                                <span data-feather="edit"></span>
                            </a>
                        </td>
                        <td>
                            <form action="/dashboard/data_spk/spk" method="POST"
                                class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Yakin?')"><span><i
                                            data-feather="trash-2"></i></span></button>
                            </form>
                        </td>
                    </tr>

                    <tr>
                        <td style="text-align: center;">1</td>
                        <td>AGUS FATHUL AMRI</td>
                        <td>DUSUN KARANGJATI RT 01 RW 016 SAMPANG</td>
                        <td style="text-align: center; margin:5px;">November 2022</td>
                        <td style="text-align: center;">464.000</td>
                        <td style="text-align: center;"> Empat Ratus Enam Puluh Empat Ribu Rupiah </td>
                        <td>
                            <a href="/dashboard/data_spk/spk" class="badge bg-warning">
                                <span data-feather="edit"></span>
                            </a>
                        </td>
                        <td>
                            <form action="/dashboard/data_spk/spk" method="POST"
                                class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Yakin?')"><span><i
                                            data-feather="trash-2"></i></span></button>
                            </form>
                        </td>
                    </tr>

                    <tr>
                        <td style="text-align: center;">1</td>
                        <td>AGUS FATHUL AMRI</td>
                        <td>DUSUN KARANGJATI RT 01 RW 016 SAMPANG</td>
                        <td style="text-align: center; margin:5px;">November 2022</td>
                        <td style="text-align: center;">464.000</td>
                        <td style="text-align: center;"> Empat Ratus Enam Puluh Empat Ribu Rupiah </td>
                        <td>
                            <a href="/dashboard/data_spk/spk" class="badge bg-warning">
                                <span data-feather="edit"></span>
                            </a>
                        </td>
                        <td>
                            <form action="/dashboard/data_spk/spk" method="POST"
                                class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Yakin?')"><span><i
                                            data-feather="trash-2"></i></span></button>
                            </form>
                        </td>
                    </tr>

                    <tr>
                        <td style="text-align: center;">1</td>
                        <td>AGUS FATHUL AMRI</td>
                        <td>DUSUN KARANGJATI RT 01 RW 016 SAMPANG</td>
                        <td style="text-align: center; margin:5px;">November 2022</td>
                        <td style="text-align: center;">464.000</td>
                        <td style="text-align: center;"> Empat Ratus Enam Puluh Empat Ribu Rupiah </td>
                        <td>
                            <a href="/dashboard/data_spk/spk" class="badge bg-warning">
                                <span data-feather="edit"></span>
                            </a>
                        </td>
                        <td>
                            <form action="/dashboard/data_spk/spk" method="POST"
                                class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Yakin?')"><span><i
                                            data-feather="trash-2"></i></span></button>
                            </form>
                        </td>
                    </tr>

                    <tr>
                        <td style="text-align: center;">1</td>
                        <td>AGUS FATHUL AMRI</td>
                        <td>DUSUN KARANGJATI RT 01 RW 016 SAMPANG</td>
                        <td style="text-align: center; margin:5px;">November 2022</td>
                        <td style="text-align: center;">464.000</td>
                        <td style="text-align: center;"> Empat Ratus Enam Puluh Empat Ribu Rupiah </td>
                        <td>
                            <a href="/dashboard/data_spk/spk" class="badge bg-warning">
                                <span data-feather="edit"></span>
                            </a>
                        </td>
                        <td>
                            <form action="/dashboard/data_spk/spk" method="POST"
                                class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Yakin?')"><span><i
                                            data-feather="trash-2"></i></span></button>
                            </form>
                        </td>
                    </tr>

                    <tr>
                        <td style="text-align: center;">1</td>
                        <td>AGUS FATHUL AMRI</td>
                        <td>DUSUN KARANGJATI RT 01 RW 016 SAMPANG</td>
                        <td style="text-align: center; margin:5px;">November 2022</td>
                        <td style="text-align: center;">464.000</td>
                        <td style="text-align: center;"> Empat Ratus Enam Puluh Empat Ribu Rupiah </td>
                        <td>
                            <a href="/dashboard/data_spk/spk" class="badge bg-warning">
                                <span data-feather="edit"></span>
                            </a>
                        </td>
                        <td>
                            <form action="/dashboard/data_spk/spk" method="POST"
                                class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Yakin?')"><span><i
                                            data-feather="trash-2"></i></span></button>
                            </form>
                        </td>
                    </tr>
                </table>
                </font>
                </div>
                </div>
            </div>
        </div>
					<!-- bagian isi tabel -->	
		</div>
	</div>
            <div class="page-nav d-flex justify-content-center">
                
            </div>
</div>
    </div>
@endsection
