<?php

namespace controllers;

use lib\Router;
use lib\Helper;
use model\Data;
use model\Himpunan;
use model\Hasil;
use controllers\BaseController;

class HasilController extends BaseController {

    public function index($kelompok) {
        $data = Data::getAll();

        foreach ($data as $d) {
            $hasil = Hasil::getByIdHasilDosen($d->getIdData());
            $maxF = Hasil::getMaxFById($d->getIdData());
            $wrap = [$d->getNama(), $d->getWaktu(), $d->getMateri(), $d->getNilai(), $d->getRapi()];
            foreach ($hasil as $h) {
                array_push($wrap, $h->getF());
            }
            array_push($wrap, Helper::generateKeterangan($maxF));
            $wrapData[$d->getIdData()] = $wrap;
        }
        $viewModel['data'] = $wrapData;
        // var_dump($viewModel['data']);
        $this->renderView($viewModel);
    }

}