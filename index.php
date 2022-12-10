<!doctype html>
<html lang="en">
<head>

    <title>Online Market Place</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <?php require "head.php"?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>




<?php require "nav/nav_home_selector.php"; ?>




<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<div>
    <div id="hero">
        <video playsinline autoplay muted loop poster="placeholder.jpg" id="bgvideo" width="x" height="y">
            <source src="./static/videos/hero.mp4" type="video/mp4">
        </video>
    </div>
</div>


<i class="fa-solid fa-watch"></i>

<div class="container" style="margin-top: 10%">
    <div class="row">
        <div class="col-3">
            <div id="animate1" data-aos="fade-up" data-aos-once="true" data-aos-delay="500" data-aos-easing="ease-in">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top center" src="./static/images/logo1.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Burger Shack</h5>
                        <p class="card-text">BurgerShack is a one stop shop for all things related to food, visit us to see the exclusive menu</p>
                        <a href="http://chiruhas.com/BurgerShack-CMPE-272/" class="btn btn-primary"> Visit </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div id="animate1" data-aos="fade-up" data-aos-once="true" data-aos-delay="1000" data-aos-easing="ease-in">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top center" src="./static/images/logo2.png" alt="Card image cap" >
                    <div class="card-body">
                        <h5 class="card-title">Watches</h5>
                        <p class="card-text">The Wattches website helps you shop your favourite brand with reasonable prices that suits you perfectly</p>
                        <a href="https://chpsai.me/" class="btn btn-primary">Visit</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div id="animate1" data-aos="fade-up" data-aos-once="true" data-aos-delay="1500" data-aos-easing="ease-in">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top center" src="./static/images/logo3.png" alt="Card image cap" >
                    <div class="card-body">
                        <h5 class="card-title">IphoneStore</h5>
                        <p class="card-text">Shop the latest Apple iPhones for sale today. Explore pricing and features for all models, including the latest iPhone 14 series</p>
                        <a href="http://myhvdomain.ninja/iphonestore/" class="btn btn-primary">Visit</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-3">
            <div id="animate1" data-aos="fade-up" data-aos-once="true" data-aos-delay="2000" data-aos-easing="ease-in">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top center" src="./static/images/logo4.png" alt="Card image cap" >
                    <div class="card-body">
                        <h5 class="card-title">GreenLeaf Elektronics</h5>
                        <p class="card-text">GreenLeaf Elektronics is an ecommerce platform which aims at selling refurbished electronics at cheaper prices.</p>
                        <a href="https://adeshlandge.com/" class="btn btn-primary">Visit</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>






</body>
</html>