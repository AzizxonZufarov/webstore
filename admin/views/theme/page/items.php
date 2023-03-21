

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
                    <h3 class="card-title">Items</h3>
          <br />
              <a class="btn btn-primary btn-sm" href="?view=additem">
                  <i class="fas fa-folder">
                  </i>
                  Add item
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
                      <th style="width: 20%">
                          Name
                      </th>
                      <th style="width: 1%">
                          Price
                      </th>
                      <th style="width: 1%">
                          Cat_id
                      </th>
                      <th style="width: 1%">
                          Brand_id
                      </th>
                      <th style="width: 10%">
                          Image
                      </th>

                      <th style="width: 30%">
                          Description
                      </th>
                      <th style="width: 30%">
                      Operations
                      </th>
                  </tr>
              </thead>
              <tbody>
   <?foreach($items as $value){  ?>
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
                            <?=$value['price']?>
                          </a>
                      </td>
                      <td>
                          <a>
                            <?=$value['cat_id']?>
                          </a>
                      </td>

                      <td>
                          <a>
                            <?=$value['brand_id']?>
                          </a>
                      </td>

                      <td>
                          <a>
                    <img style="border: 1px solid black" src="<?=THEME?><?=$value['img']?>" width="100px" height="100px"/><br />
                          </a>
                      </td>

                       <td>
                          <a>
                            <?=mb_substr(strip_tags($value['description']), 0, 20, 'utf-8'). '...';?>
                          </a>
                      </td>




                      <td>

                          <a class="btn btn-info btn-sm" href="?view=edititem&id=<?=$value['id']?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="?view=dellitem&id=<?=$value['id']?>">
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
