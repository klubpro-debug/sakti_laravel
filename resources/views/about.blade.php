@extends('layouts.master')
@section('nav')
    @include('layouts/navtrans')
@endsection
@section('title','About')
@section('jumbotron')
<section id="page-title" class="page-title-parallax page-title-dark page-title-right" style="padding: 250px 0; background-image: url('images/about/me-parallax.jpg'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 440px;" data-top-bottom="background-position:0px -500px;">
    <div class="container clearfix">
        <h1>SAKTI</h1>
        <span>UKM - UPR</span>
    </div>
</section>
@endsection

@section('content')
    <!-- Visi Misi Section Begin -->
    <div class="container clearfix">
        <div class="clear"></div>
        <div class="fancy-title title-border title-center">
            <div class="clear"></div>
            <div class="divider  divider-short divider-center"></div>
            <div class="heading-block title-center page-section">
                <h2>Visi & Misi</h2>
            </div>
        </div>
        <img src="img/about-us.jpg" alt="">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-us">
                    <h4>VISI</h4>
                    <p>Having a baby can be a nerve wracking experience for new parents – not the nine
                        months of pregnancy, I’m talking about after the infant is brought home from the
                        hospital. It’s always the same thing, by the time they have their third child
                        they have it all figured out, but with number one it’s a learning thing.
                    </p>
                    <p>Baby monitors help you hear your baby’s needs without you having to be in the
                        room with the baby. Some baby monitors are portable, or “mobile” and are small
                        enough that you can carry it in your pocket as you do your daily chores around
                        the house. Depending on your price range it’s best to have a base unit that
                        plugs into the wall. The receiving unit can be like your portable phone, you can
                        carry it around with you, and plug it back into the base unit to be recharged.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-quality">
                    <h4>MISI</h4>
                    <p>Donec enim ipsum porta justo integer at velna vitae auctor integer congue magna
                        at risus auctor purus unt pretium ligula rutrum integer sapien ultrice ligula
                        luctus undo magna risus
                    </p>
                    <ul>
                        <li><i class="fa fa-check-circle-o"></i>Lorem ipsum dolor sitdoni amet,
                            consectetur dont adipis elite vivamus interdum.
                        </li>
                        <li><i class="fa fa-check-circle-o"></i>Integer pulvinar ante nulla, ac
                            fermentum ex congue id vestibulum ensectetur.
                        </li>
                        <li><i class="fa fa-check-circle-o"></i>Proin blandit nibh in quam semper
                            iaculis lorem ipsum dolor salama ender.
                        </li>
                        <li><i class="fa fa-check-circle-o"></i>Quis ipsum suspendisse ultrices gravida.
                            Risus commodo viverra maecenas accumsan lacus vel facilisis. 
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Visi Misi Section End -->
    
    
    <!-- Struktur Organisasi Begin -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="clear"></div>
                <div class="heading-block title-center page-section">
                    <h2>Struktur Organisasi</h2>
                </div>
                <div id="oc-team-list" class="owl-carousel team-carousel carousel-widget" data-margin="30" data-nav="false" data-items-md="1" data-items-xl="2">
                    <div class="oc-item">
                        <div class="team team-list clearfix">
                            <div class="team-image">
                                <img src="images/team/3.jpg" alt="John Doe">
                            </div>
                            <div class="team-desc">
                                <div class="team-title"><h4>John Doe</h4><span>CEO</span></div>
                                <div class="team-content">
                                    <p>Carbon emissions reductions giving, legitimize amplify non-partisan Aga Khan. Policy dialogue assessment expert free-speech cornerstone disruptor freedom. Cesar Chavez empower.
                                    </p>
                                </div>
                                <a href="#" class="social-icon si-rounded si-small si-facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#" class="social-icon si-rounded si-small si-twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>
                                <a href="#" class="social-icon si-rounded si-small si-gplus">
                                    <i class="icon-gplus"></i>
                                    <i class="icon-gplus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="team team-list">
                            <div class="team-image">
                                <img src="images/team/2.jpg" alt="Josh Clark">
                            </div>
                            <div class="team-desc">
                                <div class="team-title"><h4>Josh Clark</h4><span>Co-Founder</span></div>
                                <div class="team-content">
                                    <p>Eradicate invest honesty human rights accessibility theory of social change. Diversity experience in the field compassion, inspire breakthroughs planned giving.</p>
                                </div>
                                <a href="#" class="social-icon si-rounded si-small si-github">
                                    <i class="icon-github"></i>
                                    <i class="icon-github"></i>
                                </a>
                                <a href="#" class="social-icon si-rounded si-small si-twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>
                                <a href="#" class="social-icon si-rounded si-small si-dribbble">
                                    <i class="icon-dribbble"></i>
                                    <i class="icon-dribbble"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="team team-list">
                            <div class="team-image">
                                <img src="images/team/8.jpg" alt="Mary Jane">
                            </div>
                            <div class="team-desc">
                                <div class="team-title"><h4>Mary Jane</h4><span>Sales</span></div>
                                <div class="team-content">
                                    <p>Carbon emissions reductions giving, legitimize amplify non-partisan Aga Khan. Policy dialogue assessment expert free-speech cornerstone disruptor freedom. Cesar Chavez empower.</p>
                                </div>
                                <a href="#" class="social-icon si-rounded si-small si-facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#" class="social-icon si-rounded si-small si-twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                    
                                </a>
                                <a href="#" class="social-icon si-rounded si-small si-linkedin">
                                    <i class="icon-linkedin"></i>
                                    <i class="icon-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="oc-item">
                        <div class="team team-list clearfix">
                            <div class="team-image">
                                <img src="images/team/4.jpg" alt="Nix Maxwell">
                            </div>
                            <div class="team-desc">
                                <div class="team-title"><h4>Nix Maxwell</h4><span>Support</span></div>
                                <div class="team-content">
                                    <p>Eradicate invest honesty human rights accessibility theory of social change. Diversity experience in the field compassion, inspire breakthroughs planned giving.</p>
                                </div>
                                <a href="#" class="social-icon si-rounded si-small si-forrst">
                                    <i class="icon-forrst"></i>
                                    <i class="icon-forrst"></i>
                                </a>
                                <a href="#" class="social-icon si-rounded si-small si-skype">
                                    <i class="icon-skype"></i>
                                    <i class="icon-skype"></i>
                                </a>
                                <a href="#" class="social-icon si-rounded si-small si-flickr">
                                    <i class="icon-flickr"></i>
                                    <i class="icon-flickr"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Struktur Organisasi End -->
    
    
    <!-- Map Section Begin -->
    <div class="clear"></div>
    <section id="section-alamat"></section>
    <div class="heading-block title-center page-section">
        <h2>Alamat</h2>
    </div>
    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.835834958933!2d113.89598131423784!3d-2.2155282379692793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dfcb387eff927dd%3A0x26ab0c830a2ede08!2sUKM%20SAKTI!5e0!3m2!1sid!2sid!4v1583033711447!5m2!1sid!2sid" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        <div class="map-hover"></div>
    </div>
    <!-- Map Section End -->
    

    <!-- Contact Section Begin -->
    <section id="page-title">
        <div class="clear"></div>
    </section>
    <div id="page-menu">
        <div id="page-menu-wrap">
            <div class="container clearfix">
                <div class="menu-title"><span>Contact</span></div>
                <div id="page-submenu-trigger"><i class="icon-reorder"></i></div>
            </div>
        </div>
    </div>
    
    <section id="map-overlay">
        <div class="container clearfix">
            <div id="contact-form-overlay" class="clearfix">
                <div class="fancy-title title-dotted-border">
                    <h3>Send us an Email</h3>
                </div>
                <div class="form-widget">
                    <div class="form-result"></div>
                    <form class="nobottommargin" id="template-contactform" name="template-contactform" action="http://themes.semicolonweb.com/html/canvas/include/form.php" method="post">
                        <div class="col_half">
                            <label for="template-contactform-name">Name <small>*</small></label>
                            <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
                        </div>
                        <div class="col_half col_last">
                            <label for="template-contactform-email">Email <small>*</small></label>
                            <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
                        </div>
                        <div class="clear"></div>
                        <div class="col_half">
                            <label for="template-contactform-phone">Phone</label>
                            <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
                        </div>
                        <div class="col_half col_last">
                            <label for="template-contactform-service">Services</label>
                            <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                <option value="">-- Select One --</option>
                                <option value="Div Programming">Div Programming</option>
                                <option value="Div Robotik">Div Robotik</option>
                                <option value="Div Multimedia">Div Multimedia</option>
                            </select>
                        </div>
                        <div class="clear"></div>
                        <div class="col_full">
                            <label for="template-contactform-subject">Subject <small>*</small></label>
                            <input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
                        </div>
                        <div class="col_full">
                            <label for="template-contactform-message">Message <small>*</small></label>
                            <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                        </div>
                        <div class="col_full hidden">
                            <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                        </div>
                        <div class="col_full">
                            <button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                        </div>
                        <input type="hidden" name="prefix" value="template-contactform-">
                    </form>
                </div>
            </div>
        </div>
        <section id="google-map" class="gmap"></section>
    </section>
    <!-- Contact Section End -->
@endsection