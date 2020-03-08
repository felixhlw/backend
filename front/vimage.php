<!-- layout1 (直幅窄版) begin -->
<!-- <div class="row video fadeInUp wow px-0 my-2 mx-0" style="padding:0px 1px;border-radius:8px;background:rgb(170, 170, 170);overflow:hidden"> -->
<div class="row video px-0 my-2 mx-0" style="padding:0px 1px;border-radius:8px;background:rgb(170, 170, 170);overflow:hidden">
              <!-- 圖片區 -->   
              
            <?php
              if($r['type']=='video' && !empty($r['embed'])){
              ?>  
                <div class="col-12 col-md-5  p-0 vshow"  onclick="fp('#cover','#cvr','<?=$r['embed'];?>')" >
                
              <?php
              }else{
              ?>  
                <div class="col-12 col-md-2 p-0"  onclick="fp('#cover2','#cvr2','<img src=./img/<?=$r['file'];?> class=vishow align-self-center>')" >

              <?php
              } 
              ?>  
                  <img src="./img/<?=$r['file'];?>" class="w-100 h-100 p-0 m-0 object-fit"><!-- </a> -->
              </div>
              <!-- 文字區 -->
              <div class="col-12 col-md-10  mt-3  text-white align-self-center">
                  <!-- 標題 -->
                  <h6> <?=$r['title'];?> </h6>
                  <!-- 內文 -->
                  <p style="font-size: 14px">
                    <?=$r['text'];?>
                  </p>
                  <!-- 連結 -->
                  <p>
                    <a href="<?=$r['link'];?>" target="_blank"><i class="fas" style="color: rgb(255, 255, 255);"></i> 相關網站連結</a> 
                  </p>
              </div>
          </div>   
         
          <!-- layout1 (直幅窄版) end -->