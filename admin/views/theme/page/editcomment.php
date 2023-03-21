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
                <h3 class="card-title">Edit comment</h3>
              </div>
              <!-- form start -->
              <form action="" method="post" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Author</label>
                     <input type="text" name="author" value="<?=$editcomment['author']?>" class="form-control" id="exampleInputPassword1" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Date</label>
                    <input  type="date" name="date" value="<?=$editcomment['date']?>" class="form-control" id="exampleInputPassword1" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Text</label>
                    <input  type="text" name="text" value="<?=$editcomment['text']?>" class="form-control" id="exampleInputPassword1" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                     <input type="email" name="email" value="<?=$editcomment['email']?>"  class="form-control" id="exampleInputEmail1" >
                  </div>

                  <div class="form-group">
                    <label>Category</label>
                    <select class="form-control"  name="category" >
                      <?foreach($categories as $item){?>
                           <option value="<?=$item['id']?>"
                             <?php if ($item['id'] == $editcomment['cat_id']){ echo 'selected';}?>>
                             <?=$item['name']?>
                           </option>
                          <? }?>
                    </select>
                  </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Status</label>
                   <input type="text" name="status" value="<?=$editcomment['status']?>" class="form-control" id="exampleInputPassword1">
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
