<form method="POST" action="{{ url('/order-product') }}" accept-charset="UTF-8" class="form-horizontal text-center" enctype="multipart/form-data">
    {{ csrf_field() }}           
        
    <input class="d-none" name="order_id" type="number" id="order_id" value="" >                                
    <input class="d-none" name="product_id" type="number" id="product_id" value="{{ $product->id }}" >                                
    <input class="d-none" name="user_id" type="number" id="user_id" value="" >                                
    <input class="" name="quantity" type="number" id="quantity" value="1" >                                
    <input class="d-none" name="price" type="number" id="price" value="{{ $product->price }}" >                                
    <input class="d-none" name="total" type="number" id="total" value="" >

    <button type="submit" class="btn btn-sm btn-warning" >
        <i class="fa fa-shopping-cart"></i> เพิ่มสินค้าลงตะกร้า
    </button>            
</form>
