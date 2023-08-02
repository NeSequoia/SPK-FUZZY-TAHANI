<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Perbarui Himpunan <?php echo $viewModel->getNamaHimpunan(); ?></h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Data Himpunan</a></li>
            <li class="breadcrumb-item active">Perbarui Himpunan <?php echo $viewModel->getNamaHimpunan(); ?></li>
        </ol>
    </div>
    <div class="col-md-6 col-4 align-self-center">
        <a href="data" class="btn pull-right hidden-sm-down btn-danger">Kembali</a>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->
<div class="row">
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <div class="card-block">
                <form class="form-horizontal form-material" action="himpunan/update/<?php echo $viewModel->getIdHimpunan(); ?>"
                    method="post">
                    <div class="form-group">
                        <label class="col-md-12">Nama Himpunan</label>
                        <div class="col-md-12">
                            <input type="text" name="nama_himpunan" value="<?php echo $viewModel->getNamaHimpunan(); ?>"
                                class="form-control form-control-line" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bawah" class="col-md-12">Batas Bawah</label>
                        <div class="col-md-12">
                            <input type="number" value="<?php echo $viewModel->getBawah(); ?>"
                                class="form-control form-control-line" name="bawah" id="bawah" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Batas Tengah</label>
                        <div class="col-md-12">
                            <input type="number" name="tengah" value="<?php echo $viewModel->getTengah(); ?>"
                                class="form-control form-control-line" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Batas Atas</label>
                        <div class="col-md-12">
                            <input type="number" name="atas" value="<?php echo $viewModel->getAtas(); ?>"
                                class="form-control form-control-line" required>
                        </div>
                    </div>
                    <input type="hidden" name="kelompok" value="<?php echo $viewModel->getKelompok(); ?>">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Perbarui</button>
                            <a href="himpunan/kelompok/<?php echo $viewModel->getKelompok(); ?>" class="btn btn-danger btn-fill btn-wd">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-block">
                <center class="m-t-30"> 
                    <h4 class="card-title m-t-10">Himpunan <?php echo $viewModel->getNamaHimpunan(); ?></h4>
                    <div class="row text-center justify-content-md-center">
                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="fa  fa-angle-double-down"></i>
                                <font class="font-medium"><?php echo $viewModel->getBawah(); ?></font>
                            </a></div>
                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="fa fa-angle-double-right"></i>
                                <font class="font-medium"><?php echo $viewModel->getTengah(); ?></font>
                            </a></div>
                            <div class="col-4"><a href="javascript:void(0)" class="link"><i class="fa fa-angle-double-up"></i>
                                <font class="font-medium"><?php echo $viewModel->getAtas(); ?></font>
                            </a></div>
                    </div>
                </center>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<!-- Row -->
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<div class="header">
    <h4 class="title">Ubah Data Himpunan</h4>
    <hr>
</div>
<div class="content">
    <form action="himpunan/update/<?php echo $viewModel->getIdHimpunan(); ?>" method="post" style="margin-left:0.5%;margin-bottom:2%;">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nama Himpunan</label>
                    <input name="nama_himpunan" type="text" value="<?php echo $viewModel->getNamaHimpunan(); ?>" class="form-control border-input" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Bawah</label>
                    <input name="bawah" type="number" value="<?php echo $viewModel->getBawah(); ?>" class="form-control border-input" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tengah</label>
                    <input name="tengah" type="number" value="<?php echo $viewModel->getTengah(); ?>" class="form-control border-input" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Atas</label>
                    <input name="atas" type="number" value="<?php echo $viewModel->getAtas(); ?>" class="form-control border-input" required>
                </div>
            </div>
        </div>
        <input type="hidden" name="kelompok" value="<?php echo $viewModel->getKelompok(); ?>">
        <div class="text-left" style="margin-top:2%;">
            <a href="himpunan/kelompok/<?php echo $viewModel->getKelompok(); ?>" class="btn btn-danger btn-fill btn-wd">Batal</a>
            <button type="submit" class="btn btn-info btn-fill btn-wd">Simpan</button>
        </div>
        <div class="clearfix"></div>
    </form>
</div>