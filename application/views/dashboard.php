<div class="container-fluid">
  <div class="row text-center mt-3">
      <?php foreach ($goods as $good) : ?>
    <div class="col-3">
        <div class="card mt-4">
          <img src="<?php echo base_url().$good->filepath?>" class="card-img-top" alt="image" height="200" width="2x00">
          <div class="card-body">
            <h5 class="card-title">
              <span class="center">
                <?php echo $good->name?></h5>
              </span>
            
            
            <span class="badge badge-pill badge-success mb-3"> <?php echo $good->price?> </span><br>
            <a href="" class="btn btn-success">Detail</a>
            <a href="#" class="btn btn-primary">+
            <i class="fas fa-shopping-cart"></i>
            </a>
          </div>
        
        
        </div>


    </div>
      <?php endforeach; ?>
    

  </div>


</div>
