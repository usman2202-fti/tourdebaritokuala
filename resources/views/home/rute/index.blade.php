@extends('../template')
@section('body')

<section class="module bg-dark-30 about-page-header" data-background="{{ asset('') }}asset/assets/images/rumpiang.jpg">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h1 class="module-title font-alt mb-0">Rute <?php echo $data == 'rb' ? "Road Bike" : "Fun Bike"; ?></h1>
      </div>
    </div>
  </div>
</section>
<br><br><br><br>
<div class="row">
  <div class="module-subtitle font-serif">
  	<?php if ($data == 'rb'): ?>
  		<img src="{{ asset('') }}asset/assets/images/rute_rb2023.jpeg" alt="Tour de Barito Kuala 2023">
  	<?php else: ?>
  		<img src="{{ asset('') }}asset/assets/images/rute_mtb2023.jpg" alt="Tour de Barito Kuala 2023">
  	<?php endif ?>
  </div>
</div>
@endsection  