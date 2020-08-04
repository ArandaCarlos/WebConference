<?php include_once 'includes/templates/header.php'; ?>
    <section class="seccion contenedor">
        <h2>La mejor conferencia de Marketing Digital en Español</h2>
        <p>Nam pretium consectetur risus, vitae luctus diam volutpat faucibus. Proin sodales pulvinar bibendum. Praesent a nisl sagittis, dapibus nunc eu, venenatis ligula. Suspendisse potenti. Quisque vitae nisi id nunc commodo aliquet et non quam. Nam
            iaculis accumsan felis, eget porttitor nisl posuere non. Sed malesuada arcu lorem, in rutrum mi hendrerit nec.</p>
    </section>
    <!--seccion-->

    <section class="programa">
        <div class="contenedor-video">
            <video autoplay loop poster="img/bg-talleres.jpg">
              <source src="video/video.mp4" type="video/mp4">
              <source src="video/video.webm" type="video/webm">
              <source src="video/video.ogv" type="video/ogv">
            </video>
        </div>
        <div class="contenido-programa">
            <div class="contenedor">
                <div class="programa-evento">
                    <h2>Programa del Evento</h2>
                    
                    <nav class="menu-programa">
                        <a href="#talleres"><i class="fas fa-code"></i>Talleres</a>
                        <a href="#conferencia"><i class="fas fa-comment"></i>Conferencias</a>
                        <a href="#seminarios"><i class="fas fa-university"></i>Seminarios</a>
                    </nav>

                    <div id="talleres" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>HTML5, CSS3 y Javascript</h3>
                            <p><i class="fas fa-clock"></i>16:00 hrs</p>
                            <p><i class="fas fa-calendar-alt"></i>10 de Dic</p>
                            <p><i class="fas fa-user"></i>Juan Pablo de La Torre</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Responsive Web Design</h3>
                            <p><i class="fas fa-clock"></i>20:00 hrs</p>
                            <p><i class="fas fa-calendar-alt"></i>10 de Dic</p>
                            <p><i class="fas fa-user"></i>Juan Pablo de La Torre</p>
                        </div>
                        <a href="#" class="button float-right">Ver Todos</a>
                    </div>
                    <div id="conferencia" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Como ser freelancer</h3>
                            <p><i class="fas fa-clock"></i>10:00 hrs</p>
                            <p><i class="fas fa-calendar-alt"></i>10 de Dic</p>
                            <p><i class="fas fa-user"></i>Gregorio Sanchez</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Tecnologias del futuro</h3>
                            <p><i class="fas fa-clock"></i>17:00 hrs</p>
                            <p><i class="fas fa-calendar-alt"></i>10 de Dic</p>
                            <p><i class="fas fa-user"></i>Susan Sanchez</p>
                        </div>
                        <a href="#" class="button float-right">Ver Todos</a>
                    </div>
                    <div id="seminarios" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Diseño UI/UX para móviles </h3>
                            <p><i class="fas fa-clock"></i>17:00 hrs</p>
                            <p><i class="fas fa-calendar-alt"></i>11 de Dic</p>
                            <p><i class="fas fa-user"></i>Harold Garcia</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Aprende a programar en una mañana</h3>
                            <p><i class="fas fa-clock"></i>10:00 hrs</p>
                            <p><i class="fas fa-calendar-alt"></i>11 de Dic</p>
                            <p><i class="fas fa-user"></i>Susana Rivera</p>
                        </div>
                        <a href="#" class="button float-right">Ver Todos</a>
                    </div>
                    <!--talleres-->
                </div>
                <!--Porgrama EVENTO-->
            </div>
            <!--contenedor-->
    </section>
    <!--contenedor PROGRAMA-->
    <?php include_once 'includes/templates/invitados.php'; ?>
    <!--INVITADOS-->

    <div class="contador parallax">
        <div class="contenedor">
            <ul class="resumen-evento ">
                <li>
                    <p class="numero">6</p> Invitados</li>
                <li>
                    <p class="numero">15</p> Talleres</li>
                <li>
                    <p class="numero">3</p> Dias</li>
                <li>
                    <p class="numero">9</p> Conferencias</li>
            </ul>
        </div>
    </div>
    <!--CONTADOR-->
   
    <section class="precios seccion">
        <h2>Precios</h2>
        <div class="contenedor">
            <ul class="lista-precios clearfix">
                <li>
                    <div class="tabla-precio">
                        <h3>Pase por dia</h3>
                        <p class="numero">$30</p>
                        <ul>
                            <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
                            <li><i class="fas fa-check"></i>Todas las Conferencias</li>
                            <li><i class="fas fa-check"></i>Todos los Talleres</li>
                        </ul>
                        <a href="#" class="button hollow">Comprar</a>
                    </div>
                </li>
                <li>
                    <div class="tabla-precio">
                        <h3>Todos los Dias</h3>
                        <p class="numero">$50</p>
                        <ul>
                            <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
                            <li><i class="fas fa-check"></i>Todas las Conferencias</li>
                            <li><i class="fas fa-check"></i>Todos los Talleres</li>
                        </ul>
                        <a href="#" class="button ">Comprar</a>
                    </div>
                </li>
                <li>
                    <div class="tabla-precio">
                        <h3>Pase por 2 dias</h3>
                        <p class="numero">$45</p>
                        <ul>
                            <li><i class="fas fa-check"></i>Bocadillos Gratis</li>
                            <li><i class="fas fa-check"></i>Todas las Conferencias</li>
                            <li><i class="fas fa-check"></i>Todos los Talleres</li>
                        </ul>
                        <a href="#" class="button hollow">Comprar</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <div id="mapa" class="mapa"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22007.243734104755!2d-57.966336331187875!3d-34.921595334436304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a2e62e3fc93575%3A0x6ffaec3bf616e000!2sPlaza%20Moreno!5e0!3m2!1ses-419!2sar!4v1594908378949!5m2!1ses-419!2sar"
            width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>

    <section class="seccion">
        <h2>testimoniales</h2>
        <div class="testimoniales contenedor ">
            <div class="testimonial">
                <blockquote>
                    <p>Nam pretium consectetur risus, vitae luctus diam volutpat faucibus. Proin sodales pulvinar bibendum. Praesent a nisl sagittis, dapibus nunc eu, venenatis ligula. Suspendisse potenti.</p>
                    <footer class="info-testimonial ">
                        <img src="img/testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo<span>Diseñador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <div class="testimonial">
                <blockquote>
                    <p>Nam pretium consectetur risus, vitae luctus diam volutpat faucibus. Proin sodales pulvinar bibendum. Praesent a nisl sagittis, dapibus nunc eu, venenatis ligula. Suspendisse potenti.</p>
                    <footer class="info-testimonial ">
                        <img src="img/testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo<span>Diseñador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <div class="testimonial">
                <blockquote>
                    <p>Nam pretium consectetur risus, vitae luctus diam volutpat faucibus. Proin sodales pulvinar bibendum. Praesent a nisl sagittis, dapibus nunc eu, venenatis ligula. Suspendisse potenti.</p>
                    <footer class="info-testimonial ">
                        <img src="img/testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo<span>Diseñador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </section>
    <!--Testimoniales-->
    <div class="newsletter parallax">
        <div class="contenido contenedor">
            <p>registrate al newsletter</p>
            <h3>GdlWebCamp</h3>
            <a href="#" class="button transparente">Registro</a>
        </div>
    </div>
    <!--NEWSLETTER-->

    <div class="contador">
        <div class="contenedor">
            <ul class="resumen-evento  contador-dias">
                <li>
                    <p class="numero">80</p> Dias</li>
                <li>
                    <p class="numero">15</p> Horas</li>
                <li>
                    <p class="numero">5</p> Minutos</li>
                <li>
                    <p class="numero">30</p> Segundos</li>
            </ul>
        </div>
    </div>

 <?php include_once 'includes/templates/footer.php'; ?>
