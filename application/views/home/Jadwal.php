 <!-- ======= Services Section ======= -->
 <div id="services" class="services-area area-padding">
     <div class="container">
         <div class="row">
             <div class="col-md-12 col-sm-12 col-xs-12">
                 <div class="section-headline services-head text-center">
                     <br><br>
                     <h2>JADWAL PELAYANAN KAMI</h2> <br> <br>
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
                                 </tr>
                                 <?php $i++; ?>
                             <?php endforeach; ?>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div><!-- End Services Section -->