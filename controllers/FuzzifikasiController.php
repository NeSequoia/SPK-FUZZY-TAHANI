<?php

namespace controllers;

use lib\Router;
use lib\Helper;
use model\Data;
use model\Himpunan;
use controllers\BaseController;

class FuzzifikasiController extends BaseController {

    public function waktu() {
        $data = Data::getAll();
        $himpunan = Himpunan::getByKelompok(1);

        $viewModel['fuzzifikasi_waktu'] = array();

        foreach ($data as $d) {
            $waktu = $d->getWaktu();
            $wrap['nama'] = $d->getNama();
            foreach ($himpunan as $himp) {
                $paramHimpunan['nama_himpunan'] = $himp->getNamaHimpunan();
                $paramHimpunan['bawah'] = $himp->getBawah();
                $paramHimpunan['tengah'] = $himp->getTengah();
                $paramHimpunan['atas'] = $himp->getAtas();
                $wrap[$himp->getNamaHimpunan()] = Helper::fungsiKeanggotaanWaktu($waktu, $paramHimpunan);
            }
            array_push($viewModel['fuzzifikasi_waktu'], $wrap);    
        }

        $this->renderView($viewModel);
    }

    public function materi() {
        $data = Data::getAll();
        $himpunan = Himpunan::getByKelompok(2);

        $viewModel['fuzzifikasi_materi'] = array();

        foreach ($data as $d) {
            $materi = $d->getMateri();
            $wrap['nama'] = $d->getNama();
            foreach ($himpunan as $himp) {
                $paramHimpunan['nama_himpunan'] = $himp->getNamaHimpunan();
                $paramHimpunan['bawah'] = $himp->getBawah();
                $paramHimpunan['tengah'] = $himp->getTengah();
                $paramHimpunan['atas'] = $himp->getAtas();
                $wrap[$himp->getNamaHimpunan()] = Helper::fungsiKeanggotaanMateri($materi, $paramHimpunan);
            }
            array_push($viewModel['fuzzifikasi_materi'], $wrap);    
        }

        $this->renderView($viewModel);
    }

    public function nilai() {
        $data = Data::getAll();
        $himpunan = Himpunan::getByKelompok(3);

        $viewModel['fuzzifikasi_nilai'] = array();

        foreach ($data as $d) {
            $nilai = $d->getNilai();
            $wrap['nama'] = $d->getNama();
            foreach ($himpunan as $himp) {
                $paramHimpunan['nama_himpunan'] = $himp->getNamaHimpunan();
                $paramHimpunan['bawah'] = $himp->getBawah();
                $paramHimpunan['tengah'] = $himp->getTengah();
                $paramHimpunan['atas'] = $himp->getAtas();
                $wrap[$himp->getNamaHimpunan()] = Helper::fungsiKeanggotaanNilai($nilai, $paramHimpunan);
            }
            array_push($viewModel['fuzzifikasi_nilai'], $wrap);    
        }

        $this->renderView($viewModel);
    }

    public function rapi() {
        $data = Data::getAll();
        $himpunan = Himpunan::getByKelompok(4);

        $viewModel['fuzzifikasi_rapi'] = array();

        foreach ($data as $d) {
            $rapi = $d->getRapi();
            $wrap['nama'] = $d->getNama();
            foreach ($himpunan as $himp) {
                $paramHimpunan['nama_himpunan'] = $himp->getNamaHimpunan();
                $paramHimpunan['bawah'] = $himp->getBawah();
                $paramHimpunan['tengah'] = $himp->getTengah();
                $paramHimpunan['atas'] = $himp->getAtas();
                $wrap[$himp->getNamaHimpunan()] = Helper::fungsiKeanggotaanRapi($rapi, $paramHimpunan);
            }
            array_push($viewModel['fuzzifikasi_rapi'], $wrap);    
        }

        $this->renderView($viewModel);
    }
    
}