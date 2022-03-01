@extends('../layout.pendaftaran-layout')
@section('title', 'Home')

@section('content')
<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div style="text-align: center;">
							<h4>Pendaftaran Praktikum</h4>
						</div>
						<form method="post" action="{{ route('daftar') }}">
							<div class="col-md-12">
								<div class="form-group">
                                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
									<span class="form-label">Nama Lengkap</span>
								</div>
							</div>
                            <div class="col-md-4">
								<div class="form-group">
                                    <input type="text" class="form-control" name="npm" placeholder="08XXXX">
									<span class="form-label">NPM</span>
								</div>
							</div>
                            <div class="col-md-8">
								<div class="form-group">
                                    <input type="text" class="form-control" name="alamat" placeholder="Jln. XXX XXXX">
									<span class="form-label">Alamat</span>
								</div>
							</div>
                            <div class="col-md-6">
								<div class="form-group">
                                    <input type="text" name="ttl" class="form-control" placeholder="Sumenep, XX-XX-XXXX">
									<span class="form-label">Tempat Tanggal Lahir</span>
								</div>
							</div>
                            <div class="col-md-6">
								<div class="form-group">
                                    <input type="text" name="noHp" class="form-control" placeholder="08XXXXXXXXXX">
									<span class="form-label">Nomor Handphone</span>
								</div>
							</div>
							<div class="col-md-7">
								<div class="form-group">
									<select class="form-control" name="prasyarat">
                                        <option>-- Prasyarat --</option>
										<option value="Terdaftar sebagai mahasiswa dalam tahun akademik berjalan dengan melakukan KRS">Terdaftar sebagai mahasiswa dalam tahun akademik berjalan dengan melakukan KRS</option>
										<option value="Akan menempuh atau lulus mata kuliah yang berkaitan dengan pelaksanaan praktikum">Akan menempuh atau lulus mata kuliah yang berkaitan dengan pelaksanaan praktikum</option>
										<option value="Memenuhi persyaratan lain sesuai dengan peraturan yang berlaku">Memenuhi persyaratan lain sesuai dengan peraturan yang berlaku</option>
									</select>
									<span class="form-label">Prasyarat</span>
								</div>
							</div>
                            <div class="col-md-5">
								<div class="form-group">
									<select class="form-control" name="prak">
										<option>-- Pilih Praktikum --</option>
										<option value="Bahan">Bahan</option>
										<option value="Ilmu Ukur Tanah">Ilmu Ukur Tanah</option>
										<option value="Perpetaan">Perpetaan</option>
										<option value="Hidrolika">Hidrolika</option>
										<option value="Mekanika Tanah">Mekanika Tanah</option>
										<option value="Perkerasan Jalan Raya">Perkerasan Jalan Raya</option>
										<option value="Beton">Beton</option>
									</select>
									<span class="form-label">Prasyarat</span>
								</div>
							</div>
							
							<div class="col-md-4">
								<div class="form-btn">
                                    <a type="submit" href="{{ route('/') }}" class="btn btn-danger btn-lg">Back</a>
									<input type="submit" class="btn btn-primary btn-lg" value="Daftar">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>