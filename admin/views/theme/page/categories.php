

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">categories</h3>
          <br />
              <a class="btn btn-primary btn-sm" href="?view=addcat">
                  <i class="fas fa-folder">
                  </i>
                  Add category
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
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 20%">
                          ID
                      </th>
                      <th style="width: 20%">
                          Title
                      </th>
                      <th style="width: 20%">
                      Operations
                      </th>
                  </tr>
              </thead>
              <tbody>
   <?foreach($categories as $value){  ?>
                  <tr>
                      <td>
                          #
                      </td>

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
                          <a class="btn btn-info btn-sm" href="?view=editcat&id=<?=$value['id']?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="?view=dellcat&id=<?=$value['id']?>">
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
