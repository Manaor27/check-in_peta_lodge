
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check-In Peta Lodge</title>
	<link rel="icon" href="img/lpl.png" type="image/png" />
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet"> 
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
  
    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">

	<style>
        .kbw-signature { width: 100%; height: 200px;}
        #sig canvas{
            width: 100% !important;
            height: auto;
        }
    </style>
</head>
<body>
    <section>
        <div class="welcome" id="welcome">
            <header>
                <div class="logo">
                    <img src="img/lpl.png" width="50" height="50">
                </div>
            </header>
            <div class="content">
                <div class="info">
                    <h2>WELCOME TO <br><span>PETA LODGE YOGYAKARTA</span></h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis amet obcaecati assumenda reprehenderit illo. Blanditiis fuga, asperiores harum ex atque maxime omnis illum maiores aliquam quam nesciunt saepe, minus sapiente!</p>
                    <a href="#formulir" class="info-isi">ISI FORM</a>
                </div>
            </div>
            <div class="media-icons">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp"></i></i></a>
            </div>
        </div>
    </section>
    <section>
		@if (session('success_message'))
		<div class="alert alert-success">
			{{ session('success_message') }}
		</div>
        @else
        <div class="alert alert-error">
			{{ session('error_message') }}
		</div>
		@endif
        <div class="formulir" id="formulir">
            <div class="title">
                Form Check-In
            </div>
            <form method="POST" action="{{ route('simpan') }}" enctype="multipart/form-data" class="form">
				@csrf
                <div class="input_field">
                    <label>Nama Depan</label>
                    <input type="text" class="input" name="nama_depan">
                </div>
                <div class="input_field">
                    <label>Nama Belakang</label>
                    <input type="text" class="input" name="nama_belakang">
                </div>
                <div class="input_field">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="input" name="tgl_lahir">
                </div>
                <div class="input_field">
                    <label>Domisili</label>
                    <input type="text" class="input" name="domisili">
                </div>
                <div class="input_field">
                    <label>Nomor Handphone</label>
                    <input type="text" class="input" name="no_hp">
                </div>
                <div class="input_field">
                    <label>Email</label>
                    <input type="text" class="input" name="email">
                </div>
                <div class="input_field">
                    <label>Sosial Media</label>
                    <input type="text" class="input" name="sosial_media">
                </div>
                <div class="input_field">
                    <label>Jenis Trip</label>
                    <select class="input" name="trip">
                        <option value="">Pilih Trip</option>
                        <option value="liburan">Liburan</option>
                        <option value="bisnis">Bisnis Trip</option>
                        <option value="lainnya">Lainya</option>
                    </select>
                </div>
                <div class="terms-box">
                    <div class="terms-text">
                        <h2>Peraturan Hostel Peta Lodge</h2>
                    </div>
                    <ol>
                        <li>Tamu harus dapat menunjukkan tanda pengenal (KTP/SIM/Passport) yang asli dan masih berlaku. Pihak manajemen hostel berhak untuk tidak menerima tamu yang tidak/belum memiliki tanda pengenal (KTP/SIM/Passport).</li>
                        <li>Waktu check-out adalah jam 12 siang. Jika Anda tidak check-out tepat waktu dan tidak menginformasikan ke pihak hostel sebelumnya, maka dikenakan biaya late check-out sesuai ketentuan yang berlaku.</li>
                        <li>Kapasitas capsule bed di dormitory room hanya untuk 1 orang dewasa. Membawa orang lain selain tamu untuk menginap di capsule yang sama akan dikenakan denda sebesar dua kali lipat dari rate harga pada hari tersebut.</li>
                        <li>Tidak diperkenankan untuk membawa makanan dan minuman ke dalam area dormitory.</li>
                        <li>Tidak diperkenankan untuk membawa orang lain selain tamu yang menginap untuk masuk ke area dormitory hostel.</li>
                        <li>Dilarang keras membawa obat-obatan terlarang, senjata api dan senjata tajam ke dalam hostel.</li>
                        <li>Dilarang keras melakukan hubungan atau aktivitas seksual di Peta Lodge Hostel.</li>
                        <li>Mohon menjaga barang bawaan Anda dengan seksama, Kami tidak bertanggung jawab atas kehilangan dan kerusakan.</li>
                        <li>Hostel kami didedikasikan untuk inklusivitas sosial dan tidak mentolerir perilaku anti-sosial. Perilaku anti-sosial mencakup, tetapi tidak terbatas pada, sifat-sifat atau perilaku berikut : agresivitas, kekerasan fisik maupun verbal, penyebaran kebencian, permusuhan, tidak menjaga kebersihan, perilaku seksual yang menyimpang, pelecehan seksual atau hal-hal yang menimbulkan gangguan terkait dengan obat-obatan atau alkohol.</li>
                        <li>Mohon untuk menjaga ketenangan di hostel terutama setelah jam 11 malam, mohon untuk mempertimbangkan kenyamanan tamu lain yang sedang beristirahat.</li>
                        <li>Kamar dan area umum di dalam Hostel merupakan area bebas-rokok. Anda bisa merokok di area yang telah di sediakan.</li>
                        <li>Kami berhak untuk menolak memberikan pelayanan kepada siapapun yang tidak memiliki etika baik yang memungkinkan akan mengganggu keamanan dan ketertiban di Hostel.</li>
                        <li>Kami berhak untuk menolak memberikan pelayanan, tidak mengijinkan masuk dan meminta tamu untuk keluar dari Hostel jika tamu melanggar peraturan diatas atau menyebabkan ketidaknyamanan bagi tamu dan staf hostel.</li>
                        <li>Total biaya penginapan wajib dilunasi sebelum atau pada saat check-in.</li>
                        <li>Deposit yang dikenakan adalah sebesar Rp 100,000.- per orang (Uang Tunai).</li>
                        <li>Anda akan bertanggung jawab atas segala kerusakan / kehilangan properti yang disebabkan oleh Anda. Jika nilai penjumlahan lebih tinggi dari nilai deposit, maka tamu wajib membayar sisanya saat check-out.
                            <ul style="padding:15px;">
                                <li>Loker atau Kunci Akses : Rp 50,000 untuk masing-masing kunci.</li>
                                <li>Lampu Baca : Rp 100,000</li>
                                <li>Handuk, Bantal, Selimut, dan Foot Protector Kasur : Rp 100,00 per barang.</li>
                                <li>Piring, dan Alat Makan : Rp  50,000.</li>
                            </ul>
                        </li>
                    </ol>
                </div>
                <div class="input_field">
                    <label>Tanda Tangan</label>
                    <div id="sig" ></div>
                    <br/>
                    <button id="clear" class="btn btn-danger btn-sm">Clear Signature</button>
                    <textarea id="signature64" name="signed" style="display: none"></textarea>
                </div>
                <div class="input_field terms">
                    <label class="check">
						<input type="checkbox"
							class="form-check-input @error('terms') is-invalid @enderror"
							value="true"
							name="terms"
							id="keep-signed"
							{{ !old('terms') ?: 'checked' }}
						>
                        <span class="checkmark"></span>
                    </label>
					<p>
						Saya menyetujui untuk mengikuti peraturan-peraturan di atas.
					</p>
                </div>
                <div class="input_field">
                    <button type="submit" class="info-cek">Check In</button>
                </div>
			</form>
        </div>
    </section>
    <div class="popup" id="pop-up">
        <a href="#"><i class="fa-solid fa-circle-check"></i></a>
        <h2>Terimakasih!</h2>
        <p>Proses check-in anda berhasil dilakukan. Selamat menikmati penginapan bersama peta lodge</p>
        <button onclick="closePopup()" type="button">OK</button>
    </div>
    <script>
        let popup = document.getElementById("pop-up");

        function openPopup(){
            popup.classList.add("open-popup");
        }
        function closePopup(){
            popup.classList.remove("open-popup");
        }
    </script>
	<script type="text/javascript">
		var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
		$('#clear').click(function(e) {
			e.preventDefault();
			sig.signature('clear');
			$("#signature64").val('');
		});
	</script>
	@include('sweetalert::alert')
</body>
</html>