<!-- Begin Page Content -->
<div class="container">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800">Jadwal</h1> -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <div class="row">

        <div class="col-md-12">
            <?= form_error(
                'jadwal',
                '<div class="alert alert-danger" jadwal="alert">',
                '</div>'
            ); ?>

            <?= $this->session->flashdata('message'); ?>


            <a href="" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#newJadwalModal"><span class="icon text-white-50"><i class="fas fa-pen"></i></span>
                <span class="text">Tambah Jadwal</span> </a><br><br>
            <table class="table table-striped table-bordered table-hover text-center table-responsive">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col" class="text-center">Jenis Keluhan</th>
                        <th scope="col" class="text-center">Hari</th>
                        <th scope="col" class="text-center">Kategory</th>
                        <th scope="col" class="text-center">Jam Mulai</th>
                        <th scope="col" class="text-center">Jam Berakhir</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <!-- $menu ko diambiek dari controller menu.php nan ado di dataku -->
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($jadwal as $j) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $j['jenis']; ?></td>
                            <td><?= $j['hari']; ?></td>
                            <td><?= $j['kategory']; ?></td>
                            <td><?= $j['jam_mulai']; ?> WIB</td>
                            <td><?= $j['jam_akhir']; ?> WIB</td>
                            <td>
                                <a href="" class="badge rounded-pill bg-warning" data-toggle="modal" data-target="#newEditDetilModal<?= $j['id_jadwal']; ?>">Edit</a>
                                <a href="" class="badge rounded-pill bg-danger" data-toggle="modal" data-target="#hapusJadwal<?= $j['id_jadwal']; ?>">Hapus</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="newJadwalModal" tabindex="-1" aria-labelledby="newJadwalModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newJadwalModalLabel">Tambah Jadwal</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="<?= base_url('admin/addjadwal'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="hari" name="hari" placeholder="Hari">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Keluhan">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="kategory" name="kategory" placeholder="Kategory">
                    </div>
                    <div class="form-group">
                        <input type="time" class="form-control" id="jam_mulai" name="jam_mulai" placeholder="Jam Mulai">
                    </div>
                    <div class="form-group">
                        <input type="time" class="form-control" id="jam_akhir" name="jam_akhir" placeholder="Jam Berakhir">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Detil -->
<?php
foreach ($jadwal as $j) :  ?>
    <div class="modal fade" id="newEditDetilModal<?= $j['id_jadwal']; ?>" tabindex="-1" aria-labelledby="newEditDetilModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newEditDetilModalLabel">Edit Data Jadwal</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url('admin/editjadwal'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" name="id_jadwal" id="id_jadwal" value="<?= $j['id_jadwal']; ?>">
                            <input type="text" class="form-control" id="hari" name="hari" placeholder="Hari" value="<?= $j['hari']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Keluhan" value="<?= $j['jenis']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="kategory" name="kategory" placeholder="Kategory" value="<?= $j['kategory']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="time" class="form-control" id="jam_mulai" name="jam_mulai" placeholder="Jam Mulai" value="<?= $j['jam_mulai']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="time" class="form-control" id="jam_akhir" name="jam_akhir" placeholder="Jam Berakhir" value="<?= $j['jam_akhir']; ?>">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- End Detil

<-- Modal Hapus jadwal -->
<?php $no = 0;
foreach ($jadwal as $j) : $no++ ?>
    <div class="modal fade" id="hapusJadwal<?= $j['id_jadwal']; ?>" tabindex="-1" aria-labelledby="hapusJadwalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusJadwalLabel">Hapus Data Jadwal</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="<?= base_url('admin/hapusjadwal'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" value="<?= $j['id_jadwal']; ?>" name="id_jadwal" id="id_jadwal">
                            <label>Apakah Anda Yakin Untuk Menghapus Data Ini?</label>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            <button type="submit" class="btn btn-primary">Ya</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>