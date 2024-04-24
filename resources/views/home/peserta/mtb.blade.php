
@extends('../template')
@section('body')
<script>
        $(document).ready( function () {
            $('#tabel').DataTable();
        } );
    </script>
<section class="module bg-dark-30 about-page-header" data-background="{{ asset('')}}asset/assets/images/rumpiang.jpg">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <h1 class="module-title font-alt mb-0">Peserta Fun Bike</h1>
      </div>
  </div>
</div>
</section>
<br><br><br><br>
<div class="row">
    <div class="col-md-12">
     <h3>&nbsp;&nbsp;<?= $total_data_mtb->count() ?> Orang</h3>    
 </div>
</div>
<!-- /. ROW  -->
<hr />
<div class="panel-body" style="margin-top: 10px">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="tabel">
            <thead>
                <tr>
                    <th style="text-align:center">No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Klub</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0; foreach ($total_data_mtb->get() as $key): ?>
                <tr>
                    <td style="text-align:center"><?php echo ++$no ?></td>
                    <td><?php echo ucwords(strtolower($key->nama)) ?></td>
                    <td><?php echo $key->alamat ?></td>
                    <td><?php echo $key->klub ?></td>
                </tr> 
            <?php endforeach ?>
        </tbody>
    </table>
</div>	  	
</div>
@endsection