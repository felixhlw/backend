<!-- layout1 (橫幅寬版) begin -->
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

                <div class="col-12 col-md-5 p-0 wishow"  onclick="fp('#cover1','#cvr1','<a href=<?=(!empty($r['link']))?$r['link']:'#';?> target=_blank><img src=./img/<?=$r['file'];?> class=wishow align-self-center></a>')" >

              <?php
              } 
              ?>  
                  <img src="./img/<?=$r['file'];?>" class="w-100 h-100 object-fit"><!-- </a> -->
              </div>
              <!-- 文字區 -->
              <div class="col-12 col-md-7 mt-3 text-white align-self-center">
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
          
          <!-- layout1 (橫幅寬版) end -->