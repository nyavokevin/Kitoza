
        
<form action="<?php echo base_url().'/index.php?c=AdminController&m=insertCategorie'?>" method="POST"  enctype="multipart/form-data" accept-charset="utf-8" >
  <div class="form-group">
    <label for="exampleFormControlInput1">Name : </label>
    <input type="text" name="categorie" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Confirm</button>
</form>

                            <script src="<?php echo base_url().'/assets/admin/page/'?>vendors/jquery/dist/jquery.min.js"></script>
                            <script src="<?php echo base_url().'/assets/admin/page/'?>vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="<?php echo base_url().'/assets/admin/page/'?>vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="<?php echo base_url().'/assets/admin/page/'?>vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="<?php echo base_url().'/assets/admin/page/'?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="<?php echo base_url().'/assets/admin/page/'?>js/main.js"></script>
</body>
</html>