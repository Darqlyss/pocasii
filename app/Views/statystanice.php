<?=$this->extend("layout/sablona");?>
<?=$this->section("content");?>
<div class= "container">


  <?php  foreach($statystanice as $row){
      ?>
        <div class="card col-lg-4">
        <div class="card-body">
            <?php
            $data = [
                "src" => base_url("obrazky/vlajky/Flag".$stat->short_name.".png"),
                "alt" => "vlajka",
                "class" => "img-fluid"
            ];
            echo img($data)
            ?>
            </div>
        </div>
            <?php
  }
?>

<?= $pager->links(); ?>
</div>
</div>

<?=$this->endSection();?>