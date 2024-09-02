<?php

namespace Database\Seeders;

use App\Models\Lomba;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LombaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lomba = [
            [
                "TILAWAH DEWASA DAN QIRAAT SABAH MUJJAAWAD",
                "Mimbar utama MTQN XXX GOR Kadrie Oening"
            ],
            [
                "QIRA'AT MUROTTAL REMAJA DAN DEWASA",
                "Aula Islamic Centre / Masjid Baitul Muttaqin"
            ],
            [
                "KHAT AL-QUR'AN GOL. NASKAH DAN HIASAN MUSHAF dan GOL. DEKORASI DAN LUKIS KONTEMPORER",
                "Gedung Serbaguna GOR Kadrie Oening"
            ],
            [
                "HIFZIL AL-QUR'AN GO. 1 JUZ DAN 5 JUZ TILAWAH",
                "Ruang Ruhui Rahayu Setda Provinsi Kalimantan Timur"
            ],
            [
                "TILAWAH AL QUR'AN GOL. ANAK-ANAK DAN REMAJA",
                "Aula RRI Samarinda"
            ],
            [
                "HIFZIL QUR'AN GOL. 10 JUZ DAN 20 JUZ",
                "Gedung Pramuka Samarinda"
            ],
            [
                "TILAWAH GOL. TARTIL DAN CANET",
                "Gedung Auditorium Universitas Mulawarman"
            ],
            [
                "FAHMIL QUR'AN",
                "Gedung Olah Bebaya Provinsi Kalimantan Timur"
            ],
            [
                "HIFZIL QUR'AN GOL. 30 JUZ DAN TAFSIR AL QUR'AN GOL. BAHASA ARAB",
                "Gedung Inspektorat Provinsi Kalimantan Timur"
            ],
            [
                "SYARHIL AL QUR'AN",
                "Aula MAN 2 Samarinda"
            ],
            [
                "KARYA TULIS ILMIAH AL QUR'AN",
                "Ruang Assessment Center Kantor Korpri BKD Prov. Kaltim, BPKAD PROVINSI"
            ],
            [
                "TAFSIR BHS. INDONESIA DAN BHS. INGGRIS",
                "Kampus UMKT Samarinda"
            ],
        ];

        foreach ($lomba as $data) {
            Lomba::create(['nama' => $data[0], 'lokasi' => $data[1]]);
        }
    }
}
