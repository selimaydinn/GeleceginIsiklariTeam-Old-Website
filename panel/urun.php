<?php require 'header.php'; ?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
        <!-- /.card-header -->

            <!-- /.card -->


              <!-- /.card-header -->


              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

              <!-- /.card-header -->

              <!-- /.card-body -->

            <!-- /.card -->

            <div class="card">



              <!-- /.card-header -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Ürünler</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Resim</th>
                      <th>İsim Soyisim</th>
                      <th>Görevi</th>



                      <th>Sıra</th>

                      <th></th>
                      <th style="float:right"><a href="urunekle.php"><button style="width: 150px" class="btn btn-primary">Takım Arkadaşı Ekle</button></th>
                                </tr>
                  </thead>
                  <tbody>
                    <?php
                    $emlak=$baglanti->prepare("SELECT * from emlak ");

                    $emlak->execute();

                    while ($emlakcek=$emlak->fetch(PDO::FETCH_ASSOC)) {



                    ?>

                    <tr>
                      <td><img style="width: 300px; height: 175px;" src="resimler/urun/<?php echo $emlakcek['resim'] ?>"></td>
                      <td><?php echo $emlakcek['baslik'] ?></td>
                      <td><?php echo $emlakcek['aciklama'] ?></td>



                      <td><?php echo $emlakcek['sira'] ?></td>


                      <td></td>
                      <td style="float:right">

<td style="float:right">

  <form action="islem/islem.php" method="POST">
  <input type="hidden" name="id" value="<?php echo $emlakcek['id'] ?>">
  <input type="hidden" name="resim" value="<?php echo $emlakcek['resim'] ?>">
  <button name="urunsil" class="btn btn-danger">Sil</button>

</form>

</td>                    <td style="float:right"><a href="urunduzenle.php?id=<?php echo $emlakcek['id'] ?>"><button class="btn btn-success">Düzenle</button></a></td>
      </td>


      </tr>
<?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <?php require'footer.php'; ?>
