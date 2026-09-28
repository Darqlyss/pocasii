<?=$this->extend("layout/sablona");?>
<?=$this->section("content");?>
<div class= "container">
    <h1>Přehled meteorologických stanic ve spolkové zemi 

  <?php  foreach($bundesland as $row){
    echo $row->name;
  }
  ?>
    </h1>
    <div class="row">
<?php
    foreach($station as $row){
      ?>
  <div class="card col-lg-4">
  <div class="card-body">  <?=  anchor('mereni/'.$row->S_ID, $row->place)." ".$row->geo_latitude. "° ".$row->geo_longtitude."° ".$row->height."m"?></div> 
  </div>
  <?php
      }
  ?>
</div>
<?=$this->endSection();?>