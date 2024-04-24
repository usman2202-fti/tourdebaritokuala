@extends('../template_admin')
@section('body')

<section class="module bg-dark-30 about-page-header" data-background="{{ asset('')}}asset/assets/images/rumpiang.jpg">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <h1 class="module-title font-alt mb-0">Register Road Bike</h1>
        </div>
      </div>
    </div>
  </section>
  <br><br><br><br>
  <div class="row">
      <br><br>
      <div class="module-subtitle font-serif">
        <h1><b></b>Pandaftaran ditutup Hari Rabu Tanggal 25 Oktober 2023 Pukul 23.59 Wita</b></h1>
      </div>
  </div>
  <section class="module">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <h4 class="font-alt mb-0">Register</h4>
          <hr class="divider-w mt-10 mb-20">
          <form class="form" enctype="multipart/form-data" role="form" method="post" action="{{ route('admin/register_save_rb')}}">
            @method('post')
            @csrf
            <table>
                <tr>
                <td align="right" class="col-md-4" style="padding: 2px"><h4>Kategori</h4></td>
                <td class="col-md-10" style="padding: 2px">
                    <select name="kategori" class="form-control" required readonly>
                        <option value="Men Youth" <?= Request::segment(3) == '1' ? 'selected' : '' ?>>Men Youth (13 - 16 Thn)</option>
                        <option value="Men Junior" <?= Request::segment(3) == '2' ? 'selected' : '' ?>>Men Junior (17 - 18 Thn)</option>
                        <option value="Men Elite" <?= Request::segment(3) == '3' ? 'selected' : '' ?>>Men Elite (19 - 29 Thn)</option>
                        <option value="Women Open" <?= Request::segment(3) == '4' ? 'selected' : '' ?>>Women Open (Semua Umur)</option>
                        <option value="Men Master A" <?= Request::segment(3) == '5' ? 'selected' : '' ?>>Men Master A (30 - 40 Thn)</option>
                        <option value="Men Master B" <?= Request::segment(3) == '6' ? 'selected' : '' ?>>Men Master B (41 Thn Keatas)</option>
                    </select>
                </td>
                </tr>
              <tr>
                <td align="right" style="padding: 2px"><h4>No KTP</h4></td>
                <td class="col-md-10" style="padding: 2px"><input class="form-control" name="no_ktp" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required=""></td>
              </tr>
              <tr>
                <td align="right" style="padding: 2px"><h4>UCI ID</h4></td>
                <td class="col-md-10" style="padding: 2px"><input class="form-control" name="uci_id" required=""></td>
              </tr>
              <tr>
                <td align="right" style="padding: 2px"><h4>Nama Lengkap Sesuai KTP</h4></td>
                <td class="col-md-10" style="padding: 2px"><input class="form-control" name="nama" required></td>
              </tr>
              <tr>
                <td align="right" style="padding: 2px"><h4>Tanggal Lahir</h4></td>
                <td class="col-md-10" style="padding: 2px"><input type="date" class="form-control" name="tanggal_lahir" required></td>
              </tr>
              <tr>
                <td align="right" style="padding: 2px"><h4>Alamat</h4></td>
                <td class="col-md-10" style="padding: 2px">
                  <textarea name="alamat" class="form-control" id="" cols="30" rows="3" required=""></textarea>
                </td>
              </tr>
              <tr>
                <td align="right" style="padding: 2px"><h4>No HP</h4></td>
                <td class="col-md-10" style="padding: 2px">
                  <input type="text" class="form-control" name="telpon" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
                </td>
              </tr>
              <tr>
                <td align="right" style="padding: 2px"><h4>No Peserta</h4></td>
                <td class="col-md-10" style="padding: 2px">
                  <input type="text" class="form-control" name="no_peserta" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
                </td>
              </tr>
              <tr>
                <td align="right" style="padding: 2px"><h4>Klub</h4></td>
                <td class="col-md-10" style="padding: 2px"><input class="form-control" name="klub"></td>
              </tr>
              <tr>
                <td align="right" style="padding: 2px"><h4>KTP / KK</h4></td>
                <td class="col-md-10" style="padding: 2px">
                  <input type="file" class="form-control" name="gbr" required>
                  <small>Maksimal file 4 MB</small>
                </td>
              </tr>
              <tr>
                <td align="right" style="padding: 2px"><h4>Kartu Asuransi / BPJS Ketenagakerjaan</h4></td>
                <td class="col-md-10" style="padding: 2px">
                  <input type="file" class="form-control" name="asuransi">
                  <small>Maksimal file 4 MB</small>
                </td>
              </tr>
              <td style="padding: 2px">
                <td>
                  <input type="hidden" name="segmen" value="<?= Request::segment(3) ?>">
                  <input class="btn btn-primary" type="submit" value="Register">
                  <button onClick="history.go(-1);" class="btn btn-danger">Cancel</button>
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