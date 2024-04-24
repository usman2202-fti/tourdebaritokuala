@extends('../template')
@section('body')

<section class="module bg-dark-30 about-page-header" data-background="{{ asset('')}}asset/assets/images/rumpiang.jpg">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <h1 class="module-title font-alt mb-0">Register Fun Bike</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="module">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <h4 class="font-alt mb-0">Register</h4>
          <hr class="divider-w mt-10 mb-20">
          <form class="form" enctype="multipart/form-data" role="form" method="post" action="{{ route('register_save_mtb')}}">
            @method('post')
            @csrf
            <table>
              <tr>
                <td align="right" style="padding: 2px"><h4>Kategori</h4></td>
                <td class="col-md-10" style="padding: 2px">
                    <select name="kategori" class="form-control">
                        <option value="">-- Pilih Kategori --</option>
                        <option value="I">Kategori I - Usia 17 s/d 30 Thn (Man Open)</option>
                        <option value="II">Kategori II - Usia 31 s/d 40 Thn (Master)</option>
                        <option value="III">Kategori III - Women Open (Semua Umur)</option>
                    </select>
                </td>
              </tr>
              <tr>
                <td align="right" style="padding: 2px"><h4>No KTP</h4></td>
                <td class="col-md-10" style="padding: 2px"><input class="form-control" name="no_ktp" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required=""></td>
              </tr>
              <tr>
                <td align="right" style="padding: 2px"><h4>Nama</h4></td>
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
                <td align="right" style="padding: 2px"><h4>Klub</h4></td>
                <td class="col-md-10" style="padding: 2px"><input class="form-control" name="klub"></td>
              </tr>
              <td style="padding: 2px">
                <td>
                  <input class="btn btn-primary" type="submit" value="Register">
                  <button type="reset" class="btn btn-danger">Cancel</button>
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