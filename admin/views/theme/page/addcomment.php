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
                <h3 class="card-title">Add comment</h3>
              </div>
              <!-- form start -->
              <form action="" method="post" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Author</label>
                    <input type="text" name="author" class="form-control" id="exampleInputPassword1" placeholder="Author">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Text</label>
                    <input type="text" name="text" class="form-control" id="exampleInputPassword1" placeholder="Text">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>

                  <div class="form-group">
                    <label>Category</label>
                    <select class="form-control"  name="category" >
                      <?foreach($categories as $item){?>?>
                           <option value="<?=$item['id']?>"><?=$item['name']?></option>
                          <? }?>
                    </select>
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
