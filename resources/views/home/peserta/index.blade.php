@extends('../template')
@section('body')

<section class="module bg-dark-30 about-page-header" data-background="{{ asset('')}}asset/assets/images/rumpiang.jpg">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <h1 class="module-title font-alt mb-0">Tour de Barito Kuala 2023</h1>
      </div>
  </div>
</div>
</section>
<br><br><br><br>
<div class="row">
    <div class="col-md-12">
        <center>
            <h3>Total Peserta:</h3>
            <h3><?= $total ?></h3>
            <br><br><br><br><br><br>
        </center>  
 </div>
</div>

@endsection