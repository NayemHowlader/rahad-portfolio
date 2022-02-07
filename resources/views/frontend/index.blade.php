@extends('layouts.frontend.frontend_app')
@section('front_content')

<!-- MAINPART -->
<div class="cavani_tm_mainpart">
    <div class="author_image">
        <div class="main ripple" id="ripple"></div>
    </div>
    <div class="main_content">
    
        <!-- HOME -->
        <div class="cavani_tm_section animated" id="home">
            <div class="cavani_tm_home">
                <div class="content">
                    <h3 class="name">{{$main->title}}</h3>
                    <span class="line"></span>
                    <h3 class="job">
                        <span class="cd-headline zoom"> <!-- ANIMATE TEXT VALUES: zoom, rotate-1, letters type, letters rotate-2, loading-bar, slide, clip, letters rotate-3, letters scale, push,  -->
                            <span class="blc">Creative</span>
                            <span class="cd-words-wrapper">
                              <b class="is-visible">{{$main->sub_title1}}</b>
                              <b>{{$main->sub_title2}}</b>
                              <b>{{$main->sub_title3}}</b>
                            </span>
                        </span>
                    </h3>
                    <div class="cavani_tm_button transition_link">
                        <a href="#about">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- HOME -->
        
        <!-- ABOUT -->
        <div class="cavani_tm_section" id="about">
            <div class="section_inner">
                <div class="cavani_tm_about">
                    <div class="biography">
                        <div class="cavani_tm_title">
                            <span>About Me</span>
                        </div>
                        <div class="wrapper">
                            <div class="left">
                                <p>{{$aboutme->description}}</p>
                            </div>
                            <div class="right">
                                <ul>
                                    <li><span class="first">Name:</span><span class="second">{{$aboutme->name}}</span></li>
                                    <li><span class="first">Address:</span><span class="second">{{$aboutme->address}}</span></li>
                                    <li><span class="first">Study:</span><span class="second">{{$aboutme->study}}</span></li>
                                    <li><span class="first">Degree:</span><span class="second">{{$aboutme->degree}}</span></li>
                                    <li><span class="first">Mail:</span><span class="second"><a href="#">{{$aboutme->mail}}</a></span></li>
                                    <li><span class="first">Phone:</span><span class="second">{{$aboutme->phone}}</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="services">
                        <div class="wrapper">
                            <div class="service_list">
                                <div class="cavani_tm_title">
                                    <span>Services</span>
                                </div>
                                <div class="list">
                                    <ul>
                                        <li><i class="icon-right-dir"></i>Web Development</li>
                                        <li><i class="icon-right-dir"></i>Graphic Design</li>
                                        <li><i class="icon-right-dir"></i>Landing Page</li>
                                        <li><i class="icon-right-dir"></i>On-Page SEO</li>
                                        <li><i class="icon-right-dir"></i>Web Hosting</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="interests">
                                <div class="cavani_tm_title">
                                    <span>Interests</span>
                                </div>
                                <div class="list">
                                    <ul>
                                        <li><i class="icon-right-dir"></i>Painting &amp; Drawing</li>
                                        <li><i class="icon-right-dir"></i>Reading &amp; Writing</li>
                                        <li><i class="icon-right-dir"></i>Music &amp; Cinema</li>
                                        <li><i class="icon-right-dir"></i>Travel &amp; Picnik</li>
                                        <li><i class="icon-right-dir"></i>Rain &amp; Snow</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="skills">
                        <div class="wrapper">
                            <div class="programming">
                                <div class="cavani_tm_title">
                                    <span>Programming</span>
                                </div>
                                <div class="cavani_progress">
                                    <div class="progress_inner" data-value="95">
                                        <span><span class="label">HTML &amp; CSS</span><span class="number">95%</span></span>
                                        <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                    </div>
                                    <div class="progress_inner" data-value="80" >
                                        <span><span class="label">JavaScript</span><span class="number">80%</span></span>
                                        <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                    </div>
                                    <div class="progress_inner" data-value="90">
                                        <span><span class="label">WordPress</span><span class="number">90%</span></span>
                                        <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="language">
                                <div class="cavani_tm_title">
                                    <span>Language</span>
                                </div>
                                <div class="circular_progress_bar">
                                    <ul>
                                        <li>
                                            <div class="list_inner">
                                                <div class="myCircle" data-value="0.9"></div>
                                                <div class="title"><span>English</span></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="list_inner">
                                                <div class="myCircle" data-value="0.8"></div>
                                                <div class="title"><span>Russian</span></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="list_inner">
                                                <div class="myCircle" data-value="0.9"></div>
                                                <div class="title"><span>Arabic</span></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="resume">
                        <div class="wrapper">
                            <div class="education">
                                <div class="cavani_tm_title">
                                    <span>Education</span>
                                </div>
                                <div class="list">
                                    <div class="univ">
                                        <ul>
                                            <li>
                                                <div class="list_inner">
                                                    <div class="time">
                                                        <span>2014 - 2016</span>
                                                    </div>
                                                    <div class="place">
                                                        <h3>Oxford Univercity</h3>
                                                        <span>Master Degree</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_inner">
                                                    <div class="time">
                                                        <span>2010 - 2014</span>
                                                    </div>
                                                    <div class="place">
                                                        <h3>Texas Univercity</h3>
                                                        <span>Bachelor Degree</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_inner">
                                                    <div class="time">
                                                        <span>2008 - 2010</span>
                                                    </div>
                                                    <div class="place">
                                                        <h3>Simone College</h3>
                                                        <span>Associate Degree</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="experience">
                                <div class="cavani_tm_title">
                                    <span>Experience</span>
                                </div>
                                <div class="list">
                                    <div class="univ">
                                        <ul>
                                            <li>
                                                <div class="list_inner">
                                                    <div class="time">
                                                        <span>2018 - running</span>
                                                    </div>
                                                    <div class="place">
                                                        <h3>Envato Elements</h3>
                                                        <span>Exclusive Author</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_inner">
                                                    <div class="time">
                                                        <span>2015 - 2018</span>
                                                    </div>
                                                    <div class="place">
                                                        <h3>Avo Corporation</h3>
                                                        <span>Content Manager</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_inner">
                                                    <div class="time">
                                                        <span>2012 - 2015</span>
                                                    </div>
                                                    <div class="place">
                                                        <h3>FC Barcelona</h3>
                                                        <span>Football Player</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="partners">
                        <div class="cavani_tm_title">
                            <span>Partners</span>
                        </div>
                        <div class="list">
                            <ul>
                                <li>
                                    <div class="list_inner">
                                        <img src="{{ asset('frontend_assets') }}/img/partners/1.png" alt="" />
                                        <a class="cavani_tm_full_link" a href="#"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="list_inner">
                                        <img src="{{ asset('frontend_assets') }}/img/partners/2.png" alt="" />
                                        <a class="cavani_tm_full_link" a href="#"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="list_inner">
                                        <img src="{{ asset('frontend_assets') }}/img/partners/3.png" alt="" />
                                        <a class="cavani_tm_full_link" a href="#"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="list_inner">
                                        <img src="{{ asset('frontend_assets') }}/img/partners/4.png" alt="" />
                                        <a class="cavani_tm_full_link" a href="#"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="list_inner">
                                        <img src="{{ asset('frontend_assets') }}/img/partners/5.png" alt="" />
                                        <a class="cavani_tm_full_link" a href="#"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="list_inner">
                                        <img src="{{ asset('frontend_assets') }}/img/partners/1.png" alt="" />
                                        <a class="cavani_tm_full_link" a href="#"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="list_inner">
                                        <img src="{{ asset('frontend_assets') }}/img/partners/2.png" alt="" />
                                        <a class="cavani_tm_full_link" a href="#"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="list_inner">
                                        <img src="{{ asset('frontend_assets') }}/img/partners/3.png" alt="" />
                                        <a class="cavani_tm_full_link" a href="#"></a>
                                    </div>
                                </li>
                            </ul>
                        </div>	
                    </div>
                    <div class="testimonials">
                        <div class="cavani_tm_title">
                            <span>Testimonials</span>
                        </div>
                        <div class="list">
                            <ul class="owl-carousel">
                                <li>
                                    <div class="list_inner">
                                        <div class="text">
                                            <i class="icon-quote-left"></i>
                                            <p>Beautiful minimalist design and great, fast response with support. Highly recommend. Thanks Marketify!</p>
                                        </div>
                                        <div class="details">
                                            <div class="image">
                                                <div class="main" data-img-url="img/testimonials/1.jpg"></div>
                                            </div>
                                            <div class="info">
                                                <h3>Alexander Walker</h3>
                                                <span>Graphic Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list_inner">
                                        <div class="text">
                                            <i class="icon-quote-left"></i>
                                            <p>These people really know what they are doing! Great customer support availability and supperb kindness.</p>
                                        </div>
                                        <div class="details">
                                            <div class="image">
                                                <div class="main" data-img-url="img/testimonials/2.jpg"></div>
                                            </div>
                                            <div class="info">
                                                <h3>Armin Van Buuren</h3>
                                                <span>Content Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list_inner">
                                        <div class="text">
                                            <i class="icon-quote-left"></i>
                                            <p>I had a little problem and the support was just awesome to quickly solve the situation. And keep going on.</p>
                                        </div>
                                        <div class="details">
                                            <div class="image">
                                                <div class="main" data-img-url="img/testimonials/3.jpg"></div>
                                            </div>
                                            <div class="info">
                                                <h3>Baraka Clinton</h3>
                                                <span>English Teacher</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT -->
        
        <!-- PORTFOLIO -->
        <div class="cavani_tm_section" id="portfolio">
            <div class="section_inner">
                <div class="cavani_tm_portfolio">
                    <div class="cavani_tm_title">
                        <span>Creative Portfolio</span>
                    </div>
                    <div class="portfolio_filter">
                        <ul>
                            <li><a href="#" class="current" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".vimeo">Vimeo</a></li>
                            <li><a href="#" data-filter=".youtube">Youtube</a></li>
                            <li><a href="#" data-filter=".soundcloud">Soundcloud</a></li>
                            <li><a href="#" data-filter=".image">Image</a></li>
                            <li><a href="#" data-filter=".detail">Detail</a></li>
                        </ul>
                    </div>
                    <div class="portfolio_list">
                        <ul class="gallery_zoom">
                            <li class="youtube">
                                <div class="list_inner">
                                    <div class="image">
                                        <img src="{{ asset('frontend_assets') }}/img/thumbs/1-1.jpg" alt="" />
                                        <div class="main" data-img-url="{{ asset('frontend_assets') }}/img/portfolio/1.jpg"></div>
                                        <span class="icon"><i class="icon-youtube-play"></i></span>
                                        <div class="details">
                                            <h3>Ave Brook</h3>
                                            <span>Youtube</span>
                                        </div>
                                        <a class="cavani_tm_full_link popup-youtube" href="https://www.youtube.com/watch?v=7e90gBu4pas"></a>
                                    </div>
                                </div>
                            </li>
                            <li class="vimeo">
                                <div class="list_inner">
                                    <div class="image">
                                        <img src="{{ asset('frontend_assets') }}/img/thumbs/1-1.jpg" alt="" />
                                        <div class="main" data-img-url="{{ asset('frontend_assets') }}/img/portfolio/2.jpg"></div>
                                        <span class="icon"><i class="icon-vimeo-1"></i></span>
                                        <div class="details">
                                            <h3>Kelly Hookin</h3>
                                            <span>Vimeo</span>
                                        </div>
                                        <a class="cavani_tm_full_link popup-vimeo" href="https://vimeo.com/337293658"></a>
                                    </div>
                                </div>
                            </li>
                            <li class="soundcloud">
                                <div class="list_inner">
                                    <div class="image">
                                        <img src="{{ asset('frontend_assets') }}/img/thumbs/1-1.jpg" alt="" />
                                        <div class="main" data-img-url="{{ asset('frontend_assets') }}/img/portfolio/3.jpg"></div>
                                        <span class="icon"><i class="icon-soundcloud-1"></i></span>
                                        <div class="details">
                                            <h3>Ashley Flores</h3>
                                            <span>Soundcloud</span>
                                        </div>
                                        <a class="cavani_tm_full_link soundcloude_link mfp-iframe audio" href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/471954807&color=%23ff5500&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></a>
                                    </div>
                                </div>
                            </li>
                            <li class="image">
                                <div class="list_inner">
                                    <div class="image">
                                        <img src="{{ asset('frontend_assets') }}/img/thumbs/1-1.jpg" alt="" />
                                        <div class="main" data-img-url="{{ asset('frontend_assets') }}/img/portfolio/4.jpg"></div>
                                        <span class="icon"><i class="icon-resize-full-alt"></i></span>
                                        <div class="details">
                                            <h3>Alla Gorova</h3>
                                            <span>Image</span>
                                        </div>
                                        <a class="cavani_tm_full_link zoom" href="{{ asset('frontend_assets') }}/img/portfolio/4.jpg"></a>
                                    </div>
                                </div>
                            </li>
                            <li class="image">
                                <div class="list_inner">
                                    <div class="image">
                                        <img src="{{ asset('frontend_assets') }}/img/thumbs/1-1.jpg" alt="" />
                                        <div class="main" data-img-url="{{ asset('frontend_assets') }}/img/portfolio/5.jpg"></div>
                                        <span class="icon"><i class="icon-resize-full-alt"></i></span>
                                        <div class="details">
                                            <h3>Fele Sweet</h3>
                                            <span>Image</span>
                                        </div>
                                        <a class="cavani_tm_full_link zoom" href="{{ asset('frontend_assets') }}/img/portfolio/5.jpg"></a>
                                    </div>
                                </div>
                            </li>
                            <li class="detail">
                                <div class="list_inner">
                                    <div class="image">
                                        <img src="{{ asset('frontend_assets') }}/img/thumbs/1-1.jpg" alt="" />
                                        <div class="main" data-img-url="{{ asset('frontend_assets') }}/img/portfolio/6.jpg"></div>
                                        <span class="icon"><i class="icon-doc-text-inv"></i></span>
                                        <div class="details">
                                            <h3>Alice Moon</h3>
                                            <span>Detail</span>
                                        </div>
                                        <a class="cavani_tm_full_link portfolio_popup" href="#"></a>
                                    </div>
                                    
                                    <div class="hidden_content">
                                        <div class="popup_details">
                                            <div class="main_details">
                                                <div class="textbox">
                                                    <p>We live in a world where we need to move quickly and iterate on our ideas as flexibly as possible. Building mockups strikes the ideal balance ease of modification. Building mockups strikes the ideal balance ease of modification.</p>
                                                    <p>Mockups are useful both for the creative phase of the project - for instance when you're trying to figure out your user flows or the proper visual hierarchy - and the production phase when they phase when they will represent the target product. Building mockups strikes the ideal balance ease of modification.</p>
                                                </div>
                                                <div class="detailbox">
                                                    <ul>
                                                        <li>
                                                            <span class="first">Client</span>
                                                            <span>Alvaro Morata</span>
                                                        </li>
                                                        <li>
                                                            <span class="first">Category</span>
                                                            <span><a href="#">Detail</a></span>
                                                        </li>
                                                        <li>
                                                            <span class="first">Date</span>
                                                            <span>March 07, 2021</span>
                                                        </li>
                                                        <li>
                                                            <span class="first">Share</span>
                                                            <ul class="share">
                                                                <li><a href="#"><img class="svg" src="{{ asset('frontend_assets') }}/img/svg/social/facebook.svg" alt="" /></a></li>
                                                                <li><a href="#"><img class="svg" src="{{ asset('frontend_assets') }}/img/svg/social/twitter.svg" alt="" /></a></li>
                                                                <li><a href="#"><img class="svg" src="{{ asset('frontend_assets') }}/img/svg/social/instagram.svg" alt="" /></a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="additional_images">
                                                <ul>
                                                    <li>
                                                        <div class="list_inner">
                                                            <div class="my_image">
                                                                <img src="{{ asset('frontend_assets') }}/img/thumbs/4-2.jpg" alt="" />
                                                                <div class="main" data-img-url="{{ asset('frontend_assets') }}/img/portfolio/1.jpg"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="list_inner">
                                                            <div class="my_image">
                                                                <img src="{{ asset('frontend_assets') }}/img/thumbs/4-2.jpg" alt="" />
                                                                <div class="main" data-img-url="{{ asset('frontend_assets') }}/img/portfolio/2.jpg"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="list_inner">
                                                            <div class="my_image">
                                                                <img src="{{ asset('frontend_assets') }}/img/thumbs/4-2.jpg" alt="" />
                                                                <div class="main" data-img-url="{{ asset('frontend_assets') }}/img/portfolio/3.jpg"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /PORTFOLIO -->
        
        <!-- NEWS -->
        <div class="cavani_tm_section" id="news">
            <div class="section_inner">
                <div class="cavani_tm_news">
                    <div class="cavani_tm_title">
                        <span>Latest News</span>
                    </div>
                    <div class="news_list">
                        <ul>
                            <li>
                                <div class="list_inner">
                                    <div class="image">
                                        <img src="{{ asset('frontend_assets') }}/img/thumbs/4-3.jpg" alt="" />
                                        <div class="main" data-img-url="{{ asset('frontend_assets') }}/img/news/1.jpg"></div>
                                        <a class="cavani_tm_full_link" href="#"></a>
                                    </div>
                                    <div class="details">
                                        <div class="metabox">
                                            <div class="info">
                                                <span class="category"><a href="#">Branding</a></span>
                                                <span class="date">August 9, 2021</span>
                                            </div>
                                            <div class="title">
                                                <h3><a href="#">Building brands through customer service</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="news_hidden_details">
                                        <div class="news_popup_informations">
                                            <div class="text">
                                                <p>Cavani is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
                                                <p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
                                                <p>That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </li>
                            <li>
                                <div class="list_inner">
                                    <div class="image">
                                        <img src="{{ asset('frontend_assets') }}/img/thumbs/4-3.jpg" alt="" />
                                        <div class="main" data-img-url="{{ asset('frontend_assets') }}/img/news/2.jpg"></div>
                                        <a class="cavani_tm_full_link" href="#"></a>
                                    </div>
                                    <div class="details">
                                        <div class="metabox">
                                            <div class="info">
                                                <span class="category"><a href="#">Branding</a></span>
                                                <span class="date">August 9, 2021</span>
                                            </div>
                                            <div class="title">
                                                <h3><a href="#">Building brands through customer service</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="news_hidden_details">
                                        <div class="news_popup_informations">
                                            <div class="text">
                                                <p>Cavani is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
                                                <p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
                                                <p>That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </li>
                            <li>
                                <div class="list_inner">
                                    <div class="image">
                                        <img src="{{ asset('frontend_assets') }}/img/thumbs/4-3.jpg" alt="" />
                                        <div class="main" data-img-url="{{ asset('frontend_assets') }}/img/news/3.jpg"></div>
                                        <a class="cavani_tm_full_link" href="#"></a>
                                    </div>
                                    <div class="details">
                                        <div class="metabox">
                                            <div class="info">
                                                <span class="category"><a href="#">Branding</a></span>
                                                <span class="date">August 9, 2021</span>
                                            </div>
                                            <div class="title">
                                                <h3><a href="#">Building brands through customer service</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="news_hidden_details">
                                        <div class="news_popup_informations">
                                            <div class="text">
                                                <p>Cavani is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
                                                <p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
                                                <p>That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </li>
                            <li>
                                <div class="list_inner">
                                    <div class="image">
                                        <img src="{{ asset('frontend_assets') }}/img/thumbs/4-3.jpg" alt="" />
                                        <div class="main" data-img-url="{{ asset('frontend_assets') }}/img/news/4.jpg"></div>
                                        <a class="cavani_tm_full_link" href="#"></a>
                                    </div>
                                    <div class="details">
                                        <div class="metabox">
                                            <div class="info">
                                                <span class="category"><a href="#">Branding</a></span>
                                                <span class="date">August 9, 2021</span>
                                            </div>
                                            <div class="title">
                                                <h3><a href="#">Building brands through customer service</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="news_hidden_details">
                                        <div class="news_popup_informations">
                                            <div class="text">
                                                <p>Cavani is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
                                                <p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
                                                <p>That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </li>
                            <li>
                                <div class="list_inner">
                                    <div class="image">
                                        <img src="{{ asset('frontend_assets') }}/img/thumbs/4-3.jpg" alt="" />
                                        <div class="main" data-img-url="{{ asset('frontend_assets') }}/img/news/5.jpg"></div>
                                        <a class="cavani_tm_full_link" href="#"></a>
                                    </div>
                                    <div class="details">
                                        <div class="metabox">
                                            <div class="info">
                                                <span class="category"><a href="#">Branding</a></span>
                                                <span class="date">August 9, 2021</span>
                                            </div>
                                            <div class="title">
                                                <h3><a href="#">Building brands through customer service</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="news_hidden_details">
                                        <div class="news_popup_informations">
                                            <div class="text">
                                                <p>Cavani is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
                                                <p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
                                                <p>That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </li>
                            <li>
                                <div class="list_inner">
                                    <div class="image">
                                        <img src="{{ asset('frontend_assets') }}/img/thumbs/4-3.jpg" alt="" />
                                        <div class="main" data-img-url="{{ asset('frontend_assets') }}/img/news/6.jpg"></div>
                                        <a class="cavani_tm_full_link" href="#"></a>
                                    </div>
                                    <div class="details">
                                        <div class="metabox">
                                            <div class="info">
                                                <span class="category"><a href="#">Branding</a></span>
                                                <span class="date">August 9, 2021</span>
                                            </div>
                                            <div class="title">
                                                <h3><a href="#">Building brands through customer service</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="news_hidden_details">
                                        <div class="news_popup_informations">
                                            <div class="text">
                                                <p>Cavani is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
                                                <p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
                                                <p>That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- NEWS -->
        
        <!-- CONTACT -->
        <div class="cavani_tm_section" id="contact">
            <div class="section_inner">
                <div class="cavani_tm_contact">
                    <div class="cavani_tm_title">
                        <span>Get in Touch</span>
                    </div>
                    <div class="short_info">
                        <ul>
                            <li>
                                <div class="list_inner">
                                    <i class="icon-location"></i>
                                    <span>Ave Street, New York, USA</span>
                                </div>
                            </li>
                            <li>
                                <div class="list_inner">
                                    <i class="icon-mail-3"></i>
                                    <span><a href="#">hello@cavani.com</a></span>
                                </div>
                            </li>
                            <li>
                                <div class="list_inner">
                                    <i class="icon-mobile"></i>
                                    <span>+77 022 444 05 05</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="form">
                        <div class="left">
                            <div class="fields">
                                <form action="/" method="post" class="contact_form" id="contact_form">
                                    <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                                    <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                                    <div class="first">
                                        <ul>
                                            <li>
                                                <input id="name" type="text" placeholder="Name" autocomplete="off">
                                            </li>
                                            <li>
                                                <input id="email" type="text" placeholder="Email" autocomplete="off">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="last">
                                        <textarea id="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="cavani_tm_button">
                                        <a id="send_message" href="#">Send Message</a>
                                    </div>

                                    <!-- If you want change mail address to yours, just open "modal" folder >> contact.php and go to line 4 and change detail to yours.  -->

                                </form>
                            </div>
                        </div>
                        <div class="right">
                            <div class="map_wrap">
                                <div class="map" id="ieatmaps"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CONTACT -->
        
    </div>
</div>
<!-- /MAINPART -->








@endsection