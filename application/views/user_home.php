<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Beranda
    </h1>
  </section>
  <?php
  $jk1 = '';
  if ($pegawai['jenis_kelamin'] == 'Laki-laki') {
    $jk1 = 'men';
  } else {
    $jk1 = 'women';
  }
  ?>
  <!-- Main content -->
  <section class="content" style="min-height: 600px;">
    <!-- Small boxes (Stat box) -->
    <div class="row">

      <div class=" col-md-12 col-sm-12 col-xs-2 ">
        <!-- Widget: user widget style 1 -->
        <div class=" box box-widget widget-user">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header bg-green-active">
            <center>
              <h3 class="widget-user-username" style="margin-top: -15px;"><?= $client['nama']; ?></h3>
            </center>
          </div>
          <div class="widget-user-image">
            <img class="img-circle" src="<?= base_url() ?>assets/dist/img/<?= $jk1 ?>.png" alt="User Avatar">
          </div>
          <div class="box-footer">
            <div class="row">
              <div class="col-sm-4 border-right">
                <div class="description-block">
                  <span class="description-header">Pangkat</span>
                  <h5 class="description-text"><?= $client['pangkat']; ?></h5>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-4 border-right">
                <div class="description-block">
                  <span class="description-header">Golongan</span>
                  <h5 class="description-text"><?= $client['golongan']; ?></h5>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-4">
                <div class="description-block">
                  <h5 class="description-header">Gaji</h5>
                  <span class="description-text">Rp. <?= nominal($gaji['gaji_pokok']); ?>,00</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-sm-7 border-right">
                <div class="description-block">
                  <span class="description-header">Kenaikan Pangkat Berikutnya</span>
                  <h5 class="description-text"><?= date_indo($client['naik_pangkat_yad']); ?></h5>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-3 border-right">
                <div class="description-block">
                  <span class="description-header">Kenaikan Gaji Berkala Berikutnya</span>
                  <h5 class="description-text"><?= date_indo($client['naik_gaji_yad']); ?></h5>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
        </div>
        <!-- /.widget-user -->
      </div>
      <!-- /.col -->
    </div>
</div>
<!-- /.row -->