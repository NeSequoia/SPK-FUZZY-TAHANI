<?php

namespace lib;

class Helper {

    public static function fungsiKeanggotaanMateri($materi, $himpunan) {
        if ($himpunan['nama_himpunan'] == 'Tidak Sesuai') {
            if ($materi <= $himpunan['bawah']) {
                $derajat_keanggotaan = 1;
            } else if ($materi >= $himpunan['bawah'] && $materi <= $himpunan['atas']) {
                $derajat_keanggotaan = ($himpunan['atas'] - $materi) / ($himpunan['atas'] - $himpunan['bawah']);
            } else {
                $derajat_keanggotaan = 0;
            }
        } else if ($himpunan['nama_himpunan'] == 'Sesuai') {
            if ($materi <= $himpunan['bawah'] or $materi >= $himpunan['atas']) {
                $derajat_keanggotaan = 0;
            } else if ($materi >= $himpunan['bawah'] && $materi <= $himpunan['tengah']) {
                $derajat_keanggotaan = ($materi - $himpunan['bawah']) / ($himpunan['tengah'] - $himpunan['bawah']);
            } else if ($materi >= $himpunan['tengah'] && $materi <= $himpunan['atas']) {
                $derajat_keanggotaan = ($himpunan['atas'] - $materi) / ($himpunan['atas'] - $himpunan['tengah']);
            }
        } else if ($himpunan['nama_himpunan'] == 'Sangat Sesuai') {
            if ($materi <= $himpunan['bawah']) {
                $derajat_keanggotaan = 0;
            } else if ($materi >= $himpunan['bawah'] && $materi <= $himpunan['atas']) {
                $derajat_keanggotaan = ($materi - $himpunan['bawah']) / ($himpunan['atas'] - $himpunan['bawah']);
            } else if ($materi >= $himpunan['atas']) {
                $derajat_keanggotaan = 1;
            }
        }

        return $derajat_keanggotaan;
    }

    public static function fungsiKeanggotaanWaktu($waktu, $himpunan) {
        if ($himpunan['nama_himpunan'] == 'Terlambat') {
            if ($waktu <= $himpunan['bawah']) {
                $derajat_keanggotaan = 1;
            } else if ($waktu >= $himpunan['bawah'] && $waktu <= $himpunan['atas']) {
                $derajat_keanggotaan = ($himpunan['atas'] - $waktu) / ($himpunan['atas'] - $himpunan['bawah']);
            } else if ($waktu >= $himpunan['bawah']) {
                $derajat_keanggotaan = 0;
            }
        } else if ($himpunan['nama_himpunan'] == 'Tepat Waktu') {
            if ($waktu <= $himpunan['bawah']) {
                $derajat_keanggotaan = 0;
            } else if ($waktu >= $himpunan['bawah'] && $waktu <= $himpunan['atas']) {
                $derajat_keanggotaan = ($waktu - $himpunan['bawah']) / ($himpunan['atas'] - $himpunan['bawah']);
            } else if ($waktu >= $himpunan['atas']) {
                $derajat_keanggotaan = 1;
            }
        }

        return $derajat_keanggotaan;
    }

    public static function fungsiKeanggotaanNilai($nilai, $himpunan) {
        if ($himpunan['nama_himpunan'] == 'Tidak Sesuai Komponen') {
            if ($nilai <= $himpunan['bawah']) {
                $derajat_keanggotaan = 1;
            } else if ($nilai >= $himpunan['bawah'] && $nilai <= $himpunan['atas']) {
                $derajat_keanggotaan = ($himpunan['atas'] - $nilai) / ($himpunan['atas'] - $himpunan['bawah']);
            } else if ($nilai >= $himpunan['atas']) {
                $derajat_keanggotaan = 0;
            }
        } else if ($himpunan['nama_himpunan'] == 'Sesuai Komponen') {
            if ($nilai <= $himpunan['bawah'] || $nilai >= $himpunan['atas']) {
                $derajat_keanggotaan = 0;
            } else if ($nilai >= $himpunan['bawah'] && $nilai <= $himpunan['tengah']) {
                $derajat_keanggotaan = ($nilai - $himpunan['bawah']) / ($himpunan['tengah'] - $himpunan['bawah']);
            } else if ($nilai >= $himpunan['tengah'] && $nilai <= $himpunan['atas']) {
                $derajat_keanggotaan = ($himpunan['atas'] - $nilai) / ($himpunan['atas'] - $himpunan['tengah']);
            }
        } else if ($himpunan['nama_himpunan'] == 'Sangat Sesuai Komponen') {
            if ($nilai <= $himpunan['bawah']) {
                $derajat_keanggotaan = 0;
            } else if ($nilai >= $himpunan['bawah'] && $nilai <= $himpunan['atas']) {
                $derajat_keanggotaan = ($nilai - $himpunan['bawah']) / ($himpunan['atas'] - $himpunan['bawah']);
            } else if ($nilai >= $himpunan['atas']) {
                $derajat_keanggotaan = 1;
            }
        }

        return $derajat_keanggotaan;
    }

    public static function fungsiKeanggotaanRapi($rapi, $himpunan) {
        if ($himpunan['nama_himpunan'] == 'Berantakan') {
            if ($rapi <= $himpunan['bawah']) {
                $derajat_keanggotaan = 1;
            } else if ($rapi >= $himpunan['bawah'] && $rapi <= $himpunan['atas']) {
                $derajat_keanggotaan = ($himpunan['atas'] - $rapi) / ($himpunan['atas'] - $himpunan['bawah']);
            } else if ($rapi >= $himpunan['bawah']) {
                $derajat_keanggotaan = 0;
            }
        } else if ($himpunan['nama_himpunan'] == 'Rapi') {
            if ($rapi <= $himpunan['bawah']) {
                $derajat_keanggotaan = 0;
            } else if ($rapi >= $himpunan['bawah'] && $rapi <= $himpunan['atas']) {
                $derajat_keanggotaan = ($rapi - $himpunan['bawah']) / ($himpunan['atas'] - $himpunan['bawah']);
            } else if ($rapi >= $himpunan['atas']) {
                $derajat_keanggotaan = 1;
            }
        }

        return $derajat_keanggotaan;
    }

    public static function generateKeterangan($maxF) {
        $himpunan = ['Terlambat' => 1, 'Tepat Waktu' => 2, 'Tidak Sesuai' => 3, 'Sesuai' => 4, 'Sangat Sesuai' => 5, 'Tidak Sesuai Komponen' => 6, 'Sesuai Komponen' => 7, 'Sangat Sesuai Komponen' => 8, 'Berantakan' => 9, 'Rapi' => 10];
        $waktu = $maxF[0];
        $materi = $maxF[1];
        $nilai = $maxF[2];
        $rapi = $maxF[3];

        if ($nilai == $himpunan['Tidak Sesuai Komponen'] && $rapi == $himpunan['Berantakan'] && $materi == $himpunan['Tidak Sesuai'] && $waktu == $himpunan['Terlambat']) {
            $keterangan = 'Buruk';
        } else if ($nilai == $himpunan['Tidak Sesuai Komponen'] && $rapi == $himpunan['Berantakan'] && $materi == $himpunan['Tidak Sesuai'] && $waktu == $himpunan['Tepat Waktu']) {
            $keterangan = 'Buruk';
        } else if ($nilai == $himpunan['Tidak Sesuai Komponen'] && $rapi == $himpunan['Berantakan'] && $materi == $himpunan['Sesuai'] && $waktu == $himpunan['Terlambat']) {
            $keterangan = 'Buruk';
        } else if ($nilai == $himpunan['Tidak Sesuai Komponen'] && $rapi == $himpunan['Berantakan'] && $materi == $himpunan['Sesuai'] && $waktu == $himpunan['Tepat Waktu']) {
            $keterangan = 'Buruk';
        } else if ($nilai == $himpunan['Tidak Sesuai Komponen'] && $rapi == $himpunan['Berantakan'] && $materi == $himpunan['Sangat Sesuai'] && $waktu == $himpunan['Terlambat']) {
            $keterangan = 'Buruk';
        } else if ($nilai == $himpunan['Tidak Sesuai Komponen'] && $rapi == $himpunan['Berantakan'] && $materi == $himpunan['Sangat Sesuai'] && $waktu == $himpunan['Tepat Waktu']) {
            $keterangan = 'Buruk';
        } else if ($nilai == $himpunan['Tidak Sesuai Komponen'] && $rapi == $himpunan['Rapi'] && $materi == $himpunan['Tidak Sesuai'] && $waktu == $himpunan['Terlambat']) {
            $keterangan = 'Buruk';
        } else if ($nilai == $himpunan['Tidak Sesuai Komponen'] && $rapi == $himpunan['Rapi'] && $materi == $himpunan['Tidak Sesuai'] && $waktu == $himpunan['Tepat Waktu']) {
            $keterangan = 'Cukup';
        } else if ($nilai == $himpunan['Tidak Sesuai Komponen'] && $rapi == $himpunan['Rapi'] && $materi == $himpunan['Sesuai'] && $waktu == $himpunan['Terlambat']) {
            $keterangan = 'Buruk';
        } else if ($nilai == $himpunan['Tidak Sesuai Komponen'] && $rapi == $himpunan['Rapi'] && $materi == $himpunan['Sesuai'] && $waktu == $himpunan['Tepat Waktu']) {
            $keterangan = 'Buruk';
        } else if ($nilai == $himpunan['Tidak Sesuai Komponen'] && $rapi == $himpunan['Rapi'] && $materi == $himpunan['Sangat Sesuai'] && $waktu == $himpunan['Terlambat']) {
            $keterangan = 'Buruk';
        } else if ($nilai == $himpunan['Tidak Sesuai Komponen'] && $rapi == $himpunan['Rapi'] && $materi == $himpunan['Sangat Sesuai'] && $waktu == $himpunan['Tepat Waktu']) {
            $keterangan = 'Buruk';
        } 
        
        else if ($nilai == $himpunan['Sesuai Komponen'] && $rapi == $himpunan['Berantakan'] && $materi == $himpunan['Tidak Sesuai'] && $waktu == $himpunan['Terlambat']) {
            $keterangan = 'Buruk';
        } else if ($nilai == $himpunan['Sesuai Komponen'] && $rapi == $himpunan['Berantakan'] && $materi == $himpunan['Tidak Sesuai'] && $waktu == $himpunan['Tepat Waktu']) {
            $keterangan = 'Cukup';
        } else if ($nilai == $himpunan['Sesuai Komponen'] && $rapi == $himpunan['Berantakan'] && $materi == $himpunan['Sesuai'] && $waktu == $himpunan['Terlambat']) {
            $keterangan = 'Cukup';
        } else if ($nilai == $himpunan['Sesuai Komponen'] && $rapi == $himpunan['Berantakan'] && $materi == $himpunan['Sesuai'] && $waktu == $himpunan['Tepat Waktu']) {
            $keterangan = 'Cukup';
        } else if ($nilai == $himpunan['Sesuai Komponen'] && $rapi == $himpunan['Berantakan'] && $materi == $himpunan['Sangat Sesuai'] && $waktu == $himpunan['Terlambat']) {
            $keterangan = 'Cukup';
        } else if ($nilai == $himpunan['Sesuai Komponen'] && $rapi == $himpunan['Berantakan'] && $materi == $himpunan['Sangat Sesuai'] && $waktu == $himpunan['Tepat Waktu']) {
            $keterangan = 'Cukup';
        } else if ($nilai == $himpunan['Sesuai Komponen'] && $rapi == $himpunan['Rapi'] && $materi == $himpunan['Tidak Sesuai'] && $waktu == $himpunan['Terlambat']) {
            $keterangan = 'Cukup';
        } else if ($nilai == $himpunan['Sesuai Komponen'] && $rapi == $himpunan['Rapi'] && $materi == $himpunan['Tidak Sesuai'] && $waktu == $himpunan['Tepat Waktu']) {
            $keterangan = 'Baik';
        } else if ($nilai == $himpunan['Sesuai Komponen'] && $rapi == $himpunan['Rapi'] && $materi == $himpunan['Sesuai'] && $waktu == $himpunan['Terlambat']) {
            $keterangan = 'Cukup';
        } else if ($nilai == $himpunan['Sesuai Komponen'] && $rapi == $himpunan['Rapi'] && $materi == $himpunan['Sesuai'] && $waktu == $himpunan['Tepat Waktu']) {
            $keterangan = 'Cukup';
        } else if ($nilai == $himpunan['Sesuai Komponen'] && $rapi == $himpunan['Rapi'] && $materi == $himpunan['Sangat Sesuai'] && $waktu == $himpunan['Terlambat']) {
            $keterangan = 'Baik';
        } else if ($nilai == $himpunan['Sesuai Komponen'] && $rapi == $himpunan['Rapi'] && $materi == $himpunan['Sangat Sesuai'] && $waktu == $himpunan['Tepat Waktu']) {
            $keterangan = 'Baik';
        }
        
        else if ($nilai == $himpunan['Sangat Sesuai Komponen'] && $rapi == $himpunan['Berantakan'] && $materi == $himpunan['Tidak Sesuai'] && $waktu == $himpunan['Terlambat']) {
            $keterangan = 'Buruk';
        } else if ($nilai == $himpunan['Sangat Sesuai Komponen'] && $rapi == $himpunan['Berantakan'] && $materi == $himpunan['Tidak Sesuai'] && $waktu == $himpunan['Tepat Waktu']) {
            $keterangan = 'Cukup';
        } else if ($nilai == $himpunan['Sangat Sesuai Komponen'] && $rapi == $himpunan['Berantakan'] && $materi == $himpunan['Sesuai'] && $waktu == $himpunan['Terlambat']) {
            $keterangan = 'Cukup';
        } else if ($nilai == $himpunan['Sangat Sesuai Komponen'] && $rapi == $himpunan['Berantakan'] && $materi == $himpunan['Sesuai'] && $waktu == $himpunan['Tepat Waktu']) {
            $keterangan = 'Baik';
        } else if ($nilai == $himpunan['Sangat Sesuai Komponen'] && $rapi == $himpunan['Berantakan'] && $materi == $himpunan['Sangat Sesuai'] && $waktu == $himpunan['Terlambat']) {
            $keterangan = 'Cukup';
        } else if ($nilai == $himpunan['Sangat Sesuai Komponen'] && $rapi == $himpunan['Berantakan'] && $materi == $himpunan['Sangat Sesuai'] && $waktu == $himpunan['Tepat Waktu']) {
            $keterangan = 'Baik';
        } else if ($nilai == $himpunan['Sangat Sesuai Komponen'] && $rapi == $himpunan['Rapi'] && $materi == $himpunan['Tidak Sesuai'] && $waktu == $himpunan['Terlambat']) {
            $keterangan = 'Cukup';
        } else if ($nilai == $himpunan['Sangat Sesuai Komponen'] && $rapi == $himpunan['Rapi'] && $materi == $himpunan['Tidak Sesuai'] && $waktu == $himpunan['Tepat Waktu']) {
            $keterangan = 'Baik';
        } else if ($nilai == $himpunan['Sangat Sesuai Komponen'] && $rapi == $himpunan['Rapi'] && $materi == $himpunan['Sesuai'] && $waktu == $himpunan['Terlambat']) {
            $keterangan = 'Baik';
        } else if ($nilai == $himpunan['Sangat Sesuai Komponen'] && $rapi == $himpunan['Rapi'] && $materi == $himpunan['Sesuai'] && $waktu == $himpunan['Tepat Waktu']) {
            $keterangan = 'Baik';
        } else if ($nilai == $himpunan['Sangat Sesuai Komponen'] && $rapi == $himpunan['Rapi'] && $materi == $himpunan['Sangat Sesuai'] && $waktu == $himpunan['Terlambat']) {
            $keterangan = 'Baik';
        } else if ($nilai == $himpunan['Sangat Sesuai Komponen'] && $rapi == $himpunan['Rapi'] && $materi == $himpunan['Sangat Sesuai'] && $waktu == $himpunan['Tepat Waktu']) {
            $keterangan = 'Baik';
        }

        return $keterangan;
    }

}