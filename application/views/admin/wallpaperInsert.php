
        
<form action="<?php echo base_url().'/index.php?c=AdminController&m=insertForm'?>" method="POST"  enctype="multipart/form-data" accept-charset="utf-8" >
  <div class="form-group">
    <label for="exampleFormControlInput1">Titre </label>
    <input type ="text" name="Titre">
    <input type="file" name="upload" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Categorie :</label>
    <select name="Id_Categorie">
    <?php foreach ($categs as $res) {?>
      <option value="<?php echo $res['Id_Categorie']?>>"><?php echo $res['Categorie']?></option>
    <?php } ?>
    </select>
    
  </div>
  
  <div class="form-group">
    <label>Resolution :</label>
    <select name="Id_Resolution">
    <?php foreach ($resolution as $res) {?>
        <option value="<?php echo $res['Id_Resolution']?>"><?php echo $res['Width']?>X<?php echo $res['Height']?></option>
    <?php } ?>
    </select> 
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Tags :</label>
    <input type="text" id="exampleFormControlInput1" placeholder="TAGS" name="tags">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Petite image: </label>
    <input type="file" name="littleImg" class="form-control-file" id="exampleFormControlFile1" >
  </div>

  <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
</form>

                            <script src="<?php echo base_url().'/assets/admin/page/'?>vendors/jquery/dist/jquery.min.js"></script>
                            <script src="<?php echo base_url().'/assets/admin/page/'?>vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="<?php echo base_url().'/assets/admin/page/'?>vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="<?php echo base_url().'/assets/admin/page/'?>vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="<?php echo base_url().'/assets/admin/page/'?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="<?php echo base_url().'/assets/admin/page/'?>js/main.js"></script>
</body>
</html>