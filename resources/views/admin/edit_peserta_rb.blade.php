@extends('../template_admin')
@section('body')

<section class="module bg-dark-30 about-page-header" data-background="{{ asset('')}}asset/assets/images/rumpiang.jpg">
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
          <form class="form" enctype="multipart/form-data" role="form" method="post" action="{{ route('admin/edit_save_rb')}}">
            @method('put')
            @csrf
            <table>
              <?php foreach ($query->get() as $key): ?>
                <input type="hidden" name="id" value="<?= $key->id ?>">
                <tr>
                    <td align="right" style="padding: 2px"><h4>Kategori</h4></td>
                    <td class="col-md-10" style="padding: 2px">
                        <select name="kategori" class="form-control" readonly>
                            <option value=""></option>
                            <option value="Men Youth" <?= $key->kategori == 'Men Youth' ? 'selected' : '' ?>>Men Youth (13 - 16 Thn)</option>
                            <option value="Men Junior" <?= $key->kategori == 'Men Junior' ? 'selected' : '' ?>>Men Junior (17 - 18 Thn)</option>
                            <option value="Men Elite" <?= $key->kategori == 'Men Elite' ? 'selected' : '' ?>>Men Elite (19 - 29 Thn)</option>
                            <option value="Women Open" <?= $key->kategori == 'Women Open' ? 'selected' : '' ?>>Women Open (Semua Umur)</option>
                            <option value="Men Master A" <?= $key->kategori == 'Men Master A' ? 'selected' : '' ?>>Men Master A (30 - 40 Thn)</option>
                            <option value="Men Master B" <?= $key->kategori == 'Men Master B' ? 'selected' : '' ?>>Men Master B (41 Thn Keatas)</option>
                        </select>
                    </td>
                  </tr>
                  <tr>
                    <td align="right" style="padding: 2px"><h4>No Peserta</h4></td>
                    <td class="col-md-10" style="padding: 2px"><input class="form-control" name="no_peserta" value="<?= $key->no_peserta ?>"></td>
                  </tr>
                  <tr>
                    <td align="right" style="padding: 2px"><h4>No KTP</h4></td>
                    <td class="col-md-10" style="padding: 2px"><input class="form-control" name="no_ktp" value="<?= $key->no_ktp ?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required=""></td>
                  </tr>
                  <tr>
                    <td align="right" style="padding: 2px"><h4>UCI ID</h4></td>
                    <td class="col-md-10" style="padding: 2px"><input class="form-control" name="uci_id" value="<?= $key->uci_id ?>" required=""></td>
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
                  <tr>
                    <td align="right" style="padding: 2px"><h4>Klub</h4></td>
                    <td class="col-md-10" style="padding: 2px"><input class="form-control" name="klub" value="<?= $key->klub ?>" required></td>
                  </tr>
              <?php endforeach ?>
              <!--<tr>-->
              <!--  <td align="right" style="padding: 2px"><h4>Foto KTP</h4></td>-->
              <!--  <td class="col-md-10" style="padding: 2px">-->
              <!--    <input type="file" class="form-control" name="gbr">-->
              <!--    <small>Maksimal file 4 MB</small>-->
              <!--  </td>-->
              <!--</tr>-->
              <td style="padding: 2px">
                <?php if ($key->kategori  == 'Men Youth') { $segmen = '1';}
                 if ($key->kategori  == 'Men Junior') { $segmen = '2';}
                 if ($key->kategori  == 'Men Elite') { $segmen = '3';}
                 if ($key->kategori  == 'Women Open') { $segmen = '4';}
                 if ($key->kategori == 'Men Master A')  { $segmen = '5';}
                 if ($key->kategori  == 'Men Master B') { $segmen = '6';} ?>
                <td>
                  <input type="hidden" name="segmen" value="<?=$segmen?>">
                  <input class="btn btn-primary" type="submit" value="Simpan">
                  <a class="btn btn-danger" href="{{ route('admin/peserta_rb/', $segmen)}}">Cancel</a>
                </td>
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection