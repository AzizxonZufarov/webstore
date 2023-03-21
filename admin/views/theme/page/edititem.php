  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div></div>
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <div class="card-header">
                <h3 class="card-title">Edit item</h3>
              </div>
              <!-- form start -->
              <form action="" method="post"  enctype="multipart/form-data"  >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                     <input type="text" name="name" value="<?=$edititem['name']?>" class="form-control" id="exampleInputPassword1" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input  type="text" name="price" value="<?=$edititem['price']?>" class="form-control" id="exampleInputPassword1" >
                  </div>

                  <div class="form-group">
                    <label>Category</label>
                    <select class="form-control"  name="cat_id" >
                      <?foreach($categories as $item){?>?>
                           <option value="<?=$item['id']?>" <?php

              if ($item['id'] == $edititem['cat_id']){
                  echo 'selected';
              }
          ?>><?=$item['name']?></option>
                          <? }?>
                    </select>
                  </div>


                  <div class="form-group">
                    <label>Brand</label>
                    <select class="form-control"  name="brand_id" >
                      <?foreach($brands as $item){?>?>
                           <option value="<?=$item['id']?>"
                             <?php

                if ($item['id'] == $edititem['brand_id']){
                    echo 'selected';
                }
            ?>><?=$item['name']?></option>
                          <? }?>
                    </select>
                  </div>














                    <img style="border: 1px solid black" src="<?=THEME?><?=$edititem['img']?>" width="100px" height="100px"/><br />
                  <div class="custom-file">

                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    <input type="file" class="custom-file-input" name="img" id="exampleInputFile">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                     <textarea type="text" name="description"
                     value="" class="form-control" id="exampleInputPassword1"><?=$edititem['description']?></textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->



        </div>
         </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
