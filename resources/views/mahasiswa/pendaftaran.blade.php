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
							<div class="col-md-4">
								<div class="form-group">
                                    <input type="text" class="form-control" name="first_name" disabled value="<?= $mahasiswa->first_name ?>" placeholder="Nama Lengkap">
									<span class="form-label">Nama Depan</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
                                    <input type="text" class="form-control" name="last_name" disabled value="<?= $mahasiswa->last_name ?>" placeholder="Nama Lengkap">
									<span class="form-label">Nama Belakang</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
                                    <input type="text" class="form-control" name="surename" disabled value="<?= $mahasiswa->surename ?>" placeholder="Nama Lengkap">
									<span class="form-label">Nama Panggilan</span>
								</div>
							</div>
                            <div class="col-md-4">
								<div class="form-group">
                                    <input type="text" class="form-control" name="npm" placeholder="08XXXX" disabled value="<?= $mahasiswa->nim ?>">
									<span class="form-label">NPM</span>
								</div>
							</div>
                            <div class="col-md-8">
								<div class="form-group">
                                    <input type="text" class="form-control" name="alamat" placeholder="Jln. XXX XXXX" value="<?= $mahasiswa->alamat ?>" disabled>
									<span class="form-label">Alamat</span>
								</div>
							</div>
                            <div class="col-md-6">
								<div class="form-group">
                                    <input type="date" name="tgl_lahir" class="form-control" value="<?= $mahasiswa->tgl_lahir ?>" disabled>
									<span class="form-label">Tanggal Lahir</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
                                    <input type="text" name="tmpt_lahir" class="form-control" placeholder="Sumenep, XX-XX-XXXX" value="<?= $mahasiswa->tmpt_lahir ?>" disabled>
									<span class="form-label">Tempat Lahir</span>
								</div>
							</div>
                            <div class="col-md-5">
								<div class="form-group">
                                    <input type="text" name="no_hp" class="form-control" placeholder="08XXXXXXXXXX" value="<?= $mahasiswa->no_hp ?>" disabled>
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
                            <div class="col-md-6">
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
									<span class="form-label">Praktikum</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<select class="form-control" name="prak">
										<option>-- Pilih Kelas --</option>
										<option value="Kelas A">Kelas A</option>
										<option value="Kelas B">Kelas B</option>
									</select>
									<span class="form-label">Kelas</span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-btn">
                                    <a type="submit" href="{{ route('/') }}" class="btn btn-danger">Back</a>
									<input type="submit" class="btn btn-primary" value="Daftar">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>