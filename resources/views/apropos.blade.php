@extends('def.def1', ['titre'=>'A Propos'])
@section('contenta')

<div class="container">
    <div class="card"></div>
</div>

<div class="container">
    <div class="card-body">
        <div class="row">
        <div class="col-md-6">
            <div class="card-body mb-6">
                <h4 class="card-title">Contactez-nous</h4>
                <div class="card-body">
                    <form id="contact-form" method="post" action=" mailto:emersonagossou425@gmail.com " role="form">

                        <div class="form-group">
                            <input type="text" placeholder="Votre Nom:" class="form-control" name="name" id="name" style="border: 1cm; background-color:lightskyblue">
                        </div>

                        <div class="form-group">
                            <input type="email" placeholder="Votre Email:" class="form-control" name="email" id="email" style="border: 1cm; background-color:lightskyblue">
                        </div>

                        <div class="form-group">
                            <input type="text" placeholder="Objet" class="form-control" name="subject" id="subject" style="border: 1cm; background-color:lightskyblue">
                        </div>

                        <div class="form-group">
                            <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message" style="border: 1cm;  height: 10cm; background-color:lightskyblue"></textarea>	
                        </div>

                        <div id="cf-submit" class="form-footer">
                        <input type="reset" id="contact-reset" class="btn btn-danger" value="Réinitialiser">
                            <input type="submit" id="contact-submit" class="btn btn-success" value="Envoyer">
                        </div>						

                    </form>
                    
                </div>
                <!-- <div class="card-body">
                    <h4 class="card-title">NOUS CONTACTEZ</h4>
                    <div class="contact-detail">
                        <div class="google-map">
                            <div id="map"></div>
                        </div>
                        <address>
                            <i class="nc-map-big"></i>
                            <i class="nc-mobile">Tel: +22996945655</i>
                            <a href="mailto:emersonagossou425@gmail.com"> <i class="nc-email-85">adakassato@gmail.com</i>  </a>
                        </address>
                         <ul class="contact-short-info">
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
                        </ul> 
                    </div>
                </div> -->
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <h4 class="card-title">Quoi savoir sur Le Temple La Bénédiction d'Akassato</h4>
                <div class="">
                    L'Eglise des Assemblée de Dieu Temple d'Akassato, région nord section Calavi II sous la direction 
                    du Révérand Pasteur Franck Pkondéhou AHOLOUPKE.
                </div>
            </div>
            <div class="card-body">
                <h4 class="card-title">NOUS CONTACTEZ</h4>
                <div class="contact-detail">
                    <div class="google-map">
                        <div id="map"></div>
                    </div>
                    <address>
                        <i class="nc-map-big"></i><br>
                        <i class="nc-mobile">Tel: +22996945655</i><br>
                        <a href="mailto:emersonagossou425@gmail.com"> <i class="nc-email-85">adakassato@gmail.com</i>  </a><br>
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
    </div>
</div>
<br><br><br><br>
@endsection