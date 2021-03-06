@include('layouts.default.header')
<body>

<div class="boxed_wrapper">
@include('layouts.default.navigation')

<div class="inner-banner has-base-color-overlay text-center" style="background: url(images/background/1.jpg);">
    <div class="container">
        <div class="box">
            <h3>Blog Default</h3>
        </div>
    </div>
    <div class="breadcumb-wrapper">
        <div class="container">
            <div class="pull-left">
                <ul class="list-inline link-list">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="blog-default.html">blog</a>
                    </li>
                    <li>
                        Blog Default
                    </li>
                </ul>
            </div>
            <div class="pull-right">
                <a href="#" class="get-qoute"><i class="fa fa-share-alt"></i>share</a>
            </div>
        </div>
    </div>
</div>




<div class="sidebar-page-container sec-padd-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <section class="blog-section">
                    <div class="row">
                   
                   @foreach($blogs as $blog)
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         
                            <div class="default-blog-news wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                               
                                <div class="img-box">
                                    <a href="{{ route('single.blog',$blog->id)}}"><img src="{{ asset('uploads')}}/images/blog/{{ $blog->image }}" alt=""></a>
                                </div>
                                <div class="lower-content">
                                    <div class="date center">{{$blog->date}}</div>
                                    <div class="text">
                                        <h4>{!!$blog->title!!}</a></h4>
                                        <p>{{$blog->short_description}}</p>                            
                                    </div>
                                    <div class="post-meta"><a href="#" class="link_btn">Read More</a><span><i class="fa fa-user"></i>{{$blog->author}}</span><span><i class="fa fa-comments"></i>{{$blog->comment}}</span></div>
                                    
                                </div>
                            </div>
                            
                        </div>
                       
                    @endforeach
                        
                    </div>
                    <div class="border-bottom"></div>
                    <br><br>
                    <ul class="page_pagination center">
                        <li><a href="#" class="tran3s"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="active tran3s">1</a></li>
                        <li><a href="#" class="tran3s">2</a></li>
                        <li><a href="#" class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    </ul>
                </section>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="blog-sidebar">
                    <div class="sidebar_search">
                        <form action="#">
                            <input type="text" placeholder="Search....">
                            <button class="tran3s color1_bg"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div> <!-- End of .sidebar_styleOne -->

                    <div class="category-style-one">
                        <div class="inner-title">
                            <h4>Categories</h4>
                        </div>
                        <ul class="list">
                            <li><a href="#" class="clearfix"><span class="float_left">Business Growth </span><span class="float_right">(6)</span></a></li>
                            <li><a href="#" class="clearfix"><span class="float_left">Consulting </span><span class="float_right">(2)</span></a></li>
                            <li><a href="#" class="clearfix"><span class="float_left">Management  </span><span class="float_right">(5)</span></a></li>
                            <li><a href="#" class="clearfix"><span class="float_left">Customer Insights </span><span class="float_right">(10)</span></a></li>
                            <li><a href="#" class="clearfix"><span class="float_left">Organization  </span><span class="float_right">(4)</span></a></li>
                        </ul>
                    </div> <!-- End of .sidebar_categories -->

                    <div class="popular_news">
                        <div class="inner-title">
                            <h4>latest news</h4>
                        </div>

                        <div class="popular-post">
                            <div class="item">
                                <div class="post-thumb"><a href="#"><img src="images/blog/post-1.jpg" alt=""></a></div>
                                <h4><a href="#">6 ways to keep in control <br>your debtors</a></h4>
                                <div class="post-info">October 21, 2016 </div>
                            </div>
                            <div class="item">
                                <div class="post-thumb"><a href="#"><img src="images/blog/post-2.jpg" alt=""></a></div>
                                <h4><a href="#">What a finance director  <br>could add business </a></h4>
                                <div class="post-info">January 14, 2016</div>
                            </div>
                            <div class="item">
                                <div class="post-thumb"><a href="#"><img src="images/blog/post-3.jpg" alt=""></a></div>
                                <h4><a href="#">Tips for sucess in 2016: Ways <br>to grow your business</a></h4>
                                <div class="post-info">December 17, 2015 </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-intsgram">
                        <div class="inner-title">
                            <h4>Instagram</h4>
                        </div>
                        <ul class="list-inline clearfix">
                            <li>
                                <div class="inner-box">
                                    <img src="images/blog/i1.jpg" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div><!-- /.content -->
                                        </div><!-- /.box -->
                                    </div><!-- /.overlay -->
                                </div>
                            </li>
                            <li>
                                <div class="inner-box">
                                    <img src="images/blog/i2.jpg" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div><!-- /.content -->
                                        </div><!-- /.box -->
                                    </div><!-- /.overlay -->
                                </div>
                            </li>
                            <li>
                                <div class="inner-box">
                                    <img src="images/blog/i3.jpg" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div><!-- /.content -->
                                        </div><!-- /.box -->
                                    </div><!-- /.overlay -->
                                </div>
                            </li>
                            <li>
                                <div class="inner-box">
                                    <img src="images/blog/i4.jpg" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div><!-- /.content -->
                                        </div><!-- /.box -->
                                    </div><!-- /.overlay -->
                                </div>
                            </li>
                            <li>
                                <div class="inner-box">
                                    <img src="images/blog/i5.jpg" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div><!-- /.content -->
                                        </div><!-- /.box -->
                                    </div><!-- /.overlay -->
                                </div>
                            </li>
                            <li>
                                <div class="inner-box">
                                    <img src="images/blog/i6.jpg" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link"></i></a>
                                            </div><!-- /.content -->
                                        </div><!-- /.box -->
                                    </div><!-- /.overlay -->
                                </div>
                            </li>


                        </ul>
                    </div>
                    <div class="sidebar-archive">
                        <div class="inner-title">
                            <h4>Blog Archives</h4>
                        </div>
                        <select class="text-capitalize selectpicker" name="form_subject" class="form-control required" data-style="g-select" data-width="100%">
                            <option value="0" selected="">September</option>
                            <option value="1">August</option>
                            <option value="2">November</option>
                            <option value="3">December</option>
                        </select>
                    </div>

                    <div class="inner-title">
                        <h4>Facebook Feed</h4>
                    </div>
                    <div class="sidebar_tags wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="inner-title">
                            <h4>Tag Cloud </h4>

                        </div>

                        <ul>
                            <li><a href="#" class="tran3s">Idea</a></li>
                            <li><a href="#" class="tran3s">Finance</a></li>
                            <li><a href="#" class="tran3s">Experts</a></li>
                            <li><a href="#" class="tran3s">Tips</a></li>
                            <li><a href="#" class="tran3s">Marketing</a>  </li>
                            <li><a href="#" class="tran3s">Services</a></li>
                            <li><a href="#" class="tran3s">Growth</a> </li>
                        </ul>
                    </div> <!-- End of .sidebar_tags -->
                    <br><br>

                </div> <!-- End of .wrapper -->   
            </div>
        </div>
    </div>
</div>


@include('layouts.default.footer')
