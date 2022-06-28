
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
                <a href="https://web.facebook.com/petalodgejogja/?_rdc=1&_rdr"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/petalodgejogja/?hl=en"><i class="fa-brands fa-instagram"></i></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp"></i></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></i></a>
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
                    <input type="text" class="input" name="nama_depan" required>
                    @error("nama_depan")
                        <p class="text-danger"><b>Nama Depan wajib diisi!</b></p>
                    @enderror
                </div>
                <div class="input_field">
                    <label>Nama Belakang</label>
                    <input type="text" class="input" name="nama_belakang" required>
                    @error("nama_belakang")
                        <p class="text-danger"><b>Nama Belakang wajib diisi!</b></p>
                    @enderror
                </div>
                <div class="input_field">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="input" name="tgl_lahir" required>
                    @error("tgl_lahir")
                        <p class="text-danger"><b>tanggal Lahir wajib diisi!</b></p>
                    @enderror
                </div>
                <div class="input_field">
                    <label>Domisili</label>
                    <input type="text" class="input" name="domisili" required>
                    @error("domisili")
                        <p class="text-danger"><b>Domisili wajib diisi!</b></p>
                    @enderror
                </div>
                <div class="input_field">
                    <label>Nomor Handphone</label>
                    <input type="number" class="input" name="no_hp" required>
                    @error("no_hp")
                        <p class="text-danger"><b>Nomor Handphone wajib diisi!</b></p>
                    @enderror
                </div>
                <div class="input_field">
                    <label>Email</label>
                    <input type="text" class="input" name="email" required>
                    @error("email")
                        <p class="text-danger"><b>Email wajib diisi!</b></p>
                    @enderror
                </div>
                <div class="input_field">
                    <label>Instagram</label>
                    <input type="text" class="input" name="sosial_media" required>
                    @error("sosial_media")
                        <p class="text-danger"><b>Instagram wajib diisi!</b></p>
                    @enderror
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
                    <?php echo $p->peraturan; ?>
                </div>
                <div class="input_field">
                    <label>Tanda Tangan</label>
                    <div id="sig" ></div>
                    <br/>
                    <button id="clear" class="undo-sign">Clear Signature</button>
                    <textarea id="signature64" name="signed" style="display: none" required></textarea>
                    @error("signed")
                        <p class="text-danger"><b>Signature wajib diisi!</b></p>
                    @enderror
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