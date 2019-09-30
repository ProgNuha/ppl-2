<div class="container-fluid">
    <div class="col-md-4">
    <h4>Shopping Cart</h4>
    <table class="table table-striped">
        <thead>
            <tr class="align-content-center">
                <th>Produk</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                <th>
                    <button type="button" class="destroy_cart btn btn-danger btn-xs">
                    <i class="fas fa-trash-alt"></i>
                    </button>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0; 
                foreach ($this->cart->contents() as $items) : 
                $no++;?>

            <tr>
                <td><?php echo $items['name']?></td>
                <td><?php echo number_format($items['price'])?></td>
                <td>
                    <div class="form-label-group">
                    <input type="number" class="form-control text-center" value="<?php echo $items['qty']?>">
                    </div>
                </td>
                <td><?php echo number_format($items['subtotal'])?></td>
                <td><button type="button" id="<?php $items['rowid']?>" class="delete_cart btn btn-danger btn-xs">
                <i class="fa fa-minus" aria-hidden="true"></i>
                </button></td>
            </tr>

            <?php endforeach; ?>

            <tr>
                <th colspan="3">Total</th>
                <th colspan="2">Rp <?php echo number_format($this->cart->total())?> </th>
            </tr>
        </tbody>
            
    </table>
    </div>
</div>


<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.4.1.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        // Load shopping cart
        $('#detail_cart').load("<?php echo base_url();?>index.php/cart/load_cart");

        //Delete Item Cart
        $(document).on('click','.delete_cart',function(){
            var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
            $.ajax({
                url : "<?php echo base_url();?>cart/delete_cart",
                method : "POST",
                data : {row_id : row_id},
                success :function(data){
                    $('#detail_cart').html(data);
                }
            });
        });

        //Destrpy Item Cart
        $(document).on('click','.destroy_cart',function(){
            var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
            $.ajax({
                url : "<?php echo base_url();?>cart/destroy_cart",
                method : "POST",
                success :function(data){
                    $('#detail_cart').html(data);
                }
            });
        });
    });
</script>