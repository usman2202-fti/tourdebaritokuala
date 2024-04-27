@extends('../template_admin')
@section('body')

<script>
    $(document).ready( function () {
        $('#tabel').DataTable({
            dom: 'Bflrtip',
            buttons: [
                {
                    extend: 'excelHtml5',
                    title: 'Data Peserta RB Kategori <?= strtoupper($judul) ?>',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8 ]
                        }
                },
                {
                    extend: 'pdfHtml5',
                    orientation: 'landscape',
                    title: 'Data Peserta RB Kategori <?= strtoupper($judul) ?>',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8 ]
                        }
                }
            ]
        });
    } );
</script>
<div class="row">
    <div class="col-md-12">
       <h3><?= strtoupper($judul) ?></h3>    
   </div>
</div>
<!-- /. ROW  -->
<hr />
<a href="{{ route('admin/tambah_rb', Request::segment(3)) }}" class="btn btn-primary">Tambah</a>
<div class="panel-body" style="margin-top: 10px">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="tabel">
            <thead>
                <tr>
                    <th style="text-align:center">No</th>
                    <th>No Peserta</th>
                    <th>UCI ID</th>
                    <th>No KTP</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Klub</th>
                    <th>KTP / KK</th>
                    <th>Kartu Asuransi</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($query->get() as $key): ?>
                    <tr>
                        <td style="text-align:center"><?php echo $no++ ?></td>
                        <td><?php echo $key->no_peserta ?></td>
                        <td><?php echo $key->uci_id ?></td>
                        <td><?php echo $key->no_ktp ?></td>
                        <td><?php echo $key->nama ?></td>
                        <td><?php echo $key->tanggal_lahir ?></td>
                        <td><?php echo $key->alamat ?></td>
                        <td><?php echo $key->telpon ?></td>
                        <td><?php echo $key->klub ?></td>
                        <td><a href="{{ asset('upload/'.$key->foto_ktp) }}" target="_blank"><img src="{{ asset('upload/'.$key->foto_ktp) }}" alt="" width="50px"></a></td>
                        <td><a href="{{ asset('upload/'.$key->asuransi) }}" target="_blank"><img src="{{ asset('upload/'.$key->asuransi) }}" alt="" width="50px"></a></td>
                        <td>
                        <a href="{{ route('admin/edit_rb', $key->id )}}" class="btn btn-success">Edit</a>
                            <a href="{{ route('admin/hapus_rb',  $key->id ) }}" class="btn btn-danger" onclick="return confirm('Hapus Data <?php echo $key->nama ?>?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>	  	
</div>

@endsection 