<?=$this->extend("layout/sablona");?>
<?=$this->section("content");?>
<div class="container text-center">
<h1>Info o státu <?= $stat->name?></h1>
<p><?= $stat->short_name?></p>

<?php
$imgFlag = array(
    "src" => "obrazky/vlajky/Flag".$stat->short_name.".png",
    "alt" => "Vlajka ".$stat->name,
    "class" => "img-fluid",
    "style" => "width:60%; height:auto;"
);
$imgMap = array(
    "src" => "obrazky/mapy/Map".$stat->short_name.".png",
    "alt" => "Mapa ".$stat->name,
    "class" => "img-fluid",
    "style" => "width:60%; height:auto;"
);

echo img($imgFlag);
echo img($imgMap);
?>
</div>
<?=$this->endSection();?>
