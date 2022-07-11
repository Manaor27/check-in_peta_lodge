<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PeraturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peraturan')->insert([
            'peraturan' => '<ol><li>Tamu wajib menunjukkan kartu tanda pengenal berupa (KTP/SIM/Passport) yang asli dan masih berlaku. Pihak manajemen hostel berhak untuk tidak menerima tamu yang tidak/belum memiliki tanda pengenal (KTP/SIM/Passport).</li><li>Waktu <em>check-out </em>adalah jam 12 siang. Jika Anda tidak check-out tepat waktu dan tidak menginformasikan ke pihak hostel sebelumnya, maka dikenakan biaya late check-out sesuai ketentuan yang berlaku.</li><li>Kapasitas capsule bed di dormitory room hanya untuk 1 orang dewasa. Membawa orang lain selain tamu untuk menginap di capsule yang sama akan dikenakan denda sebesar dua kali lipat dari rate harga pada hari tersebut.</li><li>Kapastias private room maksimal hanya untuk 2 dewasa dan 1 anak kecil di bawah 10 tahun. Membawa orang lain di luar kapasitas akan dikenakan denda sebesar 100 ribu rupiah per orang.</li><li>Tidak diperkenankan untuk membawa makanan dan minuman ke dalam area dormitory.</li><li>Tidak diperkenankan untuk membawa orang lain selain tamu yang menginap untuk masuk ke area dormitory hostel.</li><li>Dilarang keras membawa obat-obatan terlarang, senjata api dan senjata tajam ke dalam hostel.</li><li>Dilarang keras melakukan hubungan atau aktivitas seksual di Peta Lodge Hostel.</li><li>Mohon menjaga barang bawaan Anda dengan seksama, Kami tidak bertanggung jawab atas kehilangan dan kerusakan.</li><li>Hostel kami tidak mentolerir perilaku anti-sosial. Perilaku anti-sosial mencakup, tetapi tidak terbatas pada, sifat-sifat atau perilaku berikut : agresivitas, kekerasan fisik maupun verbal, penyebaran kebencian, permusuhan, tidak menjaga kebersihan, perilaku seksual yang menyimpang, pelecehan seksual atau hal-hal yang menimbulkan gangguan terkait dengan obat-obatan atau alkohol.&nbsp;</li><li>Mohon untuk menjaga ketenangan di hostel m setelah jam 10 malam. Mohon untuk mempertimbangkan kenyamanan tamu lain yang sedang beristirahat.</li><li>Kamar dan area umum di dalam Hostel merupakan area bebas-rokok. Anda bisa merokok di area yang telah di sediakan.</li><li>Kami berhak untuk menolak memberikan pelayanan kepada siapapun yang tidak memiliki etika baik yang memungkinkan akan mengganggu keamanan dan ketertiban di Hostel.</li><li>Kami berhak untuk menolak memberikan pelayanan, tidak mengijinkan masuk dan meminta tamu untuk keluar dari Hostel jika tamu melanggar peraturan diatas atau menyebabkan ketidaknyamanan bagi tamu dan staf hostel.</li><li>Total biaya penginapan wajib dilunasi sebelum atau pada saat <em>check-in</em>.</li><li><strong>Deposit</strong> yang dikenakan adalah sebesar <strong>Rp 100,000.- per orang</strong> (Uang Tunai).</li><li>Tamu hostel bertanggung jawab atas segala kerusakan / kehilangan properti yang disebabkan oleh tamu. Jika nilai penjumlahan lebih tinggi dari nilai deposit, maka tamu wajib membayar sisanya saat <em>check-out</em>.<ul><li>Kunci Loker atau Kunci Akses : Rp 50,000.- untuk masing-masing kunci.</li><li>Lampu Baca : Rp 100,000.- .</li><li>Handuk, Bantal, Selimut, dan Foot Protector Kasur : Rp 100,000.- per barang.</li><li>Gelas, Piring, dan Alat Makan : Rp&nbsp; 50,000.-</li></ul></li></ol>'
        ]);
    }
}
