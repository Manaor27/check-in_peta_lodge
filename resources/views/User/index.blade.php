
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
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery.signature.min.js"></script>
    <script type="text/javascript" src="js/jquery.ui.touch-punch.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.signature.css">

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
        <div class="container">
            <div class="navbar">
                <img src="img/lpl.png" class="logo">
            </div>

            <div class="row">
                <div class="col-1">
                    <h2>Selamat Datang di <br><span>Peta Lodge Yogyakarta!</span></h2>
                    <p>Dear travelers, terimakasih telah mempercayakan kami sebagai tempat menginap anda di kota Yogyakarta. Silahkan klik tombol di bawah untuk melakukan proses check-in secara online.</p>
                    <a href="#formulir" class="info-isi">Online Check-In</a>
                </div>
                <div class="col-2">
                        <img src="img/Artboard.png" class="welcome">
                </div>
            </div>

            <div class="media-icons">
                <a href="https://www.facebook.com/petalodgejogja/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/petalodgejogja/" target="_blank"><i class="fa-brands fa-instagram"></i></i></a>
                <a href="https://wa.link/i3ytnv" target="_blank"><i class="fa-brands fa-whatsapp"></i></i></a>
                <a href="https://www.youtube.com/channel/UCHtqdrOhHsT9NMGwpDGhj0A" target="_blank"><i class="fa-brands fa-youtube"></i></i></a>
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
            <form id="quickForm" class="form" method="POST" action="simpanCheckin" enctype="multipart/form-data">
                @csrf
                <div class="input_field form-group">
                    <label>Nama Depan</label>
                    <input type="text" class="input" name="nama_depan" value="{{ old('nama_depan') }}">
                </div>
                <div class="input_field form-group">
                    <label>Nama Belakang</label>
                    <input type="text" class="input" name="nama_belakang" value="{{ old('nama_belakang') }}">
                </div>
                <div class="input_field form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="input" name="tgl_lahir" max="<?php echo date('Y-m-d'); ?>" value="{{ old('tgl_lahir') }}">
                </div>
                <div class="input_field form-group">
                    <label>Domisili</label>
                    <input type="text" class="input" name="domisili" value="{{ old('domisili') }}">
                </div>
                <div class="input_field form-group">
                    <label>Nomor Handphone</label>
                    <input type="number" class="input" name="no_hp" value="{{ old('no_hp') }}">
                </div>
                <div class="input_field form-group">
                    <label>Email</label>
                    <input type="text" class="input" name="email" value="{{ old('email') }}">
                </div>
                <div class="input_field form-group">
                    <label>Instagram</label>
                    <input type="text" class="input" name="sosial_media" value="{{ old('sosial_media') }}">
                </div>
                <div class="input_field form-group">
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
                <div class="input_field form-group">
                    <label>Tanda Tangan</label>
                    <div id="sig" ></div>
                    <br/>
                    <button id="clear" class="undo-sign">Clear Signature</button>
                    <textarea id="signature64" name="signed" style="display: none" required></textarea>
                </div>
                <div class="form-group mb-0">
                  <input type="checkbox" name="terms" class="form-check-input">
                  <label>Saya menyetujui untuk mengikuti peraturan-peraturan di atas.</label>
                </div>
                <div class="input_field">
                    <button type="submit" class="info-cek">Check In</button>
                </div>
			</form>
        </div>
    </section>
    <!-- jquery-validation -->
<script src="style/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="style/plugins/jquery-validation/additional-methods.min.js"></script>
	<script type="text/javascript">
		var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
		$('#clear').click(function(e) {
			e.preventDefault();
			sig.signature('clear');
			$("#signature64").val('');
		});
	</script>
    <!-- Page specific script -->
<script>
$(function () {
  $('#quickForm').validate({
    rules: {
      nama_depan: {
        required: true
      },
      nama_belakang: {
        required: true
      },
      tgl_lahir: {
        required: true
      },
      domisili: {
          required: true
      },
      no_hp: {
        required: true,
        number: true,
        minlength: 9
      },
      email: {
        required: true,
        email: true
      },
      sosial_media: {
        required: true
      },
      trip: {
          required: true
      },
      sig: {
        required: true
      },
      terms: {
        required: true
      },
    },
    messages: {
      nama_depan: {
        required: "<p style='color: red;'><b>Nama Depan wajib diisi!</b></p>"
      },
      nama_belakang: {
        required: "<p style='color: red;'><b>Nama Belakang wajib diisi!</b></p>"
      },
      tgl_lahir: {
          required: "<p style='color: red;'><b>Tanggal Lahir wajib diisi!</b></p>"
      },
      domisili: {
          required: "<p style='color: red;'><b>Domisili wajib diisi!</b></p>"
      },
      no_hp: {
          required: "<p style='color: red;'><b>Nomor Handphone wajib diisi!</b></p>",
          number: "<p style='color: red;'><b>Harap masukkan nomor HP yang valid!</b></p>",
          minlength: "<p style='color: red;'><b>Nomor anda harus lebih dari 9 digit!</b></p>"
      },
      email: {
          required: "<p style='color: red;'><b>Email wajib diisi!</b></p>",
          email: "<p style='color: red;'><b>Please enter a vaild email address!</b></p>"
      },
      sosial_media: {
          required: "<p style='color: red;'><b>Nama Instagram wajib diisi!</b></p>"
      },
      trip: {
          required: "<p style='color: red;'><b>Trip wajib diisi!</b></p>"
      },
      signed: {
          required: "<p style='color: red;'><b>Tanda Tangan wajib diisi!</b></p>"
      },
      terms: "<br><p style='color: red;'><b>Harap terima persyaratan kami</b></p>"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
	@include('sweetalert::alert')
</body>
</html>