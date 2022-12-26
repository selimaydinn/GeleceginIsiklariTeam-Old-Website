<?php require 'header.php';

$sponsor=$baglanti->prepare("SELECT * from sponsor where id=:id ");

$sponsor->execute(array(
    'id'=>$_GET['id']
));

$sponsorcek=$sponsor->fetch(PDO::FETCH_ASSOC)

    ?>

    <!-- Main content -->
    <section> <class="content">
      <div class="row">

          </div>
        </section>  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Site Ayarları</h3>
              </div>

              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem/islem.php" method="POST" enctype="multipart/form-data" role="form">
              <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1"></label>
                    <img style="width: 300px; height: 175px;" src="resimler/urun/<?php echo $sponsorcek['resim'] ?>">
                  </div>
              <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Resim</label>
                    <input name="resim" type="file" class="form-control" id="exampleInputEmail1" value="" placeholder="Lüten Resim Ekleyin">
                    <form action="islem/islem.php" method="POST">

                  </div>

                  <input  type="hidden" name="id" value='<?php echo $sponsorcek['id'] ?>'>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Başlık</label>
                      <input name="baslik" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $sponsorcek['baslik'] ?>" placeholder="Lütfen İlan Başlık Giriniz">
                    </div>

                  <div class="form-group">
                      <label for="exampleInputEmail1">Açıklama</label>
                      <input name="aciklama" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $sponsorcek['aciklama'] ?>" placeholder="Lütfen İlan Açıklama Giriniz">
                    </div>




                    <div class="form-group">
                      <label>Filtreleme</label>
                      <select name="emlaktipi" class="form-control select2" style="width: 100%;">
                        <option <?php if ($sponsorcek['emlaktipi']=="filter-2021") { ?> selected="selected"<?php }  ?> value="filter-2021">2021</option>
                        <option <?php if ($sponsorcek['emlaktipi']=="filter-2020") { ?> selected="selected"<?php }  ?> value="filter-2020">2020</option>
                        <option <?php if ($sponsorcek['emlaktipi']=="filter-2018") { ?> selected="selected"<?php }  ?> value="filter-2018">2018</option>
                        <option <?php if ($sponsorcek['emlaktipi']=="filter-teknofest") { ?> selected="selected"<?php }  ?> value="filter-teknofest">Teknofest</option>
                        <option <?php if ($sponsorcek['emlaktipi']=="filter-gypfikirmaratonu") { ?> selected="selected"<?php }  ?> value="filter-gypfikirmaratonu">GYP Fikir Maratonu</option>
                        <option <?php if ($sponsorcek['emlaktipi']=="filter-tübi") { ?> selected="selected"<?php }  ?> value="filter-tübi">Tübitak</option>
                        <option <?php if ($sponsorcek['emlaktipi']=="filter-proje") { ?> selected="selected"<?php }  ?> value="filter-proje">Kod Adı A.Y.İ.T.O</option>
                        <option <?php if ($sponsorcek['emlaktipi']=="filter-su") { ?> selected="selected"<?php }  ?> value="filter-su">Kod Adı Su</option>
                        <option <?php if ($sponsorcek['emlaktipi']=="filter-buzz") { ?> selected="selected"<?php }  ?> value="filter-buzz">Kod Adı Buzz</option>
                        <option <?php if ($sponsorcek['emlaktipi']=="filter-hali") { ?> selected="selected"<?php }  ?> value="filter-hali">"Kod Adı Halı</option>
                        </select>
                        </div>


                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Sıra</label>
                                          <input name="sira" type="number" class="form-control" id="exampleInputEmail1" value="<?php echo $sponsorcek['sira'] ?>" placeholder="Lütfen Sıra Giriniz">
                                        </div>






<input type="hidden" name="id" value="<?php echo $sponsorcek['id']; ?>"

                </div>






                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="sponsorduzenle" type="submit" class="btn btn-primary">Değiştir</button>
                </div>
              </form>
            </div>
          </section>


        </div>

      </div>

  <!-- /.content-wrapper -->
  <?php require'footer.php'; ?>
