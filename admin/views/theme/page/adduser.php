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
                <h3 class="card-title">Add user</h3>
              </div>
              <!-- form start -->
              <form action="" method="post"  enctype="multipart/form-data" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="text" name="password" class="form-control" id="exampleInputEmail1" placeholder="Enter password">
                  </div>

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
