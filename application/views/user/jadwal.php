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
                        <th scope="col" class="text-center">Jenis Keluhan</th>
                        <th scope="col" class="text-center">Hari</th>
                        <th scope="col" class="text-center">Kategory</th>
                        <th scope="col" class="text-center">Jam Mulai</th>
                        <th scope="col" class="text-center">Jam Berakhir</th>
                    </tr>
                </thead>

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