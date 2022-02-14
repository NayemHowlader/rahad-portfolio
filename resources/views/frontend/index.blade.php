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

                                    @foreach ($services as $service )
                                        
                                  
                                    <ul>
                                <li><i class="icon-right-dir"></i>{{ $service->title }}</li>
                                        
                                    </ul>
                                    @endforeach
                                </div>
                            </div>
                            <div class="interests">
                                <div class="cavani_tm_title">
                                    <span>Interests</span>
                                </div>
                                <div class="list">
                                    @foreach ($interestes as $interest)
                                        
        
                                    <ul>
                                        <li><i class="icon-right-dir"></i>{{ $interest->title }}</li>
                                        
                                    </ul>
                                    @endforeach
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
                                @foreach ($programmings as $programming)
                                    
                               
                                <div class="cavani_progress">
                                    <div class="progress_inner" data-value="{{ $programming->level }}">
                                        <span><span class="label">{{ $programming->title }}</span><span class="number">{{ $programming->level }}%</span></span>
                                        <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                    </div>
                    
                                </div>

                                @endforeach
                            </div>
                            <div class="language">
                                <div class="cavani_tm_title">
                                    <span>Language</span>
                                </div>
                                <div class="circular_progress_bar">
                                    <ul>

                                        @foreach ($languages as $languages)
                                            
                                        
                                        <li>
                                            <div class="list_inner">
                                                <div class="myCircle" data-value="{{ $languages->level }}"></div>
                                                <div class="title"><span>{{ $languages->title }}</span></div>
                                            </div>
                                        </li>

                                        @endforeach
                                       
                                      
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
                                            @foreach ($educations as $education)
                                            <li>

                                               
                                                    
                                                
                                                <div class="list_inner">
                                                    <div class="time">
                                                        <span>{{ $education->year }}</span>
                                                    </div>
                                                    <div class="place">
                                                        <h3>{{ $education->institute }}</h3>
                                                        <span>{{ $education->degree }}</span>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
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


                                            @foreach ($experiences as $experience)
                                                
                                            
                                            <li>
                                                <div class="list_inner">
                                                    <div class="time">
                                                        <span>{{ $experience->year }}</span>
                                                    </div>
                                                    <div class="place">
                                                        <h3>{{ $experience->institute }}</h3>
                                                        <span>{{ $experience->position }}</span>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                         
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

                                @foreach ($partners as $partner)
                                    
                               
                                <li>
                                    <div class="list_inner">
                                        <img src="{{asset('photo/partner')}}/{{ $partner->image }}" alt="" />
                                        <a class="cavani_tm_full_link" a href="#"></a>
                                    </div>
                                </li>
                               
                                @endforeach
                            </ul>
                        </div>	
                    </div>
                    <div class="testimonials">
                        <div class="cavani_tm_title">
                            <span>Testimonials</span>
                        </div>
                        <div class="list">
                            <ul class="owl-carousel">

                                @foreach ($testimonials as $testimonial)
                                    
                               
                                <li>
                                    <div class="list_inner">
                                        <div class="text">
                                            <i class="icon-quote-left"></i>
                                            <p>{{ $testimonial->details }}</p>
                                        </div>
                                        <div class="details">
                                            <div class="image">
                                                <div class="main" data-img-url="img/testimonials/1.jpg"></div>
                                            </div>
                                            <div class="info">
                                                <h3>{{ $testimonial->name }}</h3>
                                                <span>{{ $testimonial->desination }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                         
                                @endforeach
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
                            @foreach ($portfolios as $portfolio)
                            <li><a href="#" class="filter" data-filter=".{{ $portfolio->category_name }}">{{ $portfolio->category_name }}</a></li>
                            @endforeach  
                        </ul>
                       
                    </div>
                    <div class="portfolio_list">
                        <ul class="gallery_zoom">
                         
                          
                          
                            @foreach ($portfolios as $portfolio)
                        
                            <li class="{{ $portfolio->category_name }}">
                               
                                    
                               
                                <div class="list_inner">
                                    <div class="image">
                                        <img src="{{asset('photo/portfolio')}}/{{ $portfolio->image }}" alt="" />
                                        <div class="main" data-img-url="{{asset('photo/portfolio')}}/{{ $portfolio->image }}"></div>
                                        <span class="icon"><i class="icon-doc-text-inv"></i></span>
                                        <div class="details">
                                            <h3>{{ $portfolio->title }}</h3>
                                            <span>{{ $portfolio->category_name }}</span>
                                        </div>
                                        <a class="cavani_tm_full_link portfolio_popup" href="#"></a>
                                    </div>
                                    
                                    <div class="hidden_content">
                                        <div class="popup_details">
                                            <div class="main_details">
                                                <div class="textbox">
                                                    <p>{{ $portfolio->details }}</p>
                                                    <img src="{{asset('photo/portfolio')}}/{{ $portfolio->image }}" alt="" />
                                                   
                                                </div>
                                                
                                            </div>
                                        
                                        </div>
                                    </div>
                                    
                                </div>
                            </li>

                            @endforeach
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



                            @foreach ($newses as $news)
                                
                            

                            <li>
                                <div class="list_inner">
                                    <div class="image">
                                        <img src="{{asset('photo/news')}}/{{ $news->image }}" alt="" />
                                        <div class="main" data-img-url="{{asset('photo/news')}}/{{ $news->image }}"></div>
                                        <a class="cavani_tm_full_link" href="#"></a>
                                    </div>
                                    <div class="details">
                                        <div class="metabox">
                                            <div class="info">
                                                <span class="category"><a href="#">{{ $news->category_name }}</a></span>
                                                <span class="date">{{ $news->created_at->format('Y-m-d') }}</span>
                                            </div>
                                            <div class="title">
                                                <h3><a href="#">{{ $news->title }}</a></h3>
                            
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="news_hidden_details">
                                        <div class="news_popup_informations">
                                            <div class="text">
                                                <p>{{ $news->details }}</p>
                                                <img src="{{asset('photo/news')}}/{{ $news->image }}" alt="" />
                                        
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </li>
                            @endforeach
                     
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
                                <form id="contactForm" action="{{ route('contact.store') }}"   method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                                    <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                                    <div class="first">
                                        <ul>
                                            <li>
                                                <input id="name" name="name" type="text" placeholder="Name" autocomplete="off">
                                            </li>
                                       
                                            <li>
                                                <input id="email" name="email" type="email" placeholder="Email" autocomplete="off">
                                            </li>
                                           
                                        </ul>
                                    </div>
                                    <div class="last">
                                        <textarea id="message" name="message" placeholder="Message"></textarea>
                                    </div>
                                   
                                    <div class="cavani_tm_button">
                                        {{-- <a id="send_message" href="#">Send Message</a> --}}
                                        <div id="success">@include('alert.messages')</div>
                                        <input type="submit" value="send Message">
                                 
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