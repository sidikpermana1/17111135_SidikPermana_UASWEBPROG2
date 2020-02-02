
<!-- jQuery -->
<script src="<?= base_url('assets/admin/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/admin/js/adminlte.min.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/admin/js/adminlte.min.js')?>"></script>
<script>
    function confirmDialog() {
     return confirm('Apakah anda yakin akan menghapus data siswa ini?')
    }

    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
   
          return false;
          return true;
    }
    
      function runPopup(){
        window.alert('data berhasil di simpan!');
      }  
  </script>
  <script type="text/javascript" src="<?= base_url('assets/js/jquery.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/js/bootstrap.js')?>"></script>
</body>
</html>