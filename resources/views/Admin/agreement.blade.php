<html>
<head>
    <title>Agreement</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <table>
        <tr>
            <td><b>Nama</b></td>
            <td><b> : </b></td>
            <td colspan="5">{{$d->nama_depan. " " .$d->nama_belakang}}</td>
        </tr>
        <tr>
            <td><b>Email</b></td>
            <td><b> : </b></td>
            <td>{{$d->email}}</td>
            <td width="100px">&nbsp;</td>
            <td><b>No. HP</b></td>
            <td><b> : </b></td>
            <td>{{$d->no_hp}}</td>
        </tr>
    </table>
    <hr>
    <center><b><u>Peraturan Hostel Peta Lodge</u></b></center>
    <p>
        <ol>
            <li style="text-align: justify; font-size: 12px;">Tamu harus dapat menunjukkan tanda pengenal (KTP/SIM/Passport) yang asli dan masih berlaku. Pihak manajemen hostel berhak untuk tidak menerima tamu yang tidak/belum memiliki tanda pengenal (KTP/SIM/Passport).</li>
            <li style="text-align: justify; font-size: 12px;">Waktu check-out adalah jam 12 siang. Jika Anda tidak check-out tepat waktu dan tidak menginformasikan ke pihak hostel sebelumnya, maka dikenakan biaya late check-out sesuai ketentuan yang berlaku.</li>
            <li style="text-align: justify; font-size: 12px;">Kapasitas capsule bed di dormitory room hanya untuk 1 orang dewasa. Membawa orang lain selain tamu untuk menginap di capsule yang sama akan dikenakan denda sebesar dua kali lipat dari rate harga pada hari tersebut.</li>
            <li style="text-align: justify; font-size: 12px;">Tidak diperkenankan untuk membawa makanan dan minuman ke dalam area dormitory.</li>
            <li style="text-align: justify; font-size: 12px;">Tidak diperkenankan untuk membawa orang lain selain tamu yang menginap untuk masuk ke area dormitory hostel.</li>
            <li style="text-align: justify; font-size: 12px;">Dilarang keras membawa obat-obatan terlarang, senjata api dan senjata tajam ke dalam hostel.</li>
            <li style="text-align: justify; font-size: 12px;">Dilarang keras melakukan hubungan atau aktivitas seksual di Peta Lodge Hostel.</li>
            <li style="text-align: justify; font-size: 12px;">Mohon menjaga barang bawaan Anda dengan seksama, Kami tidak bertanggung jawab atas kehilangan dan kerusakan.</li>
            <li style="text-align: justify; font-size: 12px;">Hostel kami didedikasikan untuk inklusivitas sosial dan tidak mentolerir perilaku anti-sosial. Perilaku anti-sosial mencakup, tetapi tidak terbatas pada, sifat-sifat atau perilaku berikut : agresivitas, kekerasan fisik maupun verbal, penyebaran kebencian, permusuhan, tidak menjaga kebersihan, perilaku seksual yang menyimpang, pelecehan seksual atau hal-hal yang menimbulkan gangguan terkait dengan obat-obatan atau alkohol.</li>
            <li style="text-align: justify; font-size: 12px;">Mohon untuk menjaga ketenangan di hostel terutama setelah jam 11 malam, mohon untuk mempertimbangkan kenyamanan tamu lain yang sedang beristirahat.</li>
            <li style="text-align: justify; font-size: 12px;">Kamar dan area umum di dalam Hostel merupakan area bebas-rokok. Anda bisa merokok di area yang telah di sediakan.</li>
            <li style="text-align: justify; font-size: 12px;">Kami berhak untuk menolak memberikan pelayanan kepada siapapun yang tidak memiliki etika baik yang memungkinkan akan mengganggu keamanan dan ketertiban di Hostel.</li>
            <li style="text-align: justify; font-size: 12px;">Kami berhak untuk menolak memberikan pelayanan, tidak mengijinkan masuk dan meminta tamu untuk keluar dari Hostel jika tamu melanggar peraturan diatas atau menyebabkan ketidaknyamanan bagi tamu dan staf hostel.</li>
            <li style="text-align: justify; font-size: 12px;">Total biaya penginapan wajib dilunasi sebelum atau pada saat check-in.</li>
            <li style="text-align: justify; font-size: 12px;">Deposit yang dikenakan adalah sebesar Rp 100,000.- per orang (Uang Tunai).</li>
            <li style="text-align: justify; font-size: 12px;">Anda akan bertanggung jawab atas segala kerusakan / kehilangan properti yang disebabkan oleh Anda. Jika nilai penjumlahan lebih tinggi dari nilai deposit, maka tamu wajib membayar sisanya saat check-out.
                <ul style="padding:15px;">
                    <li style="text-align: justify; font-size: 12px;">Loker atau Kunci Akses : Rp 50,000 untuk masing-masing kunci.</li>
                    <li style="text-align: justify; font-size: 12px;">Lampu Baca : Rp 100,000</li>
                    <li style="text-align: justify; font-size: 12px;">Handuk, Bantal, Selimut, dan Foot Protector Kasur : Rp 100,00 per barang.</li>
                    <li style="text-align: justify; font-size: 12px;">Piring, dan Alat Makan : Rp  50,000.</li>
                </ul>
            </li>
        </ol>
        <b>Dengan menandatangani form ini, maka Anda setuju untuk mengikuti peraturan-peraturan di atas. Mohon tanda tangan di bawah ini.</b>
    </p>
    <table>
        <tr>
            <td><img src="upload/{{$d->signature}}" alt="" width="100px" ></td>
        </tr>
        <tr>
            <td>({{$d->nama_depan. " " .$d->nama_belakang}})</td>
        </tr>
    </table>
</body>

</html>