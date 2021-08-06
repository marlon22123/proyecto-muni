<x-app-layout>
     <!-- Slider main container -->
     <section id="hero">
        <div class="hero-container">
          <div id="slider-principal" class="swiper-container" >
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              @foreach ($sliders as $slider)
                  <div class="swiper-slide">
                <img src="{{Storage::url($slider->url)}}" />
              </div>
              @endforeach
              
           {{--    <div class="swiper-slide">
                <img src="https://picsum.photos/1895/600" alt="" />
              </div>
              <div class="swiper-slide">
                <img src="https://picsum.photos/1895/600" alt="" />
              </div>
              ... --}}
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
  
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
  
            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
          </div>
        </div>
      </section>
      <!-- End Hero -->


        <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container">
  
          <div class="row">
            <div class="col-xl-4 col-lg-5" data-aos="fade-up">
              <div class="content">
                <h3>Why Choose Flexor for your company website?</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
                </p>
                <div class="text-center">
                  <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-xl-8 col-lg-7 d-flex">
              <div class="icon-boxes d-flex flex-column justify-content-center">
                <div class="row">
                  <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box mt-4 mt-xl-0" data-aos="fade-up" data-aos-delay="100">
                      <div class="icon"><i class="bi bi-file-bar-graph"></i></div>
                      <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                      <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                    </div>
                  </div>
                  <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box mt-4 mt-xl-0" data-aos="fade-up" data-aos-delay="200">
                      <div class="icon"><i class="bi bi-pencil-square"></i></div>
                      <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                      <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>
                  </div>
                  
                  <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                  
                    <div class="icon-box mt-4 mt-xl-0" data-aos="fade-up" data-aos-delay="300">
                      <div class="icon"> <i class="bi bi-receipt"></i></div>
                      <h4 class="title"><a href="">Magni Dolores</a></h4>
                      <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
        </div>
      </section><!-- End Why Us Section -->

      <!-- ======= Documentos Section ======= -->
     <section id="documentos" class="documentos">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>documentos <span id="span">Principales</span></h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
          </div>
  
          <div class="row" data-aos="fade-up" data-aos-delay="300">
            
            <div class="col-lg-4 col-md-6  mt-4">
              <div class="icon-box">
                <i class="bi bi-file-earmark-text-fill" style="color: #ffbb2c;"></i>
                <h3><a  href="assets/doc/CERIFICADO COPAISI.pdf "  target="_blank">Lorem Ipsum</a></h3>
              </div>
            </div>
            <div class="col-lg-4 col-md-6   mt-4">
              <div class="icon-box">
                <i class="bi bi-file-earmark-text-fill" style="color: #5578ff;"></i>
                <h3><a href="">Dolor Sitema</a></h3>
              </div>
            </div>
            <div class="col-lg-4 col-md-6  mt-4 ">
              <div class="icon-box">
                <i class="bi bi-file-earmark-text-fill" style="color: #e80368;"></i>
                <h3><a href="">Sed perspiciatis</a></h3>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 ">
              <div class="icon-box">
                <i class="bi bi-file-earmark-text-fill" style="color: #e80368;"></i>
                <h3><a href="">Sed perspiciatis</a></h3>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4">
              <div class="icon-box">
                <i class="bi bi-file-earmark-text-fill" style="color: #e80368;"></i>
                <h3><a href="">Sed perspiciatis</a></h3>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-4">
              <div class="icon-box">
                <i class="bi bi-file-earmark-text-fill" style="color: #e80368;"></i>
                <h3><a href="">Sed perspiciatis</a></h3>
              </div>
            </div>
          
          
          </div>
  
        </div>
      </section><!-- End documentos Section -->

          <!-- ======= POSTS  Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2> Notas de <span id="span">prensa</span> </h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
  
          </div>
          <div class="row" id="grid-post">
             
            <div id="slider-prensa" class="owl-carousel owl-theme mt-4">

@foreach ($posts as $post)
    <div class="col-lg-4 swiper-slide" data-aos="zoom-in" data-aos-delay="200">
                <div class="post-box">
                  <div class="post-img">
                    <img
                      src={{Storage::url($post->image->url)}}
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <span class="post-date"> {{$post->created_at}}</span>
                  <h3 class="post-title">
                    {{$post->name}}
                  </h3>
                  <a
                    href="blog-singe.html"
                    class="readmore stretched-link mt-auto"
                    ><span id="span">Read More</span
                    ><i class="bi bi-arrow-right"></i
                  ></a>
                </div>
              </div>
@endforeach
              
  {{-- 
              <div class="col-lg-4 swiper-slide" data-aos="zoom-in" data-aos-delay="400">
                <div class="post-box">
                  <div class="post-img">
                    <img
                      src="https://picsum.photos/id/51/1024/670"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <span class="post-date">Fri, August 28</span>
                  <h3 class="post-title">
                    Et repellendus molestiae qui est sed omnis voluptates
                    magnam
                  </h3>
                  <a
                    href="blog-singe.html"
                    class="readmore stretched-link mt-auto"
                    ><span id="span">Read More</span
                    ><i class="bi bi-arrow-right"></i
                  ></a>
                </div>
              </div>
  
              <div class="col-lg-4 swiper-slide" data-aos="zoom-in" data-aos-delay="600">
                <div class="post-box">
                  <div class="post-img">
                    <img
                      src="https://picsum.photos/id/61/1024/670"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <span class="post-date">Mon, July 11</span>
                  <h3 class="post-title">
                    Quia assumenda est et veritatis aut quae
                  </h3>
                  <a
                    href="blog-singe.html"
                    class="readmore stretched-link mt-auto"
                    ><span id="span">Read More</span
                    ><i class="bi bi-arrow-right"></i
                  ></a>
                </div>
              </div>
              <div class="col-lg-4 swiper-slide" data-aos="zoom-in" data-aos-delay="800">
                <div class="post-box">
                  <div class="post-img">
                    <img
                      src="https://picsum.photos/id/101/1024/670"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <span class="post-date">Mon, July 11</span>
                  <h3 class="post-title">
                    Quia assumenda est et veritatis aut quae
                  </h3>
                  <a
                    href="blog-singe.html"
                    class="readmore stretched-link mt-auto"
                    ><span id="span">Read More</span
                    ><i class="bi bi-arrow-right"></i
                  ></a>
                </div>
              </div>
              <div class="col-lg-4 swiper-slide">
                <div class="post-box">
                  <div class="post-img">
                    <img
                      src="https://picsum.photos/id/201/1024/670"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <span class="post-date">Mon, July 11</span>
                  <h3 class="post-title">
                    Quia assumenda est et veritatis aut quae
                  </h3>
                  <a
                    href="blog-singe.html"
                    class="readmore stretched-link mt-auto"
                    ><span id="span">Read More</span
                    ><i class="bi bi-arrow-right"></i
                  ></a>
                </div>
              </div> --}}
            </div>
  
          </div>
       
  
        </div>
      </section><!-- End About Us Section -->


         <!-- ======= doc-res Section ======= -->
    <section id="doc-res" class="doc-res">
      
        <div class="section-title-normas" data-aos="fade-up">
          <h2> Utimos <span id="span-normas">documentos</span> </h2>
  
        </div>
        <div class="container position-relative" data-aos="fade-up">
  
          <div id="doc-res-slider" class="swiper-container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
  


              @foreach ($docs as $doc)
                              <div class="swiper-slide">
                <div class="testimonial-item">
                  <h3>{{$doc->category->name}}</h3>
         
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    {{$doc->extract}}
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
                
              </div><!-- End testimonial item -->
              @endforeach
              
            
      
          
              
  
         
  
             
  
           
  
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
      </section><!-- End doc-res Section -->


<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container">
    <header data-aos="fade-up" data-aos-delay="200" class="section-title">
      <h2>Portafolio <span id="span">turistico</span></h2>
      <p>...</p>
    </header>
  

    <div class="row portfolio-container">
      @foreach ($portfolios as $portfolio)
           <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-aos="zoom-in" data-aos-delay="300">
        <div class="portfolio-wrap">
          <img src="{{Storage::url($portfolio->url)}}" class="img-fluid"  alt="">
          <div class="portfolio-info">
            <h4>{{$portfolios->first()->title }}</h4>
            <p>App</p>
            <div class="portfolio-links">
              <a href="{{Storage::url($portfolio->url)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$portfolio->extract }}"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
     
      

    
  

    </div>

  </div>
</section><!-- End Portfolio Section -->

  <!-- ======= enlaces externos Section ======= -->
  <section id="enlaces-externos" class="enlaces-externos">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2 >enlaces <span id="span"> externos </span> </h2>
        <p >Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div id="slider-enlaces" class="swiper-container">
        <div class="swiper-wrapper align-items-center"  >
          <div class="swiper-slide"><img src="" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="" class="img-fluid" alt=""></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End enlaces-externos Section -->
</x-app-layout>