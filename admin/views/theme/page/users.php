

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
                    <h3 class="card-title">users</h3>
          <br />
              <a class="btn btn-primary btn-sm" href="?view=adduser">
                  <i class="fas fa-folder">
                  </i>
                  Add user
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
                          Name
                      </th>
                      <th style="width: 1%">
                          Email
                      </th>
                      <th style="width: 1%">
                          Password
                      </th>
                      <th style="width: 1%">
                          Image
                      </th>
                      <th style="width: 1%">
                          isAdmin
                      </th>
                      <th style="width: 30%">
                      Operations
                      </th>
                  </tr>
              </thead>
              <tbody>
   <?foreach($users as $value){  ?>
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
                            <?=$value['password']?>
                          </a>
                      </td>
                      <td>
                          <a>
                    <img style="border: 1px solid black" src="regupl/<?= $value['img']?>" width="50px" height="50px"/><br />
                          </a>
                      </td>
                      <td>
                          <a>
                            <?=$value['isAdmin']?>
                          </a>
                      </td>

                      <td>

                          <a class="btn btn-info btn-sm" href="?view=edituser&id=<?=$value['id']?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="?view=delluser&id=<?=$value['id']?>">
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
