<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Materi</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Beranda</a></li>
            <li class="breadcrumb-item active">Materi</li>
        </ol>
    </div>
    <div class="col-md-6 col-4 align-self-center">
        <a href="himpunan/kelompok/2"
            class="btn pull-right hidden-sm-down btn-secondary"><i class="fa fa-spin fa-cog"></i> Setel Himpunan Variabel Materi</a>
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
                <h4 class="card-title">Hasil Fuzzifikasi Materi</h4>
                <h6 class="card-subtitle">Nilai Fuzzy <code>[0-1]</code></h6>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th rowspan="2">No.</th>
                            <th rowspan="2">Nama KK</th>
                            <th colspan="3" class="text-center">Derajat Keanggotaan Materi</th>
                        </tr>
                        <tr>
                            <th class="text-center">Tidak Sesuai</th>
                            <th class="text-center">Sesuai</th>
                            <th class="text-center">Sangat Sesuai</th>
                        </tr>
                        <?php
                            $no = 1;
                            foreach ($viewModel['fuzzifikasi_materi'] as $res) {
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $res['nama']; ?></td>
                            <td><?php echo $res['Tidak Sesuai']; ?></td>
                            <td><?php echo $res['Sesuai']; ?></td>
                            <td><?php echo $res['Sangat Sesuai']; ?></td>
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