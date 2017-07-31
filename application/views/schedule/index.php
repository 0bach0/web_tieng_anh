<!-- Main Content -->
<div class="main-content">
   <section class="inner-header divider parallax layer-overlay overlay-dark-5" 
      data-bg-img="<?php echo asset_url()?>images/banner/banner-schedule.jpg" style="background-image: <?php echo asset_url()?>images/banner/banner-schedule.jpg;">
      <div class="container pt-70 pb-20">
         <!-- Section Content -->
         <div class="section-content">
            <div class="row">
               <div class="col-md-12">
                  <h2 class="title text-white">
                     Lịch khai giảng
                  </h2>
                  <ol class="breadcrumb text-left text-black mt-10">
                     <li><a href="/">Trang chủ</a></li>
                     <li class="active text-gray-silver">Lịch khai giảng</li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section id="Schedule">
      <div class="container pt-20 pb-20">
         <div class="row">
            <div class="col-md-3">
               <div class="vertical-tab custom">
                  <ul class="nav nav-tabs">
                    <?php 
                      $count = 0;
                      foreach($this->data['schedule_list'] as $schedule)
                      {
                        echo '<li class="';
                        if($count==0) echo 'active';
                        echo '"><a href="#'.$schedule->id.'" data-toggle="tab">'.$schedule->name.'</a> </li>';
                        $count++;
                      }
                    ?>
                  </ul>
               </div>
            </div>
            <div class="col-md-9">
               <div class="tab-content custom">

              <?php
                $show =0;
                foreach($this->data['schedule_list'] as $schedule_list)
                {
                  if($show ==0 )
                  echo '<div class="tab-pane fade in active" id="'.$schedule_list->id.'">';
                  else echo '<div class="tab-pane fade" id="'.$schedule_list->id.'">';
                  $show++;
                  echo '<table class="table table-bordered"> <thead> <th>Mã lớp</th><th>Lịch học</th><th>Khai giảng</th><th>Học phí</th></thead><tbody>';
                  $count = 0;
                  foreach($this->data['schedule_full'] as $schedule){
                    if ($schedule->curriculum_id == $schedule_list->id){
                      if($count % 2 == 1) {echo '<tr class="info">';}
                      else echo '<tr class="">';
                      $count++;
                      // echo '<td>'.$schedule_list->name.'</td>';
                      echo '<td>'.$schedule->class_name.'</td>';
                      echo '<td>'.$schedule->schedule.'</td>';
                      echo '<td><b class="theme-text-color-red">'.$schedule->start_day.'</b></td>';
                      echo '<td>'.$schedule->fee.'</td>';
                      echo '</tr>';
                    }}
                  echo '</tbody></table></div>';
                    
                } 
              ?>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<!-- End Main Content -->