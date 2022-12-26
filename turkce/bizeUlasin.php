<!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>İletişim // Sponsorluk</h3>

        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Adres</h3>
              <address><?php echo $ayarcek['adres'] ?></address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Telefon Numarası</h3>
              <p><a href="tel:<?php echo $ayarcek['telefon'] ?>"><?php echo $ayarcek['telefon'] ?></a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>E-Posta</h3>
              <p><a href="mailto:<?php echo $ayarcek['email'] ?>"><?php echo $ayarcek['email'] ?></a></p>
            </div>
          </div>
        </div>

        <div class="form">
          <div id="sendmessage">Mesajın bize ulaştı! Teşekkürler!</div>
          <div id="errormessage"></div>
        <form id="contact" action="panel/islem/islem.php" method="post">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="baslik" class="form-control" id="name" placeholder="Adınız Soyadınız" data-rule="minlen:4" data-msg="Please enter at least 4 chars" /required>
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="E-Postanız" data-rule="email" data-msg="Please enter a valid email" /required>
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">


              </select>
              <input  class="form-control" name="konu" id="subject" placeholder="Mesaj Atma Amacınız (Sponsorluk , Öneri , Hata bildir)" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" /required>

              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="mesaj" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mesajınız"required></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button name="mesajkaydet" type="submit">Mesaj Gönder</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>
