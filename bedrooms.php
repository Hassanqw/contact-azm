<?php 
include('php/dbcon.php');
include('components/header.php');
?>
  <style>
       body {
            background-color: #0d0d0d;
            color: #fff;
            font-family: Arial, sans-serif;
        }
        .decor-card {
            background-color: #1a1a1a;
            border: 1px solid #FFD700;
            border-radius: 8px;
            overflow: hidden;
        }
        .decor-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }
        .decor-title {
            color: #FFD700;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .btn-decor {
            background-color: #FFD700;
            color: #000;
            font-weight: 500;
            border-radius: 4px;
            padding: 6px 14px;
            font-size: 14px;
            border: none;
        }
        .btn-decor:hover {
            background-color: #e6c200;
            color: #000;
        }
        .price {
            color: #fff;
            font-weight: bold;
        }


        /* Default state for category buttons */
.filter-tope-group button {
    background: transparent;
    color: #fff;
    font-weight: 500;
    padding: 8px 16px;
    border: none;
    position: relative;
    transition: color 0.3s ease;
}

/* Hover effect same as navbar Home link */
.filter-tope-group button::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -4px;
    width: 0;
    height: 2px;
    background-color: #FFD700;
    transition: width 0.3s ease;
}

.filter-tope-group button:hover {
    color: #FFD700;
}

.filter-tope-group button:hover::after {
    width: 100%;
}

/* Active state like navbar's active link */
.filter-tope-group .how-active1 {
    color: #FFD700;
}

.filter-tope-group .how-active1::after {
    width: 100%;
}

    </style>

<div class="container py-5">
    <div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						All Products
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">
						Furniture 
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men">
						Lighting 
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".bag">
						Decor 
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".shoes">
						Rugs and Carpets 
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".watches">
						Wall Art 
					</button>
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".watches">
						Curtains and Blinds 
					</button>
				</div>
    <h3 class="text-center mb-4" style="color:#FFD700;">Our Décor Collection</h3>
    <div class="row g-3">
<!-- Card -->
	<?php
$query = $pdo->query("SELECT * FROM product");
$allproduct = $query->fetchAll(PDO::FETCH_ASSOC);

foreach($allproduct as $product){
?>
<div class="col-md-4 col-sm-6">
    <div class="decor-card" data-toggle="modal" data-target="#productModal">
        <img src="adminPanel/images/<?php echo $product["image"]?>" alt="Luxury Sofa">
        <div class="p-3">
            <h5 class="decor-title"><?php echo $product['productname']?></h5>
            <p class="mb-2"><?php echo $product['description']?></p>
            <p class="text-success mb-1" style="font-size: 0.85rem;">
                In Stock: <?php echo $product['quantity']?>
            </p>
            <p class="price mb-3">Rs <?php echo $product['price']?></p>

            <!-- Add to Cart Button with product_id in URL -->
     <a href="?product_id=<?php echo $product['product_id']; ?>" 
   class="btn btn-decor w-100">
   Add to Cart
</a>


        </div>
    </div>
</div>
<?php } ?>

    
<!-- Product Modal -->
 
<div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">
  <?php 
                                if(isset($_GET["product_id"])){
                                        $productId = $_GET["product_id"];
                                        $query = $pdo ->prepare("select * from product where product_id = :pId");
                                        $query->bindParam("pId", $productId);
                                        $query->execute();
                                        $allProduct = $query->fetchAll(PDO::FETCH_ASSOC);
                                        // print_r($allProduct);
                                        foreach($allProduct as $product){
                                        
                                ?>
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content" style="background-color: #1e1e1e; color: white; border-radius: 15px; overflow: hidden;">

      <!-- Header -->
      <div class="modal-header border-0" style="border-bottom: 2px solid #ffc107;">
        <h5 class="modal-title fw-bold text-warning">Luxury Sofa</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close" style="font-size: 1.5rem;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Body -->
      <div class="modal-body">
        <div class="row">

          <!-- Product Image -->
          <div class="col-md-6">
            <div class="overflow-hidden rounded shadow">
              <img src="adminPanel/images/<?php echo $product["image"]?>" 
                   class="img-fluid rounded zoom-effect" 
                   alt="Luxury Sofa">
            </div>
          </div>

          <!-- Product Details -->
          <div class="col-md-6">
            <p>Elegant black & gold sofa, crafted with premium materials for maximum comfort and style. Perfect for modern interiors.</p>
            <h4 class="mt-3 text-warning">Rs <span id="unit-price"><?php echo $product['price']?></span></h4>
            <p class="small text-success" style="opacity: 0.8; font-size: 0.8rem;">In Stock: 12</p>

            <!-- Quantity Selector -->
            <div class="d-flex align-items-center my-3">
              <button class="btn btn-outline-light btn-sm rounded-circle" id="qty-minus">-</button>
              <input type="text" id="qty" value="1" 
                     class="form-control text-center mx-2" 
                     style="width: 60px; border-radius: 8px;">
              <button class="btn btn-outline-light btn-sm rounded-circle" id="qty-plus">+</button>
            </div>

            <!-- Price Summary -->
            <div class="p-3 rounded" style="background: rgba(255,255,255,0.05); backdrop-filter: blur(6px);">
              <div class="d-flex justify-content-between">
                <span>Price:</span>
                <span>Rs <span id="price"><?php echo $product['price']?></span></span>
              </div>
              <div class="d-flex justify-content-between">
                <span>Shipping:</span>
                <span id="shipping">TBD</span>
              </div>
              <div class="d-flex justify-content-between">
                <span>Discount:</span>
                <span id="discount">-$0</span>
              </div>
              <div class="d-flex justify-content-between">
                <span>Tax:</span>
                <span id="tax">TBD</span>
              </div>
              <hr style="border-color: rgba(255,255,255,0.2);">
              <div class="d-flex justify-content-between fw-bold">
                <span>Total:</span>
                <span>Rs <span id="total"><?php echo $product['price']?></span></span>
              </div>
            </div>

            <!-- Add to Cart -->
            <button class="btn btn-warning btn-block mt-3 fw-bold glow-btn">Add to Cart</button>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <div class="modal-footer border-0">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="border-radius: 8px;">Close</button>
      </div>
    </div>
  </div>
</div>
    </div>
   <?php
     }
    }
    ?></div>
   
<!-- Styles -->
<style>
.zoom-effect {
  transition: transform 0.3s ease;
}
.zoom-effect:hover {
  transform: scale(1.05);
}
.glow-btn {
  transition: all 0.3s ease;
}
.glow-btn:hover {
  box-shadow: 0 0 15px rgba(255, 193, 7, 0.8);
}
</style>

<!-- Quantity Script -->
<script>

document.addEventListener('DOMContentLoaded', function() {
    // Check if URL contains product_id
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('product_id')) {
        // Bootstrap modal open karega
        $('#productModal').modal('show');
    }
});


let unitPrice = <?php echo $product['price']?>;

function updateTotal() {
  let qty = parseInt(document.getElementById("qty").value) || 1;
  let total = unitPrice * qty;
  document.getElementById("price").innerText = (unitPrice * qty).toFixed(2);
  document.getElementById("total").innerText = total.toFixed(2);
}

document.getElementById("qty-plus").addEventListener("click", function(){
  let qty = document.getElementById("qty");
  qty.value = parseInt(qty.value) + 1;
  updateTotal();
});

document.getElementById("qty-minus").addEventListener("click", function(){
  let qty = document.getElementById("qty");
  if(parseInt(qty.value) > 1) {
    qty.value = parseInt(qty.value) - 1;
    updateTotal();
  }
});

document.getElementById("qty").addEventListener("input", updateTotal);
</script>




<?php 
include('components/footer.php');
?>