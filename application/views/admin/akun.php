<!-- Begin Page Content -->
<div class="container">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800">Jadwal</h1> -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <div class="row">

        <div class="col-md-12">
            <table class="table table-striped table-bordered table-hover text-center table-responsive">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col" class="text-center">Nama Pengguna</th>
                        <th scope="col" class="text-center">Alamat Email</th>
                        <th scope="col" class="text-center">No Telepon</th>
                        <th scope="col" class="text-center">Keluhan</th>
                        <th scope="col" class="text-center">Umur</th>
                        <th scope="col" class="text-center">Kota Asal</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <!-- $menu ko diambiek dari controller menu.php nan ado di dataku -->
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($akun as $a) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $a['name']; ?></td>
                            <td><?= $a['email']; ?></td>
                            <td><?= $a['telp']; ?></td>
                            <td><?= $a['keluhan']; ?></td>
                            <td><?= $a['umur']; ?> Tahun</td>
                            <td><?= $a['kota_asal']; ?></td>
                            <td>
                                <a href="" class="badge rounded-pill bg-danger" data-toggle="modal" data-target="#hapusUserModal<?= $a['id']; ?>">Hapus</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </table>
        </div>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<-- Modal Hapus jadwal -->
    <?php $no = 0;
    foreach ($akun as $a) : $no++ ?>
        <div class="modal fade" id="hapusUserModal<?= $a['id']; ?>" tabindex="-1" aria-labelledby="hapusJadwalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="hapusJadwalLabel">Hapus Data Jadwal</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="<?= base_url('admin/hapusakun'); ?>" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="hidden" value="<?= $a['id']; ?>" name="id" id="id">
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