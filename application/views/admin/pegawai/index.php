<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Pegawai
    </h1>
    <ol class="breadcrumb">
      <a href="<?= base_url(); ?>tambah_pegawai" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content" style="margin-top: 10px;">
    <div class="row mt-3">
      <div class="col-xs-12">

        <?php if ($this->session->flashdata('pegawai')) : ?>	
          <div class="alert alert-<?= $this->session->flashdata('pegawai')['status'] ?> alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?= $this->session->flashdata('pegawai')['message']; ?>
          </div>
        <?php endif; ?>

      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-success">
          <div class="box-body" style="overflow: auto;">
            <table id="example1" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th width="10">#</th>
                  <th style="text-align: center;">NIK</th>
                  <th style="text-align: center;">Nama</th>
                  <th style="text-align: center;">Jabatan</th>
                  <th style="text-align: center;">Jenis Kelamin</th>
                  <th style="text-align: center;">Masa Kerja</th>
                  <th style="text-align: center;">Gaji</th>
                  <th class="text-center" width="90">Menu</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($pegawai as $row) : ?>
                  <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row['nik']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['jabatan']; ?></td>
                    <td><?= $row['jenis_kelamin']; ?></td>	
                    <td><?= getMasaKerja($row['mulai_kerja']); ?></td>
                    <td>Rp.<?= $row['gaji_id'] ? nominal($row['gaji_pokok']) : nominal($row['gaji_default']); ?></td>
                    <td style="text-align: center;">
                      <a href="<?= base_url(); ?>detailPegawai/<?= $row['id_pegawai']; ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                      <a href="<?= base_url(); ?>hapusPegawai/<?= $row['id_pegawai']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php $i++; ?>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
