<?php

class Helpers
{
    public static function tanggal()
    {
        date_default_timezone_set('Asia/Jayapura');
        $hari = date('D');
        $nama_hari = [
            'Sun' => 'Minggu',
            'Mon' => 'Senin',
            'Tue' => 'Selasa',
            'Wed' => 'Rabu',
            'Thu' => 'Kamis',
            'Fri' => 'Jumat',
            'Sat' => 'Sabtu'
        ];

        $bulan = date('m');
        $nama_bulan = [
            '01' => 'Januari',
            '02' => 'Februari',
            '03' => 'Maret',
            '04' => 'Aprul',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'Novembe',
            '12' => 'Desember',
        ];

        return $nama_hari[$hari] . ', ' . date('d ') . $nama_bulan[$bulan] . date(' Y, H:i:s');
    }
}
