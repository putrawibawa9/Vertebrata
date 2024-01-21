<?php
include_once "header.php";

include_once "../functions/functions.php";

$binatang = query("SELECT * FROM binatang JOIN kategori ON binatang.id_kategori = kategori.id_kategori");


?>
         <div class="row p p-5">
                <div class="col-12">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="../img/badminton.jpg" width="100px" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="../img/dog.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="../img/cat.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>

                    </div>
            </div>


            <div class="row">
                <div class="col-12 p-5">
                <h1 class="display-4"> Home</h1>
                <?php foreach($binatang as $row):?>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="../img/<?= $row['gambar']?>" alt="" class="img-fluid" > 
                            <h5 class="m-0 text-center mt-2"> <?= $row['nama_binatang']?></h5>
                            <button class="btn btn-primary btn-sm mt-2 detail" data-nama="<?= $row['nama_binatang']?>" data-keterangan="<?= $row['keterangan_binatang']?>" data-img="<?= $row['gambar']?>" data-kategori="<?=$row['nama_kategori']?>"> Detail</button>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>
                </div>
                </div>
                </div>

                <!-- Modal -->
<div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="modalDetailLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDetailLabel">Detail Binatang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img id="modal-img" class="img-fluid">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


              
<?php
include_once "footer.php"
?>

<script type="text/javascript">
  $('.nav-link').removeClass('active');
  $('.menu-binatang').addClass('active');

  $(document).ready(function() {
    $('.detail').click(function(){
        $('#modal-img').attr('src','../img/' + $(this).data('img'));
        $('#modalDetail').modal('show');
    });
  });
</script>
