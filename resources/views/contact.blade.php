@extends('def.def1', ['titre'=>'Contact'])
@section('contenta')

<div class="contact-section" style="background-color: papayawhip;">
    <div class="container">
        <div class="card-body">
            <h4 class="card-title"> CONTACTEZ-NOUS</h4>
            <div class="row">
                <div class="contact-form col-md-7 mb-5">
                    <form id="contact-form" method="post" action=" mailto:adakkassato@gmail.com " role="form">
    
                        <div class="form-group">
                            <input type="text" placeholder="Votre Nom:" class="form-control" name="name" id="name">
                        </div>

                        <div class="form-group">
                            <input type="email" placeholder="Votre Email:" class="form-control" name="email" id="email">
                        </div>

                        <div class="form-group">
                            <input type="text" placeholder="Objet" class="form-control" name="subject" id="subject">
                        </div>

                        <div class="form-group">
                            <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>	
                        </div>

                        <div id="cf-submit" style="text-align: center;">
                            <input type="submit" id="contact-submit" class="btn btn-transparent" value="Envoyer">
                        </div>						

                    </form>
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <h4 class="card-title">NOUS CONTACTEZ</h4>
                        <div class="contact-detail">
                            <div class="google-map">
                                <div id="map"></div>
                            </div>
                            <address>
                                <i class="nc-map-big"></i>
                                <i class="nc-mobile"></i>
                                <a href="mailto:adakassato@gmail.com"> <i class="nc-email-85">adakassato@gmail.com</i>  </a>
                            </address>

                            <!-- <ul class="contact-short-info">
                                <li>
                                    <i class="nc-map-big"></i>
                                    <span></span>
                                </li>
                                <li>
                                    <i class="nc-mobile"></i>
                                    <span></span>
                                </li>
                                <li>
                                    <i class="nc-email-85"></i>
                                    <span></span>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>

@endsection