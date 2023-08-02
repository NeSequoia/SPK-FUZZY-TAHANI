<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Perbarui Data Dosen</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Data Dosen</a></li>
            <li class="breadcrumb-item active">Perbarui Data Dosen</li>
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
                <form class="form-horizontal form-material" action="data/update/<?php echo $viewModel->getIdData(); ?>"
                    method="post">
                    <div class="form-group">
                        <label class="col-md-12">Nama Dosen</label>
                        <div class="col-md-12">
                            <input type="text" name="nama" value="<?php echo $viewModel->getNama(); ?>"
                                class="form-control form-control-line" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="waktu" class="col-md-12">Ketepatan Waktu Mengajar</label>
                        <div class="col-md-12">
                            <input type="number" value="<?php echo $viewModel->getWaktu(); ?>"
                                class="form-control form-control-line" name="waktu" id="waktu" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Kesesuaian Materi</label>
                        <div class="col-md-12">
                            <input type="number" name="materi" value="<?php echo $viewModel->getMateri(); ?>"
                                class="form-control form-control-line" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Kesesuaian Komponen Penilaian</label>
                        <div class="col-md-12">
                            <input type="number" name="nilai" value="<?php echo $viewModel->getNilai(); ?>"
                                class="form-control form-control-line" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Berpakaian Rapi</label>
                        <div class="col-md-12">
                            <input type="number" name="rapi"
                                value="<?php echo $viewModel->getRapi(); ?>"
                                class="form-control form-control-line" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Perbarui</button>
                            <a href="data" class="btn btn-danger btn-fill btn-wd">Batal</a>
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
                    <h4 class="card-title m-t-10"><?php echo $viewModel->getNama(); ?></h4>
                    <h6 class="card-subtitle">Keseusaian Materi<?php echo $viewModel->getMateri(); ?></h6>
                    <h6 class="card-subtitle">Komponen Penilaian <?php echo $viewModel->getNilai(); ?></h6>
                    <h6 class="card-subtitle">Berpakaian Rapi<?php echo $viewModel->getRapi(); ?></h6>
                    <h6 class="card-subtitle">Waktu Mengajar <?php echo $viewModel->getWaktu(); ?></h6>
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