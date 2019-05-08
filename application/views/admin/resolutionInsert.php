
        
<form action="<?php echo base_url().'/index.php?c=AdminController&m=insertResolution'?>" method="POST"  enctype="multipart/form-data" accept-charset="utf-8" >
  <div class="form-group">
    <label for="exampleFormControlInput1">Width : </label>
    <input type="text" name="width" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Height : </label>
    <input type="text" name="height" class="form-control-file" id="exampleFormControlFile1">
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