<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Anggota;
use App\Models\Pengembalian;
use App\Models\Petugas;
use App\Models\Rak;
use App\Models\Buku;
use App\Models\Peminjaman;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Anggota::create([
            "kode_anggota"  => "123456789",
            "nama_anggota"  => "Syahnas Agustina",
            "jk_anggota"    => "P",
            "jurusan_anggota" => "RP",
            "no_telp_anggota" => "087788990000",
            "alamat_anggota" => "Jakarta Timur"
        ]);

        Anggota::create([
            "kode_anggota"  => "123456788",
            "nama_anggota"  => "Kelvin Rahaja",
            "jk_anggota"    => "L",
            "jurusan_anggota" => "RP",
            "no_telp_anggota" => "087788991111",
            "alamat_anggota" => "Jakarta Barat"
        ]);

        Petugas::create([
            "nama_petugas"  => "Ilham Ramdan",
            "jabatan_petugas" => "Kepala Perpustakaan",
            "no_telp_petugas" => "087788990909",
            "alamat_petugas" => "Jakarta Timur"
        ]);

        Petugas::create([
            "nama_petugas"  => "Felichia Dima",
            "jabatan_petugas" => "Operator",
            "no_telp_petugas" => "087788998888",
            "alamat_petugas" => "Jakarta Timur 3"
        ]);

        Petugas::create([
            "nama_petugas"  => "Raisa Lim",
            "jabatan_petugas" => "Pustakawan",
            "no_telp_petugas" => "087788998888",
            "alamat_petugas" => "Jakarta Timur 1"
        ]);

        Buku::create([
            "kode_buku"  => "12345",
            "judul_buku" => "Matematika Ilmu yang Menyenangkan",
            "penulis_buku" => "Albert Kurniawan",
            "penerbit_buku" => "Erlangga",
            "tahun_penerbit" => "2010",
            "stok" => 12
        ]);

        Buku::create([
            "kode_buku"  => "12344",
            "judul_buku" => "Kiat Cepat Masuk Kuliah",
            "penulis_buku" => "Sandi Uno",
            "penerbit_buku" => "Gramedia",
            "tahun_penerbit" => "2023",
            "stok" => 30
        ]);

        Rak::create([
            "nama_rak" => "Pelajaran",
            "lokasi_rak" => "blok A",
            "buku_id" => 1
        ]);

        Rak::created([
            "nama_rak" => "Biografis",
            "lokasi_rak" => "blok B",
            "buku_id" => 2
        ]);

        Peminjaman::create([
            "tanggal_pinjam" => "2023-09-01",
            "tanggal_kembali" => "2023-09-12",
            "buku_id" => 1,
            "anggota_id" => 1,
            "petugas_id" => 2
        ]);

        Peminjaman::create([
            "tanggal_pinjam" => "2023-09-10",
            "tanggal_kembali" => "2023-09-30",
            "buku_id" => 2,
            "anggota_id" => 2,
            "petugas_id" => 3
        ]);

        Pengembalian::create([
            "tanggal_pengembalian" => "2023-09-30",
            "denda" => 100000,
            "buku_id" => 2,
            "anggota_id" => 2,
            "petugas_id" => 3
        ]);

    }
}
