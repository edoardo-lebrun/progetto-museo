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
                    <h2 class="title"></h2>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="padding">
    <div class="container order_page">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <h2 class="heading">Inviaci un messaggio</h2>
                <hr class="heading_space">
                        <form action="{{ route('contatto.store') }}" method="post" class="callus">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <div id="result" class="text-center form-group"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nome"  name="name" id="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Cognome"  name="cognome" id="cognome">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Telefono" name="phone" id="phone">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea placeholder="Messaggio" name="message" id="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="checkbox-inline">
                                            Ho preso visione <a href="/cookie-law" target="_blank" class="color">l'Informativa sulla Privacy</a>.

                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="g-recaptcha" data-sitekey="{{ env('NOCAPTCHA_SITEKEY')  }}"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Ldsa2cUAAAAACLPJWw1tRYaoQJIl5pyLZRA2k-O&amp;co=aHR0cHM6Ly9tdXNlb3N0b3JpY29wb21waWVyaS5pdDo0NDM.&amp;hl=it&amp;v=v1537165899310&amp;size=normal&amp;cb=uy6b13bi1yxf" width="304" height="78" role="presentation" name="a-wxtewq3xx4iu" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea></div></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="btn-submit button3">
                                            <input type="submit" value=" Invia">
                                        </div>
                                    </div>
                                </div>
                                    </div>
                        </form>
            </div>
            <div class="col-md-4 col-sm-4 bistro">
                <h2 class="heading">Contatti</h2>
                <hr class="heading_space">
                <p><strong>Telefono:</strong><br> +39 0884 541995
                    <br> +39 3400852706</p>
                <p><strong>Indirizzo:</strong><br> Via Antonio Meucci <br>(Zona industriale D46, S.S. 89, Km
                    173,610)<br>
                    c/o La Cittadella della Sicurezza <br>
                    (nuova sede Euroambiente SRL)<br>
                    71043, Manfredonia (FG)
                </p>
                <ul class="social_icon">
                    <li class="black"><a href="https://www.facebook.com/museodeipompieri/" class="facebook"><i class="icon-facebook5"></i></a></li>
                    <li class="black"><a href="https://www.instagram.com/museodeipompieriecrocerossa/" class="google"><i class="icon-instagram2"></i></a></li>

                </ul>
            </div>
            </div>
    </div>
</section>

<section class="padding bg_grey" id="location">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1254.3660187880644!2d15.845072960036518!3d41.60381819832836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13379cccaf9bd413%3A0x24e624b462fee63a!2sMuseo+dei+Pompieri+e+della+croce+rossa!5e0!3m2!1sit!2sit!4v1532954389656" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</section>

<script async defer src="https://www.googletagmanager.com/gtag/js?id=UA-110327251-2"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-110327251-2');
</script>

@include('partials.footer')