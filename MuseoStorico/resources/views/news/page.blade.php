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

<section id="page_header">
    <div class="page_title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">News&Eventi</h2>
                    <p>{{ $post->title }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="heading red_color"> {{ $post->title }}</h2>
            <hr class="heading_space">

        </div>
    </div>
    <div class="row">
        <div class="col-md-7 col-sm-6">
            <p><label class="red_color"><i class="fas fa-clock"></i>{{ date('d M, Y', strtotime($post->created_at)) }}</label><br>

            </p>
            <p class="half_space">
            </p><p>{{ $post->content }}&nbsp;</p>
            <br><br>

            <p></p>
            <p class="text-right"><label class="red_color"><em>Staff Museo</em></label></p>

        </div>
        <div class="col-md-5 col-sm-6">
            <div class="item-container">
                <img class="img-responsive" src="https://v3.cdnskr.com/uploads/mustorico/news/images/1537350225news-aziendejpg.jpeg">
                <div class="overlay">
                    <a class="fancybox overlay-inner" href="https://v3.cdnskr.com/uploads/mustorico/news/images/1537350225news-aziendejpg.jpeg" data-fancybox-group="gallery"><i class=" icon-eye6"></i></a>
                </div>
            </div>
            <small><em>Clicca sull'immagine per ingradirla</em></small><br><br>
        </div>
    </div>
</div>

@include('partials.footer')