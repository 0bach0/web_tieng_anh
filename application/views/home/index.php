<!-- Main Content -->
<div class="main-content">
   <section id="home">
      <div class="container-fluid p-0">
         <!-- Slider Revolution Start -->
         <div class="rev_slider_wrapper">
            <div class="rev_slider" data-version="5.0">
               <ul>
                  <!-- SLIDE 1 -->
                  <li data-index="rs-0" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo asset_url();?>images/banner/banner-1" data-rotate="0" data-saveperformance="off" data-title="Slide 0" data-description="">
                     <!-- MAIN IMAGE -->
                     <img src="<?php echo asset_url();?>images/banner/banner-1"  alt=""  data-bgposition="center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                     <!-- LAYERS -->
                  </li>
                  <!-- SLIDE 1 -->
                  <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo asset_url();?>images/banner/banner-2" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
                     <!-- MAIN IMAGE -->
                     <img src="<?php echo asset_url();?>images/banner/banner-2"  alt=""  data-bgposition="center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                     <!-- LAYERS -->
                  </li>
                  <!-- SLIDE 1 -->
                  <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo asset_url();?>images/banner/banner-3" data-rotate="0" data-saveperformance="off" data-title="Slide 2" data-description="">
                     <!-- MAIN IMAGE -->
                     <img src="<?php echo asset_url();?>images/banner/banner-3"  alt=""  data-bgposition="center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                     <!-- LAYERS -->
                  </li>
               </ul>
            </div>
            <!-- end .rev_slider -->
         </div>
      </div>
   </section>
   <!-- Section: About -->
   <section class="">
      <div class="container">
         <div class="section-content">
            <div class="row">
               <div class="col-md-12">
                  <h6 class="letter-space-4 text-gray-darkgray text-uppercase mt-0 mb-0">Giới thiệu</h6>
                  <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom">TRUNG TÂM ÔN LUYỆN IETLS WRITING & SPEAKING THEO TỪNG MỤC TIÊU</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  <a class="btn btn-theme-colored btn-flat btn-lg mt-10 mb-sm-30" href="/gioi-thieu">Chi tiết →</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Section: COURSES -->
   <section class="bg-lighter">
      <div class="container pb-60">
         <div class="section-title mb-10">
            <div class="row">
               <div class="col-md-8">
                  <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">KHÓA <span class="text-theme-color-2 font-weight-400">HỌC</span></h2>
               </div>
            </div>
         </div>
         <div class="section-content">
            <div class="row">
               <div class="col-md-12">
                  <div class="owl-carousel-4col" data-dots="true">
                     
                     <?php 
                      foreach($this->data['curriculum-list'] as $curriculum){
                        echo '<div class="item">';
                        echo '  <div class="service-block bg-white">';
                        // echo '  <div class="thumb"> <img alt="featured project" src="'.'" class="img-fullwidth"> </div>';
                        echo '<div class="content text-left flip p-25 pt-0">';
                        echo '<h4 class="line-bottom mb-10">'.$curriculum->name.'</h4>';
                        echo '<div id="who">'.$curriculum->short_description.'</div>';
                        echo '<a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="khoa-hoc/'.$curriculum->slug.'">Chi tiết</a>';
                        echo '</div></div></div>';
                      }
                     
                     ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Divider: testimonials -->
<section class="divider parallax layer-overlay overlay-theme-colored-9" data-background-ratio="0.5" data-bg-img="<?php echo asset_url();?>images/banner/banner-review.jpg">
    <div class="container pb-50">
        <div class="section-title">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mt-0 mb-0 text-uppercase line-bottom text-white font-28">Cảm nhận<span
                                class="font-30 text-theme-color-2"> học viên</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mb-10">
                <div class="owl-carousel-2col boxed testimonial-box" data-dots="true">
                    <?php 

                    foreach($this->data['review_highlight'] as $review){
                      if($review->url!='')
                        echo '<a href="'.$review->url.'">';
                      echo '<div class="item">';
                      echo '    <div class="testimonial custom pt-10">';
                      echo '        <div class="thumb pull-left mb-0 mr-0 pr-20">';
                      echo '            <img alt="" src="'.asset_url().$review->image.'">';
                      echo '        </div>';
                      echo '        <div class="ml-100 ">';
                      echo '            <h4 class="text-white mt-0">'.$review->description.'</h4>';
                      echo '            <p class="author mt-20">- <span class="text-theme-color-2">'.$review->student_name.'</span>';
                      echo '                <small><em class="text-gray-lightgray">Học viên</em></small>';
                      echo '            </p>';
                      echo '        </div>';
                      echo '    </div>';
                      echo '</div>';
                      if($review->url!='') 
                        echo'</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
   <!-- Section: Why Choose Us -->
   <section id="event" class="">
      <div class="container pb-50">
         <div class="section-content">
            <div class="row">
               <div class="col-md-6">
                  <h3 class="text-uppercase line-bottom mt-0 line-height-1"><i class="fa fa-calendar mr-10"></i>Tin <span class="text-theme-color-2">Tức</span></h3>

                  <?php 
                    foreach($this->data['document'] as $document){
                      echo '<article class="post media-post clearfix pb-0 mb-10">';
                      echo '<a href="tin-tuc/'.$document->slug.'" class="post-thumb mr-20"><img alt="'.$document->title.'" src="'.asset_url().$document->image.'" style="max-width: 200px"></a>';
                      echo '<div class="post-right">';
                      echo '<h4 class="mt-0 mb-5"><a href="tin-tuc/'.$document->slug.'">'.$document->title.'</a></h4>';
                      echo '<ul class="list-inline font-12 mb-5">';
                      echo '<li class="pr-0"><i class="fa fa-calendar mr-5"></i>'.date( 'd/m/Y', strtotime( $document->time ) ).'</li>';
                      echo '</ul>';
                      echo '<p class="mb-0 font-13">'.$document->short_description.'</p>';
                      echo '<a class="text-theme-colored font-13" href="tin-tuc/'.$document->slug.'">Chi tiết →</a>';
                      echo '</div>  </article>';
                    }
                  ?>
                  
               </div>
               <div class="col-md-6">
                  <h3 class="line-bottom mt-0 line-height-1">Tại sao <span class="text-theme-color-2">chọn Luyện Ielts Writing & Speaking theo từng mục tiêu</span></h3>
                  <p class="mb-10">Luyện Ielts Writing & Speaking theo từng mục tiêu là cơ sở đào tạo IELTS chuyên nghiệp đầu tiên tại Hà Nội</p>
                  <div id="accordion1" class="panel-group accordion">
                     <div class="panel">
                        <div class="panel-title">
                           <a data-parent="#accordion1" data-toggle="collapse" href="<?php echo asset_url()?>#ly_do_1" aria-expanded="true">
                           <span class="open-sub"></span>
                           Giáo trình giảng dạy?
                           </a>
                        </div>
                        <div id="ly_do_1" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                           <div class="panel-content">
                              <p>Luyện Ielts Writing & Speaking theo từng mục tiêu</p>
                           </div>
                        </div>
                     </div>
                     <div class="panel">
                        <div class="panel-title">
                           <a data-parent="#accordion1" data-toggle="collapse" href="<?php echo asset_url()?>#ly_do_2" aria-expanded="true">
                           <span class="open-sub"></span>
                           Nội dung học?
                           </a>
                        </div>
                        <div id="ly_do_2" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                           <div class="panel-content">
                              <p>Nội dung học trọng tâm theo đề cương rõ ràng được đặt ra hàng quý</p>
                           </div>
                        </div>
                     </div>
                     <div class="panel">
                        <div class="panel-title">
                           <a data-parent="#accordion1" data-toggle="collapse" href="<?php echo asset_url()?>#ly_do_3" aria-expanded="true">
                           <span class="open-sub"></span>
                           Hỗ trợ đào tạo sau khoá học
                           </a>
                        </div>
                        <div id="ly_do_3" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                           <div class="panel-content">
                              <p>Học viên được hỗ trợ đào tạo bằng văn bản. Học viên được bồi dưỡng kỹ năng miễn phí trong suốt quá trình tham gia học</p>
                           </div>
                        </div>
                     </div>
                     <div class="panel">
                        <div class="panel-title">
                           <a data-parent="#accordion1" data-toggle="collapse" href="<?php echo asset_url()?>#ly_do_4" aria-expanded="true">
                           <span class="open-sub"></span>
                           Thi ở đâu?
                           </a>
                        </div>
                        <div id="ly_do_4" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                           <div class="panel-content">
                              <p>Học viên được thi IELTS ngay tại học viện</p>
                           </div>
                        </div>
                     </div>
                     <div class="panel">
                        <div class="panel-title">
                           <a data-parent="#accordion1" data-toggle="collapse" href="<?php echo asset_url()?>#ly_do_5" aria-expanded="true">
                           <span class="open-sub"></span>
                           Cơ sở vật chất?
                           </a>
                        </div>
                        <div id="ly_do_5" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                           <div class="panel-content">
                              <p>Môi trường hiện đại và sang chảnh bậc nhất Việt Nam</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Divider: Funfact -->
   <!-- <section class="divider parallax layer-overlay overlay-theme-colored-9" data-bg-img="/images/funfact-bgr.jpg" data-parallax-ratio="0.7" style="background-image: url(&quot;/images/funfact-bgr.jpg&quot;);">
      <div class="container">
         <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
               <div class="funfact text-center">
                  <i class="pe-7s-hourglass mt-5 text-theme-color-2"></i>
                  <h2 data-animation-duration="2000" data-value="3" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                  <h5 class="text-white text-uppercase mb-0">Năm phát triển</h5>
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
               <div class="funfact text-center">
                  <i class="pe-7s-users mt-5 text-theme-color-2"></i>
                  <h2 data-animation-duration="2000" data-value="1231" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                  <h5 class="text-white text-uppercase mb-0">Học viên đươc đào tạo</h5>
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
               <div class="funfact text-center">
                  <i class="pe-7s-study mt-5 text-theme-color-2"></i>
                  <h2 data-animation-duration="2000" data-value="1231" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                  <h5 class="text-white text-uppercase mb-0">Học viên đạt ielts 6.0+</h5>
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0">
               <div class="funfact text-center">
                  <i class="pe-7s-cup mt-5 text-theme-color-2"></i>
                  <h2 data-animation-duration="2000" data-value="21" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                  <h5 class="text-white text-uppercase mb-0">Awards Won</h5>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!-- Section: blog -->
   <!-- <section id="blog" class="bg-lighter">
      <div class="container">
         <div class="section-title mb-10">
            <div class="row">
               <div class="col-md-8">
                  <a href="<?php echo asset_url()?>ielts-tips">
                     <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1">IELTS <span class="text-theme-color-2 font-weight-400">tips</span></h2>
                  </a>
               </div>
            </div>
         </div>
         <div class="section-content">
            <div class="row">
               <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s" style="visibility: hidden; animation-duration: 1s; animation-delay: 0.3s; animation-name: none;">
                  <article class="post clearfix mb-sm-30">
                     <div class="entry-header">
                        <div class="post-thumb thumb">
                           <img src="./images/chia-se-kinh-nghiem-tuyet-hay-khi-thi-ielts-speaking-part-2-1498470818" alt="" class="img-responsive img-fullwidth">
                        </div>
                     </div>
                     <div class="entry-content p-20 pr-10 bg-white">
                        <div class="entry-meta media mt-0 no-bg no-border">
                           <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                              <ul>
                                 <li class="font-16 text-white font-weight-600 border-bottom">26</li>
                                 <li class="font-12 text-white text-uppercase">T6</li>
                              </ul>
                           </div>
                           <div class="media-body pl-15">
                              <div class="event-content pull-left flip">
                                 <h4 class="entry-title text-white text-uppercase m-0 mt-5">
                                    <a href="<?php echo asset_url()?>ielts-tips/chia-se-kinh-nghiem-tuyet-hay-khi-thi-ielts-speaking-part-2">
                                    Chia sẻ kinh nghiệm tuyệt hay khi thi IELTS Speaking Part 2
                                    </a>
                                 </h4>
                              </div>
                           </div>
                           <div class="mt-10 text-gray-darkgray mr-10 font-13">
                              Danh mục:
                              <a href="<?php echo asset_url()?>ielts-tips" class="mr-5">IELTS Tips;</a>
                           </div>
                        </div>
                        <div class="mt-10">Nhiều bạn học viên chia sẻ với cô rằng các bạn rất lo lắng khi tham gia phần thi nói, tuy đây là phần thi có thời gian ngắn nhưng lại khiến cho các bạn chịu rất nhiều áp lực.</div>
                        <a href="<?php echo asset_url()?>tin-tuc/tin-tuc/chia-se-kinh-nghiem-tuyet-hay-khi-thi-ielts-speaking-part-2" class="btn-read-more">Chi tiết</a>
                        <div class="clearfix"></div>
                     </div>
                  </article>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s" style="visibility: hidden; animation-duration: 1s; animation-delay: 0.3s; animation-name: none;">
                  <article class="post clearfix mb-sm-30">
                     <div class="entry-header">
                        <div class="post-thumb thumb">
                           <img src="./images/phuong-phap-cai-thien-ky-nang-nghe-ielts-listening-1498470728" alt="" class="img-responsive img-fullwidth">
                        </div>
                     </div>
                     <div class="entry-content p-20 pr-10 bg-white">
                        <div class="entry-meta media mt-0 no-bg no-border">
                           <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                              <ul>
                                 <li class="font-16 text-white font-weight-600 border-bottom">26</li>
                                 <li class="font-12 text-white text-uppercase">T6</li>
                              </ul>
                           </div>
                           <div class="media-body pl-15">
                              <div class="event-content pull-left flip">
                                 <h4 class="entry-title text-white text-uppercase m-0 mt-5">
                                    <a href="<?php echo asset_url()?>ielts-tips/mot-vai-phuong-phap-hay-de-cai-thien-ky-nang-nghe-ielts-listening">
                                    Một vài phương pháp hay để cải thiện kỹ năng nghe IELTS Listening
                                    </a>
                                 </h4>
                              </div>
                           </div>
                           <div class="mt-10 text-gray-darkgray mr-10 font-13">
                              Danh mục:
                              <a href="<?php echo asset_url()?>ielts-tips" class="mr-5">IELTS Tips;</a>
                           </div>
                        </div>
                        <div class="mt-10">Kỹ năng IELTS Reading là một kỹ năng tương đối khó nhằn đối với hầu hết các em học viên khi mới học và thi IELTS. Vậy kĩ năng Reading có khó không ?, Phương pháp học như thế nào?</div>
                        <a href="<?php echo asset_url()?>tin-tuc/tin-tuc/mot-vai-phuong-phap-hay-de-cai-thien-ky-nang-nghe-ielts-listening" class="btn-read-more">Chi tiết</a>
                        <div class="clearfix"></div>
                     </div>
                  </article>
               </div>
               <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s" style="visibility: hidden; animation-duration: 1s; animation-delay: 0.3s; animation-name: none;">
                  <article class="post clearfix mb-sm-30">
                     <div class="entry-header">
                        <div class="post-thumb thumb">
                           <img src="./images/nang-cao-kha-nang-nghe-tieng-anh-bang-phuong-phap-chep-chinh-ta-1498470668" alt="" class="img-responsive img-fullwidth">
                        </div>
                     </div>
                     <div class="entry-content p-20 pr-10 bg-white">
                        <div class="entry-meta media mt-0 no-bg no-border">
                           <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                              <ul>
                                 <li class="font-16 text-white font-weight-600 border-bottom">26</li>
                                 <li class="font-12 text-white text-uppercase">T6</li>
                              </ul>
                           </div>
                           <div class="media-body pl-15">
                              <div class="event-content pull-left flip">
                                 <h4 class="entry-title text-white text-uppercase m-0 mt-5">
                                    <a href="<?php echo asset_url()?>ielts-tips/nang-cao-ky-nang-nghe-ielts-listening-hieu-qua-tren-ted-talks">
                                    Nâng cao kỹ năng nghe IELTS Listening hiệu quả trên TED Talks
                                    </a>
                                 </h4>
                              </div>
                           </div>
                           <div class="mt-10 text-gray-darkgray mr-10 font-13">
                              Danh mục:
                              <a href="<?php echo asset_url()?>ielts-tips" class="mr-5">IELTS Tips;</a>
                           </div>
                        </div>
                        <div class="mt-10">Một trong những nguồn tài nguyên luyện nghe hiệu quả nhất chính là TED talks. Các em có thể lên trang web:&nbsp;https://www.ted.com&nbsp;học Listening mỗi ngày.</div>
                        <a href="<?php echo asset_url()?>tin-tuc/tin-tuc/nang-cao-ky-nang-nghe-ielts-listening-hieu-qua-tren-ted-talks" class="btn-read-more">Chi tiết</a>
                        <div class="clearfix"></div>
                     </div>
                  </article>
               </div>
            </div>
         </div>
      </div>
   </section> -->
</div>
<!-- End Main Content -->