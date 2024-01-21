 <?php
include_once "header.php";

include_once "../functions/functions.php";

$binatang = query("SELECT * FROM binatang JOIN kategori ON binatang.id_kategori = kategori.id_kategori");



?>
        <div class="w-100 vh-100" id="home">
        <div id="carouselExample" class="carousel slide carousel-fade h-100">
            <div class="carousel-inner h-100">
                <div class="carousel-item h-100 active">
                    <img src="../img/fox.jpg" class="d-block w-100 h-70 object-fit-cover" alt="Gambar 1">
                </div>
                <div class="carousel-item h-100">
                    <img src="../img/dog.jpg" class="d-block w-100 h-100 object-fit-cover" alt="Gambar 2">
                </div>
                <div class="carousel-item h-100">
                    <img src="../img/cow.jpg" class="d-block w-100 h-100 object-fit-cover" alt="Gambar 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


            <div class="col-12 p-5">
                    <h1 class="display-4"> Home</h1>
                    <p align="justify">Welcome to our exciting world of wildlife exploration! Our website is dedicated to empowering kids with the knowledge and joy of identifying various animal species. With an interactive and engaging approach, we provide a comprehensive platform for children to discover the rich diversity of the animal kingdom. From the depths of the oceans to the heights of the skies, our user-friendly interface guides young minds in recognizing and learning about every type of creature imaginable. Whether furry, feathery, scaly, or slimy, our educational resources and interactive tools make the process of animal identification a fun and captivating adventure. Join us on this educational journey, where curiosity meets discovery, fostering a lifelong love and appreciation for the incredible world of animals.</p>
                </div>
              
<?php
include_once "footer.php"
?>

<script type="text/javascript">
  $('.nav-link').removeClass('active');
  $('.menu-home').addClass('active');
</script>
