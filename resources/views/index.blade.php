@extends('layouts.main')
@section('content')



    {{-- VIDEO --}}
    {{-- <div class="banner">
        <div class="owl-five owl-carousel owl-theme">
            <div class="item-video">
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/ENVW3uZ3a-4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
            </div>
            <div class="item-video">
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/0bfk90rWV9U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="item-video">
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/ktvTqknDobU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="item-video">
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/ENVW3uZ3a-4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
            </div>
            <div class="item-video">
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/0bfk90rWV9U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="item-video">
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/ktvTqknDobU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
      </div>
    </div>  --}}

    <div id="page" class="site" itemscope itemtype="http://schema.org/LocalBusiness">
    {{-- <div class="banner">
        <div class="owl-five owl-carousel owl-theme">
            <div class="item-video">
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/ENVW3uZ3a-4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
            </div>
            <div class="item-video">
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/0bfk90rWV9U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="item-video">
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/ktvTqknDobU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="item-video">
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/ENVW3uZ3a-4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
            </div>
            <div class="item-video">
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/0bfk90rWV9U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="item-video">
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/ktvTqknDobU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
      </div>
    </div>  --}}
    <div class="banner">
        <div class="owl-four owl-carousel" itemprop="image">
            <img src="images/page-banner.png" alt="Image of Bannner">
            <img src="images/page-banner2.png" alt="Image of Bannner">
            <img src="images/page-banner3.png" alt="Image of Bannner">
        </div>
        <div class="container" itemprop="description">
            <h1>---</h1>
            <h3>....</h3>
        </div>
         <div id="owl-four-nav" class="owl-nav"></div>
    </div>
    
    <!-- Banner Close -->
    <div class="page-heading" >
        <div class="container">
            <h2>HOME PACKAGES</h2>
        </div>
    </div>
    <!-- Popular courses End -->
    <div class="learn-courses">
        <div class="container">
            <div class="courses">
                <div class="owl-one owl-carousel">
                    <div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
                        <div class="img-wrap" itemprop="image"><img src="images/home-package.png" alt="courses picture"></div>
                            <a href="/products" class="learn-desining-banner" itemprop="name">HOME</a>
                        <div class="box-body" itemprop="description">
                            <p><b>Menghadirkan layanan internet dan hiburan terbaik di rumah Anda.
                               Kecepatan Up to 10 Mbps.</b>
                            </p>
                            <section itemprop="time">
                               <!-- <p><span>Device:</span> 7 Devices</p>
                                <p><span>Speed:</span> 20 Mbps</p>
                                <p><span>Rp.</span> 400.000</p> -->
                            </section>
                        </div>
                    </div>

                    <div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
                        <div class="img-wrap"  itemprop="image"><img src="images/business-package.png" alt="courses picture"></div>
                            <a href="/products" class="learn-desining-banner" itemprop="name">BUSINESS</a>
                        <div class="box-body" itemprop="description">
                            <p><b>Memberikan layanan terbaik untuk perusahaan dan perkantoran SOHO 
                                (Smart Office & Home Office). Kecepatan Up to 100 Mbps.</b>
                            </p>
                            <section itemprop="time">
                                <!--<p><span>Device:</span> 10 Devices</p>
                                <p><span>Speed:</span> 20 Mbps</p>
                                <p><span>Rp.</span> 500.000</p>-->
                            </section>
                        </div>
                    </div>

                    <div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
                        <div class="img-wrap"  itemprop="image"><img src="images/home-package.png" alt="courses picture"></div>
                            <a href="/products" class="learn-desining-banner" itemprop="name">DEDICATED</a>
                        <div class="box-body" itemprop="description">
                            <p><b>Menghadirkan layanan terbaik dengan layanan dan kecepatan premium. 
                                Kecepatan Up to 1-10 Gbps.</b>
                            </p>
                            <section itemprop="time">
                                <!--<p><span>Device:</span> 3 Devices</p>
                                <p><span>Speed:</span> 10 Mbps</p>
                                <p><span>Rp.</span> 200.000</p>-->
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Learn courses End -->
    <section class="whyUs-section">
        <div class="container">
            <div class="featured-points">
                <ul>
                    <li><i class="fas fa-book"></i> kecepatan yang berlipat</li>
                    <li><i class="fas fa-money-check-alt"></i> harga murah kualitas tinggi</li>
                    <li><i class="fas fa-chalkboard-teacher"></i> digunakan lebih dari 5 tahun</li>
                    <li> <i class="fas fa-book"></i> lancar tanpa kendala</li>
                </ul>
            </div>
            <div class="whyus-wrap">
                <h1>why us?</h1>
                <p itemprop="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, tempore fugiat. Praesentium aperiam, libero neque quas in rem harum ipsum quasi iure obcaecati, alias nemo sint! Aperiam nulla quas doloremque.</p>

                <a href="#" class="read-more-btn">read more</a>
            </div>
        </div>
    </section>
    <!-- Closed WhyUs section -->
    <section class="page-heading">
        <div class="container">
            <h2>gallery</h2>
        </div>
    </section>
    <section class="gallery-images-section" itemprop="image" itemscope itemtype=" http://schema.org/ImageGallery">
        <div class="gallery-img-wrap">
            <a href="images/gallery-img1.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                <img src="images/gallery-img1.jpg" alt="gallery-images">
            </a>
        </div>
        <div class="gallery-img-wrap">
            <a href="images/gallery-img2.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                <img src="images/gallery-img2.jpg" alt="gallery-images">
            </a>
        </div>
        <div class="gallery-img-wrap">
            <a href="images/gallery-img3.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                <img src="images/gallery-img3.jpg" alt="gallery-images">
            </a>
        </div>
        <div class="gallery-img-wrap">
            <a href="images/gallery-img4.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                <img src="images/gallery-img4.jpg" alt="gallery-images">
            </a>
        </div>
        </div>
    </section>
    <!-- End of gallery Images -->
    {{-- cek resi --}}
    <div class="page-heading" id="cekresiIDP">
        <div class="container">
            <h2>CEK ID PELANGGAN</h2>
        </div>
    </div>
    <section class="cek-resi">
        <div class="container">
           <div class="resi">
                <input type="text" id="cekresi" class="inputresi" placeholder="IDP-XXXX">
                <br>
                <button type="button" class="btnresi" id="btnresi">Cek ID Pelanggan</button>
            </div>
        </div>
        <br><br>
        <div class="container" id="containerdata">
        </div>
           
        
    </section>
    <br><br>
    {{-- end cek resi --}}
   
    <!-- Latest News CLosed -->
    {{-- about us --}}
    <div class="page-heading">
        <div class="container">
            <h2>About US</h2>
        </div>
    </div>
    <div id="page" class="site">
    <section class="about-upper-section" itemprop="mainContentofPage">
        <div class="container">
             
            <article class="who-we-are">
                <h2 class="top-heading">WHO WE ARE</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
            </article>
            <div class="our-story">
                <h2 class="top-heading">our story</h2>
                <ul>
                    <li><i class="fas fa-chalkboard-teacher"></i> <a href="#">10+ certified services</a></li>
                    <li><i class="fas fa-graduation-cap"></i> <a href="#">100K+ products sold</a></li>
                    <li><i class="fas fa-book-open"></i> <a href="#">50+ awardes</a></li>
                    <li><i class="fas fa-users"></i> <a href="#">200K+ followers</a></li>

                    <!-- For None link use below -->
                    <!-- <li><i class="fas fa-chalkboard-teacher"></i> <p>60+ certified teachers</p></li>
                    <li><i class="fas fa-graduation-cap"></i>  <p>600+ students enrolled</p></li>
                    <li><i class="fas fa-book-open"></i>  <p>50+ courses completed</p></li>
                    <li><i class="fas fa-users"></i>  <p>10000+ foreign followers</p></li> -->
                </ul>
            </div>
        </div>
    </section>

    {{-- <section class="team-members" itemprop="contributor">
        <div class="container">
            <h2 class="top-heading">meet our team</h2>
            <article class="developer-grid">
                <div class="developer-wrap">
                    <img src="images/developer-img.jpg" alt="developer images">
                    <h3>Member Name</h3>
                    <p>Web Developer</p>
                    <ul>
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>

                <div class="developer-wrap">
                    <img src="images/developer-img.jpg" alt="developer images">
                    <h3>Member Name</h3>
                    <p>Web Developer</p>
                    <ul>
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>

                <div class="developer-wrap">
                    <img src="images/developer-img.jpg" alt="developer images">
                    <h3>Member Name</h3>
                    <p>Web Developer</p>
                    <ul>
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>

                <div class="developer-wrap">
                    <img src="images/developer-img.jpg" alt="developer images">
                    <h3>Member Name</h3>
                    <p>Web Developer</p>
                    <ul>
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>

                <div class="developer-wrap">
                    <img src="images/developer-img.jpg" alt="developer images">
                    <h3>Member Name</h3>
                    <p>Web Developer</p>
                    <ul>
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>

                <div class="developer-wrap">
                    <img src="images/developer-img.jpg" alt="developer images">
                    <h3>Member Name</h3>
                    <p>Web Developer</p>
                    <ul>
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>

                <div class="developer-wrap">
                    <img src="images/developer-img.jpg" alt="developer images">
                    <h3>Member Name</h3>
                    <p>Web Developer</p>
                    <ul>
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>

                <div class="developer-wrap">
                    <img src="images/developer-img.jpg" alt="developer images">
                    <h3>Member Name</h3>
                    <p>Web Developer</p>
                    <ul>
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </article>
        </div>
    </section> --}}
    <!-- Team Members Closed  -->
</div>
    {{-- end about us --}}
</div>

@endsection