<style type="text/css">
      .details li {
      list-style: none;
    }
    li {
        margin-bottom:10px;
        
    }
</style>
 <div class="row">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                          <img src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                          <div class="container" style="border-bottom:1px solid black">
                            <div align="right">
                              <a href="<?= base_url('DasborMahasiswa/editProfile') ?>" class="btn btn-success">Ubah Profile</a>
                          </div>
                            <h2><?= $mhs->nama ?></h2>
                            <hr>
                          <ul class="container details">
                            <li><p><span class="fas fa-id-card" style="width:50px;"></span><?= $mhs->npm ?></p></li> 
                            <li><p><span class="fas fa-user-tie" style="width:50px;"></span><?= $mhs->nama ?></p></li>
                           <li><p><span class="fas fa-map-marker-alt" style="width:50px;"></span><?= $mhs->alamat ?></p></li>
                           <li><p><span class="fas fa-phone-square-alt" style="width:50px;"></span><?= $mhs->no_telepon ?></p></li>
                           <li><p><span class="fas fa-envelope-square" style="width:50px;"></span><?= $mhs->email ?></p></li> 
                           <li><p><span class="fas fa-circle" style="width:50px;"></span><?= $mhs->agama ?></p></li>
                            <li><p><span class="fas fa-university" style="width:50px;"></span>Semester <?= $mhs->semester ?></p></li>
                           
                          </ul>
                      </div>