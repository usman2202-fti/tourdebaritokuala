@extends('../template')
@section('body')
<script>
    $(document).ready( function () {
        $('#1').DataTable();
        $('#2').DataTable();
        $('#3').DataTable();
        $('#4').DataTable();
        $('#5').DataTable();
        $('#6').DataTable();
    } );
</script>
<section class="module bg-dark-30 about-page-header" data-background="{{ asset('')}}asset/assets/images/rumpiang.jpg">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <h1 class="module-title font-alt mb-0">Peserta Road Bike</h1>
      </div>
  </div>
</div>
</section>
<br><br><br><br>
<div class="row">
    <div class="col-md-12">
     <h3>&nbsp;&nbsp;
        {{ $total_rb->count() ?? '0' }} Orang</h3>    
 </div>
</div>
<hr>
<?php for ($i = 1; $i <= 6; $i++): ?>
    <div class="row">
        <div class="col-md-12">
            <?php if ($i == '1'): ?>
                <h3>&nbsp;&nbsp;Men Youth (13 - 16 Thn)</h3> 
            <?php elseif ($i == '2'): ?>   
                <h3>&nbsp;&nbsp;Men Junior (17 - 18 Thn)</h3>
            <?php elseif ($i == '3'): ?>   
                <h3>&nbsp;&nbsp;Men Elite (19 - 29 Thn)</h3>
            <?php elseif ($i == '4'): ?>   
                <h3>&nbsp;&nbsp;Women Open (Semua Umur)</h3>
            <?php elseif ($i == '5'): ?>   
                <h3>&nbsp;&nbsp;Men Master A (30 - 40 Thn)</h3>
            <?php else: ?>
             <h3>&nbsp;&nbsp;Men Master B (41 Thn Keatas)</h3>  
         <?php endif ?>   
     </div>
 </div>
 <!-- /. ROW  -->
 <hr />
 <div class="panel-body" style="margin-top: 10px">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="<?php echo $i ?>">
            <thead>
                <tr>
                    <th style="text-align:center">No</th>
                    <th>No Peserta</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Klub</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0; foreach ($total_rb->get() as $key): ?>
                <?php if ($i == '1'): ?>
                    <?php if ($key->kategori == 'Men Youth'): ?>
                        <tr>
                            <td style="text-align:center"><?php echo ++$no ?></td>
                            <td><?php echo $key->no_peserta ?></td>
                            <td><?php echo ucwords(strtolower($key->nama)) ?></td>
                            <td><?php echo $key->alamat ?></td>
                            <td><?php echo $key->klub ?></td>
                        </tr>
                    <?php endif ?>
                <?php elseif ($i == '2'): ?>  
                    <?php if ($key->kategori == 'Men Junior'): ?>
                        <tr>
                            <td style="text-align:center"><?php echo ++$no ?></td>
                            <td><?php echo $key->no_peserta ?></td>
                            <td><?php echo ucwords(strtolower($key->nama)) ?></td>
                            <td><?php echo $key->alamat ?></td>
                            <td><?php echo $key->klub ?></td>
                        </tr>
                    <?php endif ?>
                <?php elseif ($i == '3'): ?>  
                    <?php if ($key->kategori == 'Men Elite'): ?>
                        <tr>
                            <td style="text-align:center"><?php echo ++$no ?></td>
                            <td><?php echo $key->no_peserta ?></td>
                            <td><?php echo ucwords(strtolower($key->nama)) ?></td>
                            <td><?php echo $key->alamat ?></td>
                            <td><?php echo $key->klub ?></td>
                        </tr>
                    <?php endif ?>
                <?php elseif ($i == '4'): ?>  
                    <?php if ($key->kategori == 'Women Open'): ?>
                        <tr>
                            <td style="text-align:center"><?php echo ++$no ?></td>
                            <td><?php echo $key->no_peserta ?></td>
                            <td><?php echo ucwords(strtolower($key->nama)) ?></td>
                            <td><?php echo $key->alamat ?></td>
                            <td><?php echo $key->klub ?></td>
                        </tr>
                    <?php endif ?>
                <?php elseif ($i == '5'): ?>  
                    <?php if ($key->kategori == 'Men Master A'): ?>
                        <tr>
                            <td style="text-align:center"><?php echo ++$no ?></td>
                            <td><?php echo $key->no_peserta ?></td>
                            <td><?php echo ucwords(strtolower($key->nama)) ?></td>
                            <td><?php echo $key->alamat ?></td>
                            <td><?php echo $key->klub ?></td>
                        </tr>
                    <?php endif ?>
                <?php else: ?>  
                    <?php if ($key->kategori == 'Men Master B'): ?>
                        <tr>
                            <td style="text-align:center"><?php echo ++$no ?></td>
                            <td><?php echo $key->no_peserta ?></td>
                            <td><?php echo ucwords(strtolower($key->nama)) ?></td>
                            <td><?php echo $key->alamat ?></td>
                            <td><?php echo $key->klub ?></td>
                        </tr>
                    <?php endif ?>
                <?php endif ?>
            <?php endforeach ?>
        </tbody>
    </table>
</div>      
</div>
<br><br><br><br>
<?php endfor ?>
@endsection