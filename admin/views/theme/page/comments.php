<?php
session_start();
?>


    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
                    <h3 class="card-title">comments</h3>
          <br />
              <a class="btn btn-primary btn-sm" href="?view=addcomment">
                  <i class="fas fa-folder">
                  </i>
                  Add comment
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
                      <th style="width: 5%">
                          Author
                      </th>
                      <th style="width: 30%">
                          Date
                      </th>
                      <th style="width: 10%">
                          Text
                      </th>
                      <th style="width: 1%">
                          Email
                      </th>
                      <th style="width: 1%">
                          Cat_id
                      </th>
                      <th style="width: 1%">
                          Status
                      </th>
                      <th style="width: 30%">
                      Operations
                      </th>
                  </tr>
              </thead>
              <tbody>
   <?foreach($comments as $value){  ?>
                  <tr>

                      <td>
                          <a>
                             <?=$value['id']?>
                          </a>
                      </td>


                      <td>
                          <a>
                            <?=$value['author']?>
                          </a>
                      </td>

                      <td>
                          <a>
                            <?=$value['date']?>
                          </a>
                      </td>
                      <td>
                          <a>
                            <?=$value['text']?>
                          </a>
                      </td>
                      <td>
                          <a>
                            <?=$value['email']?>
                          </a>
                      </td>
                      <td>
                          <a>
                            <?=$value['cat_id']?>
                          </a>
                      </td>
                      <td  style="font-size:0"><?=$value['status']?></td>


                      <td>

                      <?if($value['status'] == 1) {?>
                        <a class="btn btn-primary btn-sm" href="?view=unconfirm&id=<?=$value['id']?>">
                            <i class="fas fa-folder">
                            </i>
                            Unconfirm
                        </a>
                      <?}else{?>
                        <a class="btn btn-primary btn-sm" href="?view=confirm&id=<?=$value['id']?>">
                            <i class="fas fa-folder">
                            </i>
                            Confirm
                        </a>
                      <?}?>

                          <a class="btn btn-info btn-sm" href="?view=editcomment&id=<?=$value['id']?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="?view=dellcomment&id=<?=$value['id']?>">
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

