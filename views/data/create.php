<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Tambah Data Dosen</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Data Dosen</a></li>
            <li class="breadcrumb-item active">Tambah Data Dosen</li>
        </ol>
    </div>
    <div class="col-md-6 col-4 align-self-center">
        <a href="data"
            class="btn pull-right hidden-sm-down btn-danger">Kembali</a>
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
    <div class="col-lg-12 col-xlg-12 col-md-12">
        <div class="card">
            <div class="card-block">
                <form class="form-horizontal form-material" action="data/store" method="post">
                    <div class="form-group">
                        <label class="col-md-12">Nama Dosen</label>
                        <div class="col-md-12">
                            <input type="text" name="nama" placeholder="Nama Lengkap"
                                class="form-control form-control-line" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Dosen Memulai Perkuliahan Tepat Waktu</label>
                        <div class="col-md-12">
                            <input type="number" name="waktu" placeholder="Dosen memulai perkuliahan tepat waktu"
                                class="form-control form-control-line" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Dosen Berpakaian Rapi</label>
                        <div class="col-md-12">
                            <input type="number" name="rapi" placeholder="Dosen berpenampilan rapi ketika mengajar"
                                class="form-control form-control-line" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Kesesuaian Materi</label>
                        <div class="col-md-12">
                            <input type="number" name="materi" placeholder="Kesesuaian materi pembelajaran dengan capaian pembelajaran dalam mata kuliah"
                                class="form-control form-control-line" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Komponen Penilaian</label>
                        <div class="col-md-12">
                            <input type="number" name="nilai" placeholder="Komponen penilaian yang diberikan oleh dosen mencakup: tugas harian, UTS, UAS, dan tugas lainnya"
                                class="form-control form-control-line" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Simpan</button>
                            <a href="data" class="btn btn-danger btn-fill btn-wd">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<!-- Row -->
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->