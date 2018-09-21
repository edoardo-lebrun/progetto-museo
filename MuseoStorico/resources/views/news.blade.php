@include('partials.header')

<!--Topbar-->
<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="pull-right address" style="margin-top: 5px!important;">
                    <i class="fa fa-phone"></i>
                    (+39) 0884 541995
                    <i class="fa fa-phone" style="padding-left: 12px;"></i>
                    (+39) 3400852706
                    <a href="https://goo.gl/maps/4BvysMz5Rr12" style="padding: 7px 20px!important;">
                        <i class="fa fa-map-marker-alt"></i>
                        Dove Siamo</a>
                    <a href="#prenota-il-tour" style="padding: 5px 20px!important;">
                        <i class="fa fa-ticket-alt"></i> Prenota </a></p>

            </div>
        </div>
    </div>
</div>


<!--Page header & Title-->
<section id="page_header">
<div class="page_title">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <h2 class="title">News&Eventi</h2>
         <p>Cultura, informazione, musica... e molto altro</p>
      </div>
    </div>
  </div>
</div>  
</section>


<!-- Blogs -->
<section id="blog" class="padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7">
                @if($posts->count())
                    @foreach($posts as $post)
                <div class="blog_item padding-bottom">
                    <h2 onclick="window.location='news/{{  $post->post_slug }}'" class="fa-external-link-alt">{{ $post->title }}</h2>
                    <ul class="comments">
                        <li><a href="#.">{{ date('d M, Y', strtotime($post->create_at)) }}</a></li>
                        <li><a href="#.">News</a></li>
                    </ul>
                    <div class="image_container">
                        <img src="/images/blog1.jpg" class="img-responsive" alt="blog post">
                    </div>
                    <p>{{ $post->preview }}<b><a href="news/{{ $post->post_slug }}"> ...Continua</a></b></p>

                    <a class="btn-common button3" href="news/{{ $post->post_slug }}">Leggi Tutto</a>
                </div>
                    @endforeach
                    @endif


               <!--Sidebar-->
            <div class="col-md-4 col-sm-5">
                <aside class="sidebar">
                    <div class="widget">
                        <ul class="tabs">
                            <li class="active" rel="tab1">Popular </li>
                        </ul>
                        @if($posts->count())
                            @foreach($posts as $post)
                        <div class="tab_container bg_grey">
                            <h3 class="d_active tab_drawer_heading" rel="tab1">Ultimi Post Inseriti</h3>
                            <div id="tab1" class="tab_content">
                                <div class="single_comments">
                                    <img alt="" src="/images/avator1.jpg">
                                    <p><a href="news/{{ $post->post_slug }}">{{ $post->title }}</a>
                                        <span>{{ date('d M, Y', strtotime($post->created_at)) }}</span>
                                    </p>

                                </div>
                                <div class="clearfix"></div>

                                </div>
                            @endforeach
                            @endif
                            </div>
                        </div>
                    </div>

                    <div class="widget">
                        <h3>Tags</h3>
                        <ul class="tags">
                            <li><a href="#.">News</a></li>
                            <li><a href="#.">Eventi</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>


@include('partials.footer')