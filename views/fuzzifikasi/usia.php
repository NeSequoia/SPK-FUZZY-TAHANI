<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Usia</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Beranda</a></li>
            <li class="breadcrumb-item active">Usia</li>
        </ol>
    </div>
    <div class="col-md-6 col-4 align-self-center">
        <a href="himpunan/kelompok/2"
            class="btn pull-right hidden-sm-down btn-secondary"><i class="fa fa-spin fa-cog"></i> Setel Himpunan Variabel Usia</a>
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
                <h4 class="card-title">Hasil Fuzzifikasi Usia</h4>
                <h6 class="card-subtitle">Nilai Fuzzy <code>[0-1]</code></h6>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th rowspan="2">No.</th>
                            <th rowspan="2">Nama KK</th>
                            <th colspan="3" class="text-center">Derajat Keanggotaan Usia</th>
                        </tr>
                        <tr>
                            <th class="text-center">Muda</th>
                            <th class="text-center">Parobaya</th>
                            <th class="text-center">Tua</th>
                        </tr>
                        <?php
                            $no = 1;
                            foreach ($viewModel['fuzzifikasi_usia'] as $res) {
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $res['nama']; ?></td>
                            <td><?php echo $res['Muda']; ?></td>
                            <td><?php echo $res['Parobaya']; ?></td>
                            <td><?php echo $res['Tua']; ?></td>
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