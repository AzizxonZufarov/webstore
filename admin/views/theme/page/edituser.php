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
                <h3 class="card-title">Edit user</h3>
              </div>
              <!-- form start -->
              <form action="" method="post"  enctype="multipart/form-data"  >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                     <input type="text" name="name" value="<?=$edituser['name']?>" class="form-control" id="exampleInputPassword1" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input  type="email" name="email" value="<?=$edituser['email']?>" class="form-control" id="exampleInputPassword1" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input  type="text" name="password" value="<?=$edituser['password']?>" class="form-control" id="exampleInputPassword1" >
                  </div>
                    <img style="border: 1px solid black" src="regupl/<?= $edituser['img']?>" width="100px" height="100px"/><br />
                  <div class="custom-file">

                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    <input type="file" class="custom-file-input" name="img" id="exampleInputFile">
                  </div>

                  <div class="form-check">
                    <label>Admin</label><br />
                    <input class="form-check-input" type="radio" checked="" value="1" name="isadmin"><br />
                    <label>User</label>    <br />
                    <input class="form-check-input" type="radio" value="0" name="isadmin">
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
