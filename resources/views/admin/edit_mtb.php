  <section class="module bg-dark-30 about-page-header" data-background="<?php echo base_url() ?>assets/images/rumpiang.jpg">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <h1 class="module-title font-alt mb-0"><?php echo $judul ?></h1>
        </div>
      </div>
    </div>
  </section>
  <br><br><br><br>
  <section class="module">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <hr class="divider-w mt-10 mb-20">
          <form class="form" enctype="multipart/form-data" role="form" method="post" action="<?= $action ?>">
            <table>
              <?php foreach ($query->result() as $key): ?>
                <input type="hidden" name="id" value="<?= $key->id ?>">
                <tr>
                    <td align="right" style="padding: 2px"><h4>No KTP</h4></td>
                    <td class="col-md-10" style="padding: 2px"><input class="form-control" name="no_ktp" value="<?= $key->no_ktp ?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required=""></td>
                  </tr>
                  <tr>
                    <td align="right" style="padding: 2px"><h4>Nama</h4></td>
                    <td class="col-md-10" style="padding: 2px"><input class="form-control" name="nama" value="<?= $key->nama ?>" required></td>
                  </tr>
                  <tr>
                    <td align="right" style="padding: 2px"><h4>Tanggal Lahir</h4></td>
                    <td class="col-md-10" style="padding: 2px"><input type="date" class="form-control" name="tanggal_lahir" value="<?= $key->tanggal_lahir ?>" required></td>
                  </tr>
                  <tr>
                    <td align="right" style="padding: 2px"><h4>Alamat</h4></td>
                    <td class="col-md-10" style="padding: 2px">
                      <textarea name="alamat" class="form-control" id="" cols="30" rows="3" required=""><?= $key->alamat ?></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td align="right" style="padding: 2px"><h4>No HP</h4></td>
                    <td class="col-md-10" style="padding: 2px">
                      <input type="text" class="form-control" name="telpon" value="<?= $key->telpon ?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
                    </td>
                  </tr>
              <?php endforeach ?>
              <tr>
                <td align="right" style="padding: 2px"><h4>Foto KTP</h4></td>
                <td class="col-md-10" style="padding: 2px">
                  <input type="file" class="form-control" name="gbr">
                  <small>Maksimal file 4 MB</small>
                </td>
              </tr>
              <td style="padding: 2px">
                <td>
                  <input class="btn btn-primary" type="submit" value="Simpan">
                  <button class="btn btn-danger" onclick="self.history.back()">Cancel</button>
                </td>
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>
</section>