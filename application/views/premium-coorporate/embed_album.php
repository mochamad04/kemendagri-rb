<?php 
    $album = $this->model_utama->view_where_ordering_limit('gallery',array('id_album > 0'),'id_album','RANDOM',0,30);
    $result = $album->result_array();
    $dibagi = array_chunk($result, ceil(count($result)/ 2));
?>
  <div class="container marketing" style="max-width: 80% !important;">
    
    <div style="text-align: center; overflow: auto; white-space: nowrap; margin-top: 20px;">
      <?php foreach($dibagi as $data):?>
        <div class="row" style="margin-left: 10px; margin-bottom: 30px; display: block;">
          <?php foreach($data as $row):?>
          <div style="display:inline-block; margin-right:30px;">
              <a href="<?=$row[url];?>" style="color: white;" target="_blank">
                <img src="<?=base_url()."asset/img_galeri/".$row[gbr_gallery];?>" width="60px" class="align-self-start">
              </a>
          </div>
          <?php endforeach;?>
        </div>
      <?php endforeach;?>
    </div>