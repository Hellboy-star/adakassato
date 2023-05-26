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
                    <form id="contact-form" method="post" action="mailto:adakassatolabenediction@gmail.com" role="form">

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
                    L'Eglise des Assemblée de Dieu Temple d'Akassato, région antlantique nord section Calavi II sous la direction 
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
                        <i class="nc-pin-3"> BP: 1007 Ab-Calavi </i> <br>
                        <i class="nc-map-big"> Akassato, Goudron Moov, 5ème von à droite. </i><br>
                        <i class="nc-mobile">Tel: +22996945655</i><br>
                        <a href="mailto:adakassatolabenediction@gmail.com"> <i class="nc-email-85">adakassatolabenediction@gmail.com</i>  </a><br>
                        <a href="https://www.facebook.com/eeadakassato"> <i class="nc--"> Facebook </i></a><br/>
                        <a href="https://www.youtube.com/@eeadtemplelabenedictiondak3653"> <i class="nc--"> Youtube </i></a><br/>
                        <i> <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15856.625086776921!2d2.3577328!3d6.5018925!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1024af63d1bf23e7%3A0x910aa2ccc270f48!2sEglise%20des%20Assembl%C3%A9es%20de%20Dieu%20d&#39;Akassato%20-%20Temple%20%22LA%20BENEDICTION%22!5e0!3m2!1sfr!2sbj!4v1685100406232!5m2!1sfr!2sbj" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> </i><br>
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