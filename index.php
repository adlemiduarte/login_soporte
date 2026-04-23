<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Soporte y Sistemas CONTPAQi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

</head>
<body>

   <div class="bg-light py-1 d-none d-lg-block border-bottom">
    <div class="container d-flex justify-content-end align-items-center">
        <div class="me-3 small">
            <i class="fa-solid fa-phone text-danger me-1"></i> 
            <a href="tel:6622166882" class="text-decoration-none text-dark hover-red">
                (622) 855 55 66
            </a>
        </div>

        <div class="me-3 small">
            <i class="fa-solid fa-envelope text-danger me-1"></i> 
            <a href="mailto:ventas@loginsoporte.com" class="text-decoration-none text-dark hover-red">
                ventas@loginsoporte.com
            </a>
        </div>

        <a href="#contacto" class="btn btn-danger btn-sm px-3 fw-bold" style="font-size: 0.75rem;">CONTACTO</a>

        <div class="ms-3">
            <a href="#" class="text-dark me-2 small"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="text-dark me-2 small"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="text-dark small"><i class="fa-brands fa-youtube"></i></a>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand me-auto" href="index.php">
            <img src="img/logologin.png" alt="Login Soporte" class="logo-navbar">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto fw-bold align-items-center">
                <li class="nav-item"><a class="nav-link px-3" href="#nosotros">NOSOTROS</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="#productos">PRODUCTOS</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="#servicios">SERVICIOS</a></li>
                <li class="nav-item"><a class="nav-link px-3" href="#contacto">SOPORTE</a></li>
            </ul>
        </div>
    </div>
</nav>


   <div class="col-lg-12 p-0"> <div id="carouselSoporte" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            
            <div class="carousel-item active">
                <div class="banner-img" style="background-image: url('img/banner1.png');"></div>
            </div>

            <div class="carousel-item">
                <div class="banner-img" style="background-image: url('img/banner2.png');"></div>
            </div>
            
            <div class="carousel-item">
                <div class="banner-img" style="background-image: url('img/banner3.png');"></div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselSoporte" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselSoporte" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
</button>
        </div>
    </div>
</div>


    <section class="container my-5" id="servicios">
    <ul class="nav nav-pills nav-justified mb-5 shadow-sm rounded border" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active py-4 border-end" id="pills-conta-tab" data-bs-toggle="pill" data-bs-target="#pills-conta" type="button" role="tab">
                <i class="fa-solid fa-file-invoice-dollar fs-2 d-block text-danger mb-2"></i>
                <span class="fw-bold text-dark">Contabilidad</span>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link py-4 border-end" id="pills-comercial-tab" data-bs-toggle="pill" data-bs-target="#pills-comercial" type="button" role="tab">
               <i class="fa-solid fa-cart-shopping fs-2 d-block text-danger mb-2"></i>
                <span class="fw-bold text-dark">Comercial</span>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link py-4" id="pills-capacitacion-tab" data-bs-toggle="pill" data-bs-target="#pills-capacitacion" type="button" role="tab">
               <i class="fa-solid fa-graduation-cap fs-2 d-block text-danger mb-2"></i>
                <span class="fw-bold text-dark">Capacitación</span>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link py-4" id="pills-aplicaciones-tab" data-bs-toggle="pill" data-bs-target="#pills-aplicaciones" type="button" role="tab">
                <i class="fa-solid fa-mobile-screen-button fs-2 d-block text-danger mb-2"></i>
                <span class="fw-bold text-dark">Aplicaciones</span>
            </button>
        </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">
        
        <div class="tab-pane fade show active" id="pills-conta" role="tabpanel">
            <div class="row g-4 justify-content-center">
                <div class="col-md-3 text-center mb-4">
                    <img src="img/CONTPAQi_contabilidad.jpg" class="img-fluid mb-3" style="max-height: 80px;">
                    <h5 class="fw-bold">CONTPAQi Contabilidad</h5>
                    <p class="small text-muted">Integra y controla tu proceso contable, fiscal y financiero.</p>
                </div>
                <div class="col-md-3 text-center mb-4">
                    <img src="img/CONTPAQi_Nominas.jpg" class="img-fluid mb-3" style="max-height: 80px;">
                    <h5 class="fw-bold">CONTPAQi Nóminas</h5>
                    <p class="small text-muted">Administra tu nómina y cumple con las obligaciones de ley.</p>
                </div>
            <div class="col-md-3 text-center mb-4">
                    <img src="img/CONTPAQi_bancos.jpg" class="img-fluid mb-3" style="max-height: 80px;">
                    <h5 class="fw-bold">CONTPAQi Bancos</h5>
                    <p class="small text-muted">Facilita la administración de tus cuentas y flujo de efectivo con el control de ingresos y egresos.</p>
                </div>
            <div class="col-md-3 text-center mb-4">
                    <img src="img/CONTPAQi_Nominas.jpg" class="img-fluid mb-3" style="max-height: 80px;">
                    <h5 class="fw-bold">CONTPAQi XML En Línea +</h5>
                    <p class="small text-muted">Busca y descarga de forma automática y masiva los CFDI del portal del SAT.</p>
                </div>
            <div class="col-md-3 text-center mb-4">
                    <img src="img/CONTPAQi_Contabiliza.png" class="img-fluid mb-3" style="max-height: 80px;">
                    <h5 class="fw-bold">CONTPAQi Contabiliza</h5>
                    <p class="small text-muted">La contabilidad fácil, rápida y siempre en la nube.</p>
                </div>
            <div class="col-md-3 text-center mb-4">
                    <img src="img/CONTPAQi Personia.png" class="img-fluid mb-3" style="max-height: 80px;">
                    <h5 class="fw-bold">CONTPAQi Personia</h5>
                    <p class="small text-muted">La solución confiable en la nube para la administración de tu nomina.</p>
                </div>
            <div class="col-md-3 text-center mb-4">
                    <img src="img/CONTPAQi Analiza.png" class="img-fluid mb-3" style="max-height: 80px;">
                    <h5 class="fw-bold">CONTPAQi Analiza</h5>
                    <p class="small text-muted">Tu Guardián Fiscal para la Conciliación de Información Digital.</p>
                </div>
                </div>
        </div>

        <div class="tab-pane fade" id="pills-comercial" role="tabpanel">
            <div class="row g-4 justify-content-center">
                <div class="col-md-3 text-center">
                    <img src="img/Factura_elec.png" class="img-fluid mb-3" style="max-height: 80px;">
                    <h5 class="fw-bold">CONTPAQi Factura Electrónica</h5>
                    <p class="small text-muted">Automatiza y haz más eficiente tu proceso de facturación.</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="img/Facturacion_enlinea.png" class="img-fluid mb-3" style="max-height: 80px;">
                    <h5 class="fw-bold">CONTPAQi CFDI Facturación En Línea+</h5>
                    <p class="small text-muted">Facilita la emisión y timbrado de tus CFDI por internet.</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="img/Comercial_premium.png" class="img-fluid mb-3" style="max-height: 80px;">
                    <h5 class="fw-bold">CONTPAQi Comercial Premium</h5>
                    <p class="small text-muted">El software ERP para empresas comercializadoras, distribuidoras y tiendas de suministro, que facilita el control de inventarios, mejorando sus procesos de compra y venta.</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="img/Vende.png" class="img-fluid mb-3" style="max-height: 80px;">
                    <h5 class="fw-bold">CONTPAQi Vende</h5>
                    <p class="small text-muted">La solución en la nube ideal para optimizar tu facturación y seguimiento financiero.</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="img/comercial_pro.jpg" class="img-fluid mb-3" style="max-height: 80px;">
                    <h5 class="fw-bold">CONTPAQi Comercial Pro</h5>
                    <p class="small text-muted">Un gran sistema que le permite a tu empresa trabajar profesionalmente.</p>
                </div>
                <div class="col-md-3 text-center">
                    <img src="img/comercial_start.png" class="img-fluid mb-3" style="max-height: 80px;">
                    <h5 class="fw-bold">CONTPAQi Comercial Start</h5>
                    <p class="small text-muted">El software administrativo que te ayudará a simplificar tus procesos.</p>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="pills-capacitacion" role="tabpanel">
           <div class="col-md-3 text-center">
                <img src="img/kursa.png" class="img-fluid mb-3" style="max-height: 80px;">
                <h5>CONTPAQi kursa</h5>
                <p class="small text-muted">Plataforma de autocapacitación y certificación en línea de los sistemas CONTPAQi® avalado por CONOCER.</p>
            </div>
        </div>
    </div>

   <div class="tab-pane fade" id="pills-aplicaciones" role="tabpanel">
    <div class="row g-4 justify-content-center pt-4"> 
        
        <div class="col-md-4 col-lg-3 text-center">
            <img src="img/evalua035.png" class="img-fluid mb-3" style="max-height: 80px;">
            <h5 class="fw-bold">CONTPAQi Evalúa 035</h5>
            <p class="small text-muted">Aplicación que te ayuda al cumplimiento y administración de la NOM035.</p>
        </div>

        <div class="col-md-4 col-lg-3 text-center">
            <img src="img/escritoriovirtual.png" class="img-fluid mb-3" style="max-height: 80px;">
            <h5 class="fw-bold">CONTPAQi Escritorio Virtual</h5>
            <p class="small text-muted">Accede a tus sistemas desde cualquier dispositivo en el lugar y momento que lo necesites.</p>
        </div>

        <div class="col-md-4 col-lg-3 text-center">
            <img src="img/respaldos.png" class="img-fluid mb-3" style="max-height: 80px;">
            <h5 class="fw-bold">CONTPAQi Respaldos</h5>
            <p class="small text-muted">Sube, administra y resguarda en la nube la información más importante de tus sistemas.</p>
        </div>

    </div> </div>

</section>


   <section id="contacto" class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center"> <div class="col-md-6">
                <h2 class="fw-bold">¿En qué podemos <span class="text-danger">Ayudarte?</span></h2>
                <p class="text-muted">Somos expertos en la implementación y soporte de sistemas CONTPAQi.</p>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fa-solid fa-circle-check text-danger me-2"></i> Asesoría a sistemas</li>
                    <li class="mb-2"><i class="fa-solid fa-circle-check text-danger me-2"></i> Soporte técnico especializado</li>
                    <li class="mb-2"><i class="fa-solid fa-circle-check text-danger me-2"></i> Programación de reportes</li>
                </ul>
            </div>
            
            <div class="col-md-6">
                <div class="card shadow border-0 p-4">
                    <form action="https://formspree.io/f/xpqkodea" method="POST">
                        <div class="mb-3">
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre completo" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="_replyto" class="form-control" placeholder="Correo electrónico" required>
                        </div>
                        <div class="mb-3">
                            <select name="sistema" class="form-select">
                                <option value="Contabilidad">CONTPAQi Contabilidad</option>
                                <option value="Nominas">CONTPAQi Nóminas</option>
                                <option value="Comercial">CONTPAQi Comercial</option>
                                <option value="Soporte">Soporte Técnico General</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <textarea name="mensaje" class="form-control" rows="3" placeholder="¿Cómo podemos ayudarte?" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-danger w-100 fw-bold py-2">Enviar Solicitud</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
 

<section id="nosotros" class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-7 pe-lg-5">
                <h2 class="fw-bold mb-4" style="color: #0a2540;">
                    ¿Quiénes <span class="text-danger">Somos?</span>
                </h2>
                <p class="text-muted mb-4" style="text-align: justify;">
                    En <strong>LOGIN SOPORTE</strong> somos expertos en soluciones <strong>CONTPAQi®</strong>. 
                    Ayudamos a las empresas a digitalizar su contabilidad y administración con un servicio 
                    técnico de primer nivel en Guaymas y toda la región.
                </p>

                <div class="row g-3 mt-4">
                    <div class="col-md-4">
                        <div class="text-center p-3 border-end">
                            <i class="fa-solid fa-rocket text-danger fs-3 mb-2"></i>
                            <h6 class="fw-bold">Misión</h6>
                            <p class="small text-muted mb-0" style="font-size: 0.75rem;">Impulsar la eficiencia operativa de nuestros clientes.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center p-3 border-end">
                            <i class="fa-solid fa-bullseye text-danger fs-3 mb-2"></i>
                            <h6 class="fw-bold">Visión</h6>
                            <p class="small text-muted mb-0" style="font-size: 0.75rem;">Ser líderes en consultoría de software empresarial.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center p-3">
                            <i class="fa-solid fa-handshake text-danger fs-3 mb-2"></i>
                            <h6 class="fw-bold">Valores</h6>
                            <p class="small text-muted mb-0" style="font-size: 0.75rem;">Confianza, rapidez y profesionalismo.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 mt-4 mt-lg-0">
                <div class="shadow-lg rounded-4 overflow-hidden border border-5 border-light">
                    <img src="img/mision.jpg" alt="Equipo Login Soporte" class="img-fluid w-100">
                </div>
            </div>

        </div>
    </div>
</section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <a href="https://wa.me/526228555566?text=Hola,%20necesito%20ayuda" 
   class="btn-whatsapp" target="_blank">
    <i class="bi bi-whatsapp"></i>
</a>

<script>
    // Función para gestionar el cambio de pestañas
    function setupTabs(navId, contentId) {
        const nav = document.getElementById(navId);
        const content = document.getElementById(contentId);
        const tabs = nav.querySelectorAll('.icon-tab');
        const panes = content.querySelectorAll('.tab-pane');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Desactivar pestaña y panel actuales
                nav.querySelector('.icon-tab.active').classList.remove('active');
                content.querySelector('.tab-pane.active').classList.remove('active');

                // Activar nueva pestaña y panel
                tab.classList.add('active');
                const target = tab.getAttribute('data-target');
                content.querySelector(target).classList.add('active');
            });
        });
    }

    // Inicializar para Productos
    setupTabs('nav-productos', 'content-productos');
    // Inicializar para Ayuda
    setupTabs('nav-ayuda', 'content-ayuda');

    
</script>
</body>
</html>