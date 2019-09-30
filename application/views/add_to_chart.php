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
        <tbody id="detail_cart">
            
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

        //Destrpoy Cart
        $(document).on('click','.destroy_cart',function(){
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