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
                <h3 class="card-title">Edit order</h3>
              </div>
              <!-- form start -->
              <form action="" method="post"  enctype="multipart/form-data"  >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                     <input type="text" value="<?=$editorder['name']?>" class="form-control" id="exampleInputPassword1" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input  type="email" value="<?=$editorder['email']?>" class="form-control" id="exampleInputPassword1" >
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Itemname</label>
                    <input  type="text" value="<?=$editorder['itemname']?>" class="form-control" id="exampleInputPassword1" >
                  </div>                  
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input  type="text" value="<?=$editorder['price']?>" class="form-control" id="exampleInputPassword1" >
                  </div> 
                                   
                  <div class="form-group">
                    <label for="exampleInputPassword1">Quantity</label>
                    <input  type="text" value="<?=$editorder['quantity']?>" class="form-control" id="exampleInputPassword1" >
                  </div>
                                                     
                  <div class="form-group">
                    <label for="exampleInputPassword1">Payment method</label>
                    <input  type="text" value="<?=$editorder['paymethod']?>" class="form-control" id="exampleInputPassword1" >
                  </div>                 
                  
                   <div class="form-group">
                    <label for="exampleInputPassword1">Payment method</label>
                    <input  type="text" value="<?=$editorder['paymethod']?>" class="form-control" id="exampleInputPassword1" >
                  </div>
                  Shipped   <input type="radio" checked="" name="shipped" value="1" ><br />
                  Unshipped	  <input type="radio"  name="shipped" value="0" ><br />

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
