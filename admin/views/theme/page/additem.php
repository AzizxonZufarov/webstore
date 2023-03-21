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
                <h3 class="card-title">Add item</h3>
              </div>
              <!-- form start -->
              <form action="" method="post"  enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter price">
                  </div>

                  <div class="form-group">
                    <label>Category</label>
                    <select class="form-control"  name="cat_id" >
                      <?foreach($categories as $item){?>?>
                           <option value="<?=$item['id']?>"><?=$item['name']?></option>
                          <? }?>
                    </select>
                  </div>


                  <div class="form-group">
                    <label>Brand</label>
                    <select class="form-control"  name="brand_id" >
                      <?foreach($brands as $item){?>?>
                           <option value="<?=$item['id']?>"><?=$item['name']?></option>
                          <? }?>
                    </select>
                  </div>


                  <label for="author">Image:</label>
                 <input type="file" name="img"  />
                 <div class="cleaner_h10"></div>

                 <div class="form-group">
                   <label for="exampleInputPassword1">Description</label>
                   <textarea type="text" name="description" class="form-control" id="exampleInputPassword1">Write text</textarea>
                 </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add</button>
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
