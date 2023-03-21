

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
                    <h3 class="card-title">User's orders</h3>
          <br />
              <a class="btn btn-primary btn-sm" href="http://webstore/">
                  <i class="fas fa-folder">
                  </i>
                  Add order
              </a>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 10%">
                          ID
                      </th>
                      <th style="width: 1%">
                          Name
                      </th>
                      <th style="width: 1%">
                          Email
                      </th>

                      <th style="width: 30%">
                          Itemname
                      </th>
                      <th style="width: 1%">
                      Price
                      </th>                      
                      
                      <th style="width: 1%">
                      Quantity
                      </th>  
                                          
                      <th style="width: 1%">
                      Total
                      </th> 
                                          
                       <th style="width: 10%">
                      Payment method
                      </th>    
                                                            
                       <th style="width: 5%">
                      Ship status
                      </th>    
                                                                              
                       <th style="width: 30%">
                      Operations
                      </th>
                      
                  </tr>
              </thead>
              <tbody>
   <?foreach($user_orders as $value){  ?>
                  <tr>

                      <td>
                          <a>
                             <?=$value['id']?>
                          </a>
                      </td>


                      <td>
                          <a>
                            <?=$value['name']?>
                          </a>
                      </td>

                      <td>
                          <a>
                            <?=$value['email']?>
                          </a>
                      </td>

                      <td>
                          <a>
                            <?=$value['itemname']?>
                          </a>
                      </td>
                      
                      <td>
                          <a>
                            <?=$value['price']?>
                          </a>
                      </td>                      
                      <td>
                          <a>
                            <?=$value['quantity']?>
                          </a>
                      </td>                     
                      
                       <td>
                          <a>
                            <?=$value['total']?>
                          </a>
                      </td>   
                                         
                       <td>
                          <a>
                            <?=$value['paymethod']?>
                          </a>
                      </td>                       
                      
                      <td>
                          <a>
                            <?
                            if($value['shipped'] == 1){
                            	echo "Shipped";
                            }else{
                            	echo "Not shipped";
                            }
                            
                            ?>
                          </a>
                      </td>



                      <td>

                      <?if($value['shipped'] == 1) {?>
                        <a class="btn btn-primary btn-sm" href="?view=unship&id=<?=$value['id']?>">
                            <i class="fas fa-folder">
                            </i>
                            Unship item
                        </a>
                      <?}else{?>
                        <a class="btn btn-primary btn-sm" href="?view=ship&id=<?=$value['id']?>">
                            <i class="fas fa-folder">
                            </i>
                            Ship item
                        </a>
                      <?}?>                      			             
				              
				              <a class="btn btn-info btn-sm" href="?view=editorder&id=<?=$value['id']?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="?view=dellorder&id=<?=$value['id']?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>



                  </tr>
    <?}?>

              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
