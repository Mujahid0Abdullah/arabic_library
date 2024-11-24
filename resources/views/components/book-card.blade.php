<div class="product-img">
    <a href="product-details.html">
        <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
        	<span class="price-dec">30% Off</span>
    </a>
    <div class="button-head">
        <div class="product-action">
            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i
                    class=" ti-eye"></i><span>Quick Shop</span></a>
            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
        </div>
        <form id="kt_account_profile_details_form" class="form" action="{{ route('cart.update' , $item->id) }}" method="post">
                @csrf
                @method('PUT')
        <div class="product-action-2">
        <input type="hidden" name="book_id" value="{{ $item->id }}">
        <input type="hidden" name="quantity" value="1"> <!-- Default quantity -->
<button type="submit" class="btn btn-primary" title="Add to Cart">
    <i class="ti-bag"></i>
    <span>add to cart</span>
    </button>
        </div>
        </form>
    </div>
</div>
<div class="product-content">
      <h3><a href="product-details.html">{{ $item->name }}</a></h3>
           <h3><a href="product-details.html">Gategory: <span style="color: rgb(253, 156, 0)">{{ $item->category->name }}</span></a></h3>
     <h3><a href="product-details.html">Author: <span style="color: blueviolet">{{ $item->author }}</span></a></h3>

    <div class="product-price">
        <span>${{ $item->price  }}</span>
    </div>
</div>
