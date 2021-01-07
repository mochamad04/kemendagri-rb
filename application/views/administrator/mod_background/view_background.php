<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Background Website </h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/background',$attributes); 
                error_reporting(0);
                if ($rows['gambar']=='red'){
                  $red = 'checked';
                }elseif ($rows['gambar']=='green'){
                  $green = 'checked';
                }elseif ($rows['gambar']=='blue'){
                  $blue = 'checked';
                }elseif ($rows['gambar']=='orange'){
                  $orange = 'checked';
                }elseif ($rows['gambar']=='purple'){
                  $purple = 'checked';
                }elseif ($rows['gambar']=='pink'){
                  $pink = 'checked';
                }elseif ($rows['gambar']=='toska'){
                  $toska = 'checked';
                }elseif ($rows['gambar']=='yellow'){
                  $yellow = 'checked';
                }
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                      <tr bgcolor=red><td><input name='a' value='red' type='radio' $red><b style='color:#fff'> Red </b> </td></tr>
                      <tr bgcolor=green><td><input name='a' value='green' type='radio' $green><b style='color:#fff'> Green</b> </td></tr>
                      <tr bgcolor=blue><td><input name='a' value='blue' type='radio' $blue><b style='color:#fff'> Blue</b> </td></tr>
                      <tr bgcolor=#fd7e14><td><input name='a' value='orange' type='radio' $orange><b style='color:#fff'> Orange</b> </td></tr>
                      <tr bgcolor=#a4028f><td><input name='a' value='purple' type='radio' $purple><b style='color:#fff'> Purple</b> </td></tr>
                      <tr bgcolor=#fe3e82><td><input name='a' value='pink' type='radio' $pink><b style='color:#fff'> Pink</b> </td></tr>
                      <tr bgcolor=#02967c><td><input name='a' value='toska' type='radio' $toska><b style='color:#fff'> Toska</b> </td></tr>
                      <tr bgcolor=#f1c30f><td><input name='a' value='yellow' type='radio' $yellow><b style='color:#fff'> Yellow</b> </td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='".base_url().$this->uri->segment(1)."/background'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();
