<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Setelan Himpunan Variabel <?php echo $viewModel['nama_variabel']; ?>
        </h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Beranda</a></li>
            <li class="breadcrumb-item active">Himpunan Variabel <?php echo $viewModel['nama_variabel']; ?></li>
        </ol>
    </div>
    <div class="col-md-6 col-4 align-self-center">
        <a href="" class="btn pull-right hidden-sm-down btn-danger">Kembali</a>
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
                <h4 class="card-title">Himpunan Variabel <?php echo $viewModel['nama_variabel']; ?></h4>
                <h6 class="card-subtitle">Batasan Domain Himpunan Fuzzy</h6>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>No.</th>
                            <th>Nama Himpunan</th>
                            <th>Batas Bawah</th>
                            <th>Batas Tengah</th>
                            <th>Batas Atas</th>
                            <th>Opsi</th>
                        </tr>
                        <?php
                            $no = 1;
                            foreach ($viewModel['data'] as $data) {
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data->getNamaHimpunan(); ?></td>
                            <td><?php echo $data->getBawah(); ?></td>
                            <td><?php echo $data->getTengah(); ?></td>
                            <td><?php echo $data->getAtas(); ?></td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="himpunan/edit/<?php echo $data->getIdHimpunan(); ?>">Ubah</a>
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