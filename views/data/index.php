<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Data Dosen</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Beranda</a></li>
            <li class="breadcrumb-item active">Data Dosen</li>
        </ol>
    </div>
    <div class="col-md-6 col-4 align-self-center">
        <a href="data/create" class="btn pull-right hidden-sm-down btn-success">Tambah Dosen</a>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <!-- column -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Master Data Dosen</h4>
                <h6 class="card-subtitle">Tahun <code>[2023]</code></h6>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Nama Dosen</th>
                            <th class="text-center">Waktu Mengajar</th>
                            <th class="text-center">Kesesuaian Materi</th>
                            <th class="text-center">Komponen Penilaian</th>
                            <th class="text-center">Berpakaian Rapi</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                        <?php
                            $no = 1;
                            setlocale(LC_MONETARY, 'id_ID.utf8');
                            foreach ($viewModel as $data) {
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $no++; ?></td>
                            <td class="text-center"><?php echo $data->getNama(); ?></td>
                            <td class="text-center"><?php echo $data->getWaktu(); ?></td>
                            <td class="text-center"><?php echo $data->getMateri(); ?></td>
                            <td class="text-center"><?php echo $data->getNilai(); ?></td>
                            <td class="text-center"><?php echo $data->getRapi(); ?></td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="data/edit/<?php echo $data->getIdData(); ?>">Ubah</a>
                                <a class="btn btn-sm btn-danger" href="data/delete/<?php echo $data->getIdData(); ?>">Hapus</a>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->