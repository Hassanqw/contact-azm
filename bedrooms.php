<?php 
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
        <!-- Card 1 -->
        <div class="col-md-4 col-sm-6">
            <div class="decor-card">
                <img src="https://tse1.explicit.bing.net/th/id/OIP.IlFQW0p7G1TbsaCt5Q2pAwHaFr?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Luxury Sofa">
                <div class="p-3">
                    <h5 class="decor-title">Luxury Sofa</h5>
                    <p class="mb-2">Elegant black & gold sofa for modern interiors.</p>
                    <p class="price mb-3">$450</p>
                    <button class="btn btn-decor w-100">Add to Cart</button>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-4 col-sm-6">
            <div class="decor-card">
                <img src="https://tse1.explicit.bing.net/th/id/OIP.IlFQW0p7G1TbsaCt5Q2pAwHaFr?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Designer Chair">
                <div class="p-3">
                    <h5 class="decor-title">Designer Chair</h5>
                    <p class="mb-2">Comfort meets style in our premium chair.</p>
                    <p class="price mb-3">$120</p>
                    <button class="btn btn-decor w-100">Add to Cart</button>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-4 col-sm-6">
            <div class="decor-card">
                <img src="https://tse1.explicit.bing.net/th/id/OIP.IlFQW0p7G1TbsaCt5Q2pAwHaFr?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Modern Table">
                <div class="p-3">
                    <h5 class="decor-title">Modern Table</h5>
                    <p class="mb-2">Minimalist table with golden accents.</p>
                    <p class="price mb-3">$300</p>
                    <button class="btn btn-decor w-100">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
</div></div>
<?php 
include('components/footer.php');
?>