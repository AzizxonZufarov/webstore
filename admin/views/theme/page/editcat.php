<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit category</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->

          <form  action="" method="post">
            <div class="card-body">

              <div class="form-group">
                <label for="exampleInputPassword1">Category</label>
                <input type="text" name="category" value="<?=$editcat['name']?>" class="form-control" id="exampleInputPassword1" placeholder="Category">
              </div>

              </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <input type="submit" class="btn btn-primary" value="Edit">
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
