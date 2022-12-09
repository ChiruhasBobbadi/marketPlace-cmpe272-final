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
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div id="animate1" data-aos="fade-up" data-aos-once="true" data-aos-delay="1000" data-aos-easing="ease-in">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top center" src="./static/images/logo2.png" alt="Card image cap" >
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div id="animate1" data-aos="fade-up" data-aos-once="true" data-aos-delay="1500" data-aos-easing="ease-in">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top center" src="./static/images/logo3.png" alt="Card image cap" >
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-3">
            <div id="animate1" data-aos="fade-up" data-aos-once="true" data-aos-delay="2000" data-aos-easing="ease-in">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>






</body>
</html>