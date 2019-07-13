$(document).ready(function () {
    AgregarMenu();
    AgregarContactanos();
    AgregarFooter();
});

function AgregarMenu() {
    var menu = document.getElementById("MenuJS");

    menu.innerHTML = '<header id="top-bar" class="navbar-fixed-top animated-header">' +
        '<div class="container">' +
            '<div class="navbar-header">' +
                '<!-- responsive nav button -->' +
                '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">' +
                    '<span class="sr-only">Toggle navigation</span>' +
                    '<span class="icon-bar"></span>' +
                    '<span class="icon-bar"></span>' +
                    '<span class="icon-bar"></span>' +
                '</button>' +
                '<!-- /responsive nav button -->' +
                '<!-- logo -->' +
                '<div class="navbar-default">' +
                    '<a href="index.html">' +
                        '<img src="images/logo.png" alt="">' +
                    '</a>' +
                '</div>' +
                '<!-- /logo -->' +
            '</div>' +
            '<!-- main menu -->' +
            '<nav class="collapse navbar-collapse navbar-right" role="navigation">' +
                '<div class="main-menu">' +
                    '<ul class="nav navbar-nav navbar-right">' +
                        '<li>' +
                            '<a href="index.html">Inicio</a>' +
                        '</li>' +
                        '<li><a href="about.html">Acerca de</a></li>' +
                        '<li><a href="service.html">Servicios</a></li>' +
                        '<li class="dropdown">' +
                            '<a href="#" class="dropdown-toggle" data-toggle="dropdown">MEDIA <span class="caret"></span></a>' +
                            '<div class="dropdown-menu">' +
                                '<ul>' +
                                    '<li><a href="gallery.html">GALERIA</a></li>' +
                                    '<li><a href="video.html">VIDEOS</a></li>' +
                                '</ul>' +
                            '</div>' +
                        '</li>' +
                        '<li><a href="contact.html">CONTACTO</a></li>' +
                    '</ul>' +
                '</div>' +
            '</nav>' +
            '<!-- /main nav -->' +
        '</div>' +
    '</header>' 
}

function AgregarFooter() {

    var footer = document.getElementById("FooterJS");

    footer.innerHTML = 

        '<footer id="footer">' +
        '<div class="container" style="">' +
            '<div class="col-md-8">' +
                '<p class="copyright">' +
                    'AC INDUSTRIAL SOLUTIONS' +
                '</p>' +
            '</div>' +
            '<div class="col-md-4">' +
                '<!-- Social Media -->' +
                '<ul class="social">' +
                    '<li>' +
                        '<a href="http://wwww.facebook.com/ACIndustrialSolutions" class="Facebook">' +
                            '<i class="ion-social-facebook"></i>' +
                        '</a>' +
                    '</li>' +
                    '<!--<li>' +
                        '<a href="#" class="Twitter">' +
                            '<i class="ion-social-twitter"></i>' +
                        '</a>' +
                    '</li>' +
                    '<li>' +
                        '<a href="#" class="Linkedin">' +
                            '<i class="ion-social-linkedin"></i>' +
                        '</a>' +
                    '</li>' +
                    '<li>' +
                        '<a href="#" class="Google Plus">' +
                            '<i class="ion-social-googleplus"></i>' +
                        '</a>' +
                    '</li>-->' +
                '</ul>' +
            '</div>' +
        '</div>' +
    '</footer> ' 

}

function AgregarContactanos() {
    var contactanos = document.getElementById("ContactanosJS");

    contactanos.innerHTML =

        '<section id="call-to-action">' +
        '<div class="container">' +
            '<div class="row">' +
                '<div class="col-md-12">' +
                    '<div class="block">' +
                        '<h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">' +
                            '¿PODEMOS AYUDARTE?</h1>' +
                            '<p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Ponte en contacto con nosotros, queremos trabajar para ti.</p>' +
                            '<a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">CONTÁCTANOS</a>' +
                    '</div>' +
                '</div>' +
            '</div>' +
        '</div>' +
    '</section>' 

};