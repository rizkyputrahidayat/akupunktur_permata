    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Daftar Akun Baru</h1>
                                <p>Silahkan Isi Form Di Di Bawah Dengan Baik Dan Benar</p>
                            </div>
                            <form class="user" method="post" action="<?= base_url('auth/register'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="name" name="namo" value="<?= set_value('namo'); ?>" placeholder="Nama Lengkap">
                                    <?= form_error('namo', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" name="email" value="<?= set_value('email'); ?>" placeholder="Alamat Email">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Retype Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="telp" name="telp" value="<?= set_value('telp'); ?>" placeholder="No Telephone">
                                    <?= form_error('telp', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="umur" name="umur" value="<?= set_value('umur'); ?>" placeholder="Usia">
                                    <?= form_error('umur', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="kota_asal" name="kota_asal" value="<?= set_value('kota_asal'); ?>" placeholder="Kota Asal">
                                    <?= form_error('kota_asal', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="keluhan">
                                        <option value="">Pilih Keluhan</option>
                                        <?php foreach ($keluhan as $k) : ?>
                                            <option value="<?= $k['id_keluhan']; ?>"><?= $k['keluhan']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Daftar Akun
                                </button>
                            </form>
                            <hr>
                            <!--  <div class="text-center">
                                <a class="small" href="forgot-password.html">Lupa Password?</a>
                            </div> -->
                            <div class="text-center">
                                <a class="small" href="<?= base_url('Auth'); ?>">Sudah Memiliki Akun? Silahkan Login!!</a>

                            </div>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('Home'); ?>">Kembali Ke Halaman Utama</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>