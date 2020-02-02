<h4>Ubah data pribadi</h4>
<form action="<?= base_url('DasborMahasiswa/updateProfile') ?>" method="POST">

  <div class="row">
    <div class="col-md-6">
    <label>Alamat</label>
    <input type="text" name="alamat" required class="form-control" value="<?= $mhs->alamat ?>">
  </div>
</div>
 <div class="row">
    <div class="col-md-6">
    <label>No Telepon</label>
    <input type="number" name="no_telepon" required class="form-control" value="<?= $mhs->no_telepon ?>">
  </div>
</div>
 <div class="row">
    <div class="col-md-6">
    <label>Email</label>
    <input type="email" name="email" required class="form-control" value="<?= $mhs->email ?>">
  </div>
</div>
 <div class="row">
    <div class="col-md-6">
    <label>Agama</label>
    <select name="agama" required="" class="form-control">
      <option value="">-Pilih-Salah-satu-</option>
      <option value="Islam" <?= $mhs->agama == "Islam"? "selected='selected'":null ?>>Islam</option>
      <option value="Kristen" <?= $mhs->agama == "Kristen"? "selected='selected'":null ?>>Kristen</option>
      <option value="Katolik" <?= $mhs->agama == "Katolik"? "selected='selected'":null ?>>Katolik</option>
      <option value="Hindu" <?= $mhs->agama == "Hindu" ? "selected='selected'":null ?>>Hindu</option>
      <option value="Buddha" <?= $mhs->agama == "Buddha"? "selected='selected'":null ?>>Buddha</option>
      <option value="Konghucu" <?= $mhs->agama == "Konghucu"? "selected='selected'":null ?>>Konghucu</option>
    </select>
  </div>
</div>
<hr>
 <div class="row">
    <div class="col-md-3">
      <button type="submit" class="btn btn-success">Simpan Perubahan</button>
</div>
</div>



</form>
 