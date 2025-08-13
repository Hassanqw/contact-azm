<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from html.designingmedia.com/merraki/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Aug 2025 08:14:16 GMT -->
<head>
    <title>Home | Merraki Interiors</title>
    <!-- /SEO Ultimate -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../ms-icon-144x144.php">
    <meta name="theme-color" content="#ffffff">
    <!-- Latest compiled and minified CSS -->
    <link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/js/bootstrap.min.js">
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- StyleSheet link CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="assets/css/custom-style.css" rel="stylesheet" type="text/css">
    <link href="assets/css/special-classes.css" rel="stylesheet" type="text/css">
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <link href="../../unpkg.com/aos%402.3.1/dist/aos.css" rel="stylesheet">
    
</head>

<body>
<!-- Header  -->
<div class="banner_outer">
    <figure class="light-image mb-0">
    <img src="assets/images/top-lightimage.png" alt="" class="img-fluid">
</figure>

    <header class="header">
        <div class="main-header">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.php"><figure class="mb-0 banner-logo"><img src="assets/images/logo.png" alt="" class="img-fluid"></figure></a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" 
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php 
$current_page = basename($_SERVER['PHP_SELF']); 
?>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                           <li class="nav-item <?php if($current_page == 'home.php'){echo 'active';} ?>">
    <a class="nav-link" href="home.php">Home</a>
</li>
<li class="nav-item <?php if($current_page == 'about.php'){echo 'active';} ?>">
    <a class="nav-link" href="about.php">About</a>
</li>
<li class="nav-item <?php if($current_page == 'service.php'){echo 'active';} ?>">
    <a class="nav-link" href="service.php">Services</a>
</li>
                          <li class="nav-space nav-item dropdown 
    <?php if(in_array($current_page, ['bedrooms.php', 'livingroom.php', 'kitchen.php'])) { 
        echo 'active'; 
    } ?>">
                                <a class="nav-link dropdown-toggle dropdown-color navbar-text-color" href="#" id="navbarDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"> Shop </a>
                                <div class="dropdown-menu drop-down-content">
                                    <ul class="list-unstyled drop-down-pages">
                                        <li class="nav-item"><a class="dropdown-item nav-link" href="#">Living Rooms </a></li>
                                        <li class="nav-item"><a class="dropdown-item nav-link" href="bedrooms.php">Bedrooms</a></li>
                                        <li class="nav-item"><a class="dropdown-item nav-link" href="#">Kitchens </a></li>
                                        <li class="nav-item"><a class="dropdown-item nav-link" href="#">Bathrooms </a></li>
                                        <li class="nav-item"><a class="dropdown-item nav-link" href="#">Outdoor Spaces </a></li>
                                    </ul>
                                </div>
                            </li>


                            <li class="nav-space nav-item dropdown">
                                <a class="nav-link dropdown-toggle dropdown-color navbar-text-color" href="#" id="navbarDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"> Pages </a>
                                <div class="dropdown-menu drop-down-content">
                                    <ul class="list-unstyled drop-down-pages">
                                        <li class="nav-item"><a class="dropdown-item nav-link" href="team.php">Our Team</a></li>
                                        <li class="nav-item"><a class="dropdown-item nav-link" href="faq.php">Faq's</a></li>
                                        <li class="nav-item"><a class="dropdown-item nav-link" href="service-detail.php">Service Detail</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-space nav-item dropdown">
                                <a class="nav-link dropdown-toggle dropdown-color navbar-text-color" href="#" id="navbarDropdownMenu2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"> Blogs </a>
                                <div class="dropdown-menu drop-down-content">
                                    <ul class="list-unstyled drop-down-pages">
                                        <li class="nav-item"><a class="dropdown-item nav-link" href="blog.php">Blog</a></li>
                                        <li class="nav-item"><a class="dropdown-item nav-link" href="single-blog.php">Single Blog</a></li>
                                        <li class="nav-item"><a class="dropdown-item nav-link" href="infinite-scroll.php">Infinite Scroll</a></li>
                                        <li class="nav-item"><a class="dropdown-item nav-link" href="load-more.php">Load More</a></li>
                                        <li class="nav-item"><a class="dropdown-item nav-link" href="one-column.php">One Column</a></li>
                                        <li class="nav-item"><a class="dropdown-item nav-link" href="two-column.php">Two Column</a></li>
                                        <li class="nav-item"><a class="dropdown-item nav-link" href="three-column.php">Three Column</a></li>
                                        <li class="nav-item"><a class="dropdown-item nav-link" href="three-colum-sidbar.php">Three Column Sidebar</a></li>
                                        <li class="nav-item"><a class="dropdown-item nav-link" href="four-column.php">Four Column</a></li>
                                        <li class="nav-item"><a class="dropdown-item nav-link" href="six-colum-full-wide.php">Six Column</a></li>
                                    </ul>
                                </div>
                            </li>
                        <!-- Contact Us Button -->
<li class="nav-space nav-item">
    <div class="contact-button">
        <!-- <a class="contact_us text-decoration-none" href="contact.php">Contact Us</a>
        <a class="image-button text-decoration-none" href="contact.php">
            <figure class="arrow mb-0">
                <img src="assets/images/arrow.png" alt="" class="img-fluid">
            </figure> -->
        </a> 
    </div>
</li>


<li class="nav-item d-flex align-items-center ml-3 no-hover-line">
    <a class="nav-link p-0 text-white" href="login.php">
        <i class="fas fa-sign-in-alt mr-1"></i> Login
    </a>
</li>
<li class="nav-item d-flex align-items-center ml-3 no-hover-line">
    <a class="nav-link p-0 text-white" href="signup.php">
        <i class="fas fa-user-plus mr-1"></i> Sign Up
    </a>
</li>
<li class="nav-item d-flex align-items-center ml-3 no-hover-line">
    <a class="nav-link p-0 text-white" href="view-cart.php">
        <i class="fas fa-shopping-cart mr-1"></i> Add to Cart
    </a>
</li>


<!-- Cart Icon -->






<style>
.no-hover-line a {
    text-decoration: none !important;
    border-bottom: none !important;
}

.no-hover-line a:hover {
    text-decoration: none !important;
    border-bottom: none !important;
    color: #ffffff !important; /* hover pe bhi white rahe */
}

 

    /* Sidebar */
    #cart-sidebar {
        position: fixed;
        top: 0;
        right: -350px;
        width: 350px;
        height: 100%;
        background-color: #1e1e1e;
        color: white;
        box-shadow: -2px 0 5px rgba(0, 0, 0, 0.5);
        transition: right 0.3s ease;
        z-index: 2000;
        display: flex;
        flex-direction: column;
    }

    .cart-header {
        padding: 15px;
        background: #292929;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #444;
    }

    .close-btn {
        background: none;
        border: none;
        color: white;
        font-size: 24px;
        cursor: pointer;
    }

    /* Items */
    .cart-item {
        display: flex;
        align-items: center;
        padding: 10px;
        border-bottom: 1px solid #333;
    }

    .cart-item img {
        border-radius: 5px;
        margin-right: 10px;
    }

    .item-info {
        flex: 1;
    }

    .item-info h6 {
        margin: 0;
        font-size: 14px;
        font-weight: 600;
    }

    .item-info small {
        color: #aaa;
    }

    .quantity {
        display: flex;
        align-items: center;
        margin-top: 5px;
    }

    .quantity button {
        background: #444;
        color: white;
        border: none;
        padding: 3px 8px;
        cursor: pointer;
    }

    .quantity input {
        width: 40px;
        text-align: center;
        border: none;
        margin: 0 5px;
    }

    .item-remove {
        color: #ff4d4d;
        cursor: pointer;
        font-size: 20px;
    }

    /* Footer */
    .cart-footer {
        padding: 15px;
        border-top: 1px solid #444;
        background: #292929;
    }

    .total {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
    }

    .checkout-btn {
        width: 100%;
        background: #ff6600;
        border: none;
        padding: 10px;
        font-size: 16px;
        color: white;
        cursor: pointer;
        border-radius: 4px;
    }

    /* Overlay */
    #cart-overlay {
        display: none;
        position: fixed;
        top: 0; 
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        z-index: 1999;
    }

    /* Active */
    #cart-sidebar.active {
        right: 0;
    }
    #cart-overlay.active {
        display: block;
    }
</style>

<script>
    const openCartBtn = document.getElementById("open-cart");
    const closeCartBtn = document.getElementById("close-cart");
    const cartSidebar = document.getElementById("cart-sidebar");
    const cartOverlay = document.getElementById("cart-overlay");

    openCartBtn.addEventListener("click", () => {
        cartSidebar.classList.add("active");
        cartOverlay.classList.add("active");
    });

    closeCartBtn.addEventListener("click", () => {
        cartSidebar.classList.remove("active");
        cartOverlay.classList.remove("active");
    });

    cartOverlay.addEventListener("click", () => {
        cartSidebar.classList.remove("active");
        cartOverlay.classList.remove("active");
    });

   
document.addEventListener("DOMContentLoaded", function () {
    const cartItems = document.querySelectorAll(".cart-item");

    cartItems.forEach(item => {
        const minusBtn = item.querySelector(".quantity button:first-child");
        const plusBtn = item.querySelector(".quantity button:last-child");
        const qtyInput = item.querySelector(".quantity input");

        minusBtn.addEventListener("click", () => {
            let currentValue = parseInt(qtyInput.value);
            if (currentValue > 1) {
                qtyInput.value = currentValue - 1;
                updateTotal();
            }
        });

        plusBtn.addEventListener("click", () => {
            let currentValue = parseInt(qtyInput.value);
            qtyInput.value = currentValue + 1;
            updateTotal();
        });
    });

    function updateTotal() {
        let total = 0;
        document.querySelectorAll(".cart-item").forEach(item => {
            let price = parseFloat(item.querySelector("small").innerText.replace("$", ""));
            let qty = parseInt(item.querySelector(".quantity input").value);
            total += price * qty;
        });
        document.querySelector(".total span").innerText = `$${total.toFixed(2)}`;
    }
});


</script>

<!-- Add this in your head tag -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


                            
                            
                        </ul>
                        
                    </div>
                    
                </nav>
            </div>
        </div>
    </header>