<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h4 class="footer-title">Coreform</h4>
                <p class="small">La piattaforma per orientarti verso il tuo futuro universitario.</p>
                <p class="small mb-3"><strong>93 Percorsi di Laurea e oltre 100.000 iscrizioni l'anno.</strong></p>
                <p class="small mb-3">Coreform &egrave; un servizio ufficiale di orientamento e assistenza agli studi creato dalle Universit&agrave; Pegaso, Mercatorum e San Raffaele, quale polo didattico pensato per supportare lo studente nella scelta del Corso di Laurea o post laurea pi&ugrave; adatto alle sue esigenze, nell'immatricolazione e avvio del percorso universitario.</p>
                <div class="footer-contact">
                    <i class="fas fa-envelope"></i>
                    <span>info@coreform.it</span>
                </div>
                <div class="footer-contact">
                    <i class="fas fa-phone"></i>
                    <span>+39 324 6913634</span>
                </div>
                <div class="footer-contact">
                    <i class="fas fa-phone"></i>
                    <span>+39 389 6340864</span>
                </div>
                <div class="footer-contact">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Via dei Mulini, 31 Venafro IS</span>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                <h5 class="mb-4 h6 text-uppercase">Link Utili</h5>
                <a href="{{ url('/') }}" class="footer-link">Home</a>
                <a href="{{ url('/universita') }}" class="footer-link">Universit&agrave;</a>
                <a href="{{ url('/certificazioni') }}" class="footer-link">Certificazioni</a>
                <a href="{{ url('/orientamento') }}" class="footer-link">Orientamento</a>
            </div>
            <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                <h5 class="mb-4 h6 text-uppercase">Informazioni</h5>
                <a href="{{ url('/chi-siamo') }}" class="footer-link">Chi Siamo</a>
                <a href="{{ url('/contatti') }}" class="footer-link">Contatti</a>
                <a href="{{ url('/privacy-policy') }}" class="footer-link">Privacy Policy</a>
                <a href="{{ url('/termini-servizio') }}" class="footer-link">Termini di Servizio</a>
            </div>
            <div class="col-lg-4 col-md-4">
                <h5 class="mb-4 h6 text-uppercase">Newsletter</h5>
                <p class="small">Iscriviti per ricevere aggiornamenti e novit&agrave;</p>
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="La tua email" aria-label="Email" aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="button" id="button-addon2">Iscriviti</button>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <p>&copy; {{ date('Y') }} Coreform - Tutti i diritti riservati</p>
        </div>
    </div>
</footer>