<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Staff;
use App\Models\Content;
use App\Models\Catagory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Gunawan',
            'email' => 'gunawan29092000@gmail.com',
            'password' => bcrypt('1234')

        ]);


        //Staff::factory(10)->create();




        // Home 


        //Syarat Uji
        Catagory::create([
            'name' => 'Syarat Pengujian',
            'page' => 'Home',
            'describe' => 'Penuhi persyaratan berikut agar dapat melakukan pengujian kendaraan bermotor di Dishub Grobogan',
            'orientasi' => '1',
            'view' => '1'
        ]);

        //Uji baru 
        Content::create([
            'name' => 'Uji Baru',
            'body' =>  '<p>1.Kendaraan yang akan di uji (Bersih tanpa Muatan)</p><br>
                        <p>2.STNK dan Pajakyang masih berlaku (Asli dan Foto Copy)</p><br>
                        <p>3.Foto copy KTP pemilik kendaraan sesuai STNK</p><br>
                        <p>4.SRUT (Surat Registrasi Uji Tipe) Asli</p>',
            'Catagory_id' => '1'
        ]);

        //Uji Berkala 
        Content::create([
            'name' => 'Uji Berkala ',
            'body' =>  '<p>1.Kendaraan yang akan di uji (Bersih tanpa Muatan)</p><br>
                        <p>2.STNK dan Pajakyang masih berlaku (Asli dan Foto Copy)</p><br>
                        <p>3.Foto copy KTP pemilik kendaraan sesuai STNK</p><br>
                        <p>4.Kartu Pengawasan (Bagi Angkutan Umum Penumpang)</p><br>
                        <p>5.Kartu dan Bukti Uji</p>',
            'Catagory_id' => '1'
        ]);

        //Numpang Uji Masuk 
        Content::create([
            'name' => 'Numpang Uji MAsuk',
            'body' =>  '<p>1.Kendaraan yang akan di uji (Bersih tanpa Muatan)</p><br>
                        <p>2.STNK dan Pajakyang masih berlaku (Asli dan Foto Copy)</p><br>
                        <p>3.Foto copy KTP pemilik kendaraan sesuai STNK</p><br>
                        <p>4.Surat rekomendasi Numpang Uji dari daerah Asal</p><br>
                        <p>5.Kartu dan Bukti Uji</p>',
            'Catagory_id' => '1'
        ]);

        //Numpang Uji Keluar 
        Content::create([
            'name' => 'Numpang Uji Keluar',
            'body' =>  '<p>1.STNK dan Pajakyang masih berlaku (Asli dan Foto Copy)</p><br>
                        <p>2.Kartu dan Bukti Uji</p>',
            'Catagory_id' => '1'
        ]);
        //Mutasi masuk 
        Content::create([
            'name' => 'Mutasi Masuk',
            'body' =>  '<p>1.Kendaraan yang akan di uji (Bersih tanpa Muatan)</p><br>
                        <p>2.STNK dan Pajakyang masih berlaku (Asli dan Foto Copy)</p><br>
                        <p>3.Kartu Induk dari daerah asal</p><br>
                        <p>4.Surat rekomendasi mutasi dari daerah Asal</p><br>
                        <p>5.Kartu dan Bukti Uji</p>',
            'Catagory_id' => '1'
        ]);
        //Mutasi Keluar 
        Content::create([
            'name' => 'Mutasi Keluar',
            'body' =>  '<p>1.STNK baru atau fiskal kendaraan</p>',
            'Catagory_id' => '1'
        ]);


        //Selesai Uji 
        Catagory::create([
            'name' => 'Selesai Uji',
            'page' => 'Home',
            'describe' => 'Jumlah kendaraan yang telah melakukan pengujian di Dishub Grobogan berdasarkan jenis kendaraannya',
            'orientasi' => '2',
            'view' => '2'
        ]);
        Content::create([
            'name' => 'Mobil Bus Kecil',
            'body' =>  '',
            'Catagory_id' => '2'
        ]);
        Content::create([
            'name' => 'Mobil Barang Bak Terbuka',
            'body' =>  '',
            'Catagory_id' => '2'
        ]);
        Content::create([
            'name' => 'Mobil Bus Sedang',
            'body' =>  '',
            'Catagory_id' => '2'
        ]);
        Content::create([
            'name' => 'Kendaraan Khusus',
            'body' =>  '',
            'Catagory_id' => '2'
        ]);
        Content::create([
            'name' => 'Mobil Barang Bak Tertutup',
            'body' =>  '',
            'Catagory_id' => '2'
        ]);
        Content::create([
            'name' => 'Mobil Barang',
            'body' =>  '',
            'Catagory_id' => '2'
        ]);
        Content::create([
            'name' => 'Mobil Bus Besar',
            'body' =>  '',
            'Catagory_id' => '2'
        ]);
        Content::create([
            'name' => 'Mobil Penumpan',
            'body' =>  '',
            'Catagory_id' => '2'
        ]);
        Content::create([
            'name' => 'Kereta Tempelan Bak Tertutup',
            'body' =>  '',
            'Catagory_id' => '2'
        ]);
        Content::create([
            'name' => 'Mobil Penarik',
            'body' =>  '',
            'Catagory_id' => '2'
        ]);
        Content::create([
            'name' => 'Kereta Tempelan Tangki',
            'body' =>  '',
            'Catagory_id' => '2'
        ]);
        Content::create([
            'name' => 'Kereta Tempelan Bak Terbuka',
            'body' =>  '',
            'Catagory_id' => '2'
        ]);
        Content::create([
            'name' => 'Mobil Tangki',
            'body' =>  '',
            'Catagory_id' => '2'
        ]);


        //profile
        //Top Profile

        Catagory::create([
            'name' => 'Top Profile',
            'page' => 'Profile',
            'orientasi' => '1',
            'view' => '1'
        ]);

        Content::create([
            'name' => 'Top Profile',
            'body' =>  'Adalah sebuah layanan untuk masyarakat berupa aplikasi pendaftaran online guna memudahkan masyarakat yang akan melakukan Pengujian Kendaraan Bermotor di Dishub Kabupaten Grobogan.',
            'Catagory_id' => '3'
        ]);

        //Keunggulan
        Catagory::create([
            'name' => 'Keunggulan',
            'page' => 'Profile',
            'orientasi' => '2',
            'view' => '1'
        ]);

        Content::create([
            'name' => 'Pendaftaran Online',
            'body' =>  '',
            'Catagory_id' => '4'
        ]);
        Content::create([
            'name' => 'Pembayaran Non-Tunai',
            'body' =>  '',
            'Catagory_id' => '4'
        ]);
        Content::create([
            'name' => 'Informasi kendaraan',
            'body' =>  '',
            'Catagory_id' => '4'
        ]);
        Content::create([
            'name' => 'Akreditasi Pengujian',
            'body' =>  '',
            'Catagory_id' => '4'
        ]);

        //VisiMsi
        Catagory::create([
            'name' => 'VisiMisi',
            'page' => 'Profile',
            'orientasi' => '3',
            'view' => '1'
        ]);

        Content::create([
            'name' => 'Visi',
            'body' =>  'Terciptanya Pengujian Kendaraan Bermotor Yang Akurat dan Akuntabel.',
            'Catagory_id' => '5'
        ]);
        Content::create([
            'name' => 'Misi',
            'body' =>  'Menciptakan Lingkungan Kerja Yang Lebih Nyaman Dalam Rangka Meningkatkan Keselamatan Kendaraan Bermotor Wajib Uji, Peningkatan Kompetensi Penguji Yang Professional, Perbaikan Sarana Dan Prasarana Serta Mutu Pelayanan Pengujian Kendaraan Bermotor.',
            'Catagory_id' => '5'
        ]);

        //Mengapa Kami
        Catagory::create([
            'name' => 'Mengapa Kami',
            'page' => 'Profile',
            'orientasi' => '4',
            'view' => '1'
        ]);
        Content::create([
            'name' => 'KUALIFIKASI PENGUJI',
            'body' =>  'Kami memiliki penguji kendaraan yang berkompeten dalam bidang pengujian kendaraan.',
            'Catagory_id' => '6'
        ]);
        Content::create([
            'name' => 'ONLINE SYSTEM',
            'body' =>  'Dukungan sistem online mampu mempermudah dan mempercepat proses pelayanan dan keterbukaan informasi',
            'Catagory_id' => '6'
        ]);
        Content::create([
            'name' => 'FASILITAS MODEREN',
            'body' =>  'Penggunaan alat uji yang modern, komputerisasi administrasi, dan online sistem merupakan usaha kami dalam meningkatkan pelayanan kepada masyarakat.',
            'Catagory_id' => '6'
        ]);
        Content::create([
            'name' => 'BEBAS KONSULTASI',
            'body' =>  'Kami siap menerima konsultasi terkait kendaraan yang akan diuji jika mengalami permasalahan secara teknis.',
            'Catagory_id' => '6'
        ]);


        //pelayanan 
        //Jenis pengujian 

        Catagory::create([
            'name' => 'Jenis Pengujian',
            'describe' => 'Jenis Pengujian yang dilakukan di Pengujian Kendaraan Bermotor Dishub Grobogan',
            'page' => 'Pelayanan',
            'orientasi' => '1',
            'view' => '1'
        ]);
        Content::create([
            'name' => 'Uji Baru',
            'body' =>  '',
            'Catagory_id' => '7'
        ]);
        Content::create([
            'name' => 'Uji Berkala',
            'body' =>  '',
            'Catagory_id' => '7'
        ]);
        Content::create([
            'name' => 'Numpang Uji Masuk',
            'body' =>  '',
            'Catagory_id' => '7'
        ]);
        Content::create([
            'name' => 'Numpang Uji Keluar',
            'body' =>  '',
            'Catagory_id' => '7'
        ]);
        Content::create([
            'name' => 'Mutasi Masuk',
            'body' =>  '',
            'Catagory_id' => '7'
        ]);
        Content::create([
            'name' => 'Mutasi Keluar',
            'body' =>  '',
            'Catagory_id' => '7'
        ]);
        //Pengian Kendaraan 
        Catagory::create([
            'name' => 'Pengujian Kendaraan',
            'describe' => 'Alur pengujian yang dilakukan di Pengujian Kendaraan Bermotor Dishub Grobogan',
            'page' => 'Pelayanan',
            'orientasi' => '2',
            'view' => '1'
        ]);
        Content::create([
            'name' => 'Alur Pelayanan Masuk',
            'body' =>  '',
            'Catagory_id' => '8'
        ]);
        Content::create([
            'name' => 'Alur Pelayanan Keluar',
            'body' =>  '',
            'Catagory_id' => '8'
        ]);
        //Tarif Retribusi 
        Catagory::create([
            'name' => 'Tarif Retribusi',
            'describe' => 'Besaran tarif retribusi berdasarkan penggolongan kendaraan adalah sebagai berikut',
            'page' => 'Pelayanan',
            'orientasi' => '2',
            'view' => '1'
        ]);
        Content::create([
            'name' => 'Tarif Retribusi',
            'body' =>  '',
            'Catagory_id' => '9'
        ]);
        //Syarat Pengujian 
        Catagory::create([
            'name' => 'Syarat Pengujian',
            'describe' => 'Penuhi persyaratan berikut agar dapat melakukan pengujian kendaraan bermotor di Dishub Grobogan',
            'page' => 'Pelayanan',
            'orientasi' => '2',
            'view' => '1'
        ]);
        Content::create([
            'name' => 'Syarat Pengujian',
            'body' =>  '',
            'Catagory_id' => '10'
        ]);
        //Jenis pengujian 

        Catagory::create([
            'name' => 'Hukum',
            'describe' => 'Kumpulan-Kumpulan Data Perundang-undangan tentang pengujian',
            'page' => 'Hukum',
            'orientasi' => '1',
            'view' => '1'
        ]);
    }
}
