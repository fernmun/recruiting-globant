<?php
/**
 * @file
 * Template for a 3 column panel layout.
 *
 * This template provides a very simple "one column" panel display layout.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   $content['middle']: The only panel in the layout.
 */

?>
<div class="panel-display panel-1col clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="panel-panel panel-col">

    <section id="row1" class="glb-section hero">
      <div class="hero-container">
        <img class="hero-image" src="<?php print path_to_theme(); ?>/assets/hero_image.png" />
      </div>
      <?php print $content['row1']; ?>
    </section>

    <section id="row2" class="glb-section location">
      <?php print $content['row2']; ?>

      <div class="panel-group" id="accordion">
        <!--======== Offices Panel ========-->
        <div class="panel panel-default offices-panel green-base">
          <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body container">
              <img class="bkg-image" src="<?php print path_to_theme(); ?>/assets/why/offices/bkg-offices.png" />
              <p class="eyebrow">Contamos con 29 oficinas en 7 paises</p>
              <div class="panel-column-right">
                <h3>G-moves</h3>
                <p>Tenemos centros de desarrollo en 16 ciudades diferentes de América Latina.</p>
                <p>llevamos las oportunidades a donde está el talento, por eso los Globers pueden elegir la oficina donde quieres trabajar, incluso entre alguna de las 4 oficinas de Buenos Aires (San Telmo, Congreso, Retiro y Nuñez).</p>
                <figure class="image-wrapper">
                  <img class="image-display" src="<?php print path_to_theme(); ?>/assets/why/offices/office.png" />
                  <figcaption class="image-caption">LT Surge presentando su último estudio en South Park</figcaption>
                </figure>
              </div>
            </div>
          </div>
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                <span class="container">Contamos con 29 oficinas en 7 paises</span>
              </a>
            </h4>
          </div>
        </div>
        <!--======== Career Panel ========-->
        <div class="panel panel-default career-panel orange-base">
          <div id="collapseTwo" class="panel-collapse collapse">
            <div class="panel-body container">
              <img class="bkg-image" src="<?php print path_to_theme(); ?>/assets/why/clients/bkg-clients.png" />
              <p class="eyebrow">Tenemos un mismo horizonte como equipo</p>
              <div class="panel-column-right">
                <h3>Career</h3>
                <p>Creemos en la autonomía y en que tener un propósito en común hará que no solo creazcas como profesional sino que disfrutes el camino.</p>
              </div>
              <div class="row-3-images">
                <figure class="image-wrapper">
                  <img class="image-display" src="<?php print path_to_theme(); ?>/assets/why/career/have-fun.png" />
                  <figcaption class="image-caption">Chillouts</figcaption>
                </figure>
                <figure class="image-wrapper">
                  <img class="image-display" src="<?php print path_to_theme(); ?>/assets/why/career/learning.png" />
                  <figcaption class="image-caption">Descuentos con G++</figcaption>
                </figure>
                <figure class="image-wrapper">
                  <img class="image-display" src="<?php print path_to_theme(); ?>/assets/why/career/planning.png" />
                  <figcaption class="image-caption">Concurso de bandas</figcaption>
                </figure>
              </div>
            </div>
          </div>
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                <span class="container">Tenemos un mismo horizonte como equipo</span>
              </a>
            </h4>
          </div>
        </div>
        <!--======== Clients Panel ========-->
        <div class="panel panel-default clients-panel lilac-base">
          <div id="collapseThree" class="panel-collapse collapse">
            <div class="panel-body container">
              <img class="bkg-image" src="<?php print path_to_theme(); ?>/assets/why/clients/bkg-clients.png" />
              <p class="eyebrow">Trabajamos con las empresas más innovadoras</p>
              <div class="panel-column-right">
                <h3>Carrera Internacional</h3>
                <p>El 80% de nuestro clientes de encuentras en Estados Unidos y Euroopa, lo que brinda a los Globers proyección internacional, a la altura de los mejores ingenieros del mundo.</p>
                <p>No elijas una, podés trabajar con todas: Somos una de las pocas empresas que puede brindarte un portafolio tan amplio de marcas globales con las que trabajar.</p>
              </div>
              <ul class="clients-list">
                <li><img src="<?php print path_to_theme(); ?>/assets/why/clients/fox.png" alt="Fox" /></li>
                <li><img src="<?php print path_to_theme(); ?>/assets/why/clients/ea.png" alt="EA" /></li>
                <li><img src="<?php print path_to_theme(); ?>/assets/why/clients/coca-cola.png" alt="Coca-Cola" /></li>
                <li><img src="<?php print path_to_theme(); ?>/assets/why/clients/fox.png" alt="Fox" /></li>
                <li><img src="<?php print path_to_theme(); ?>/assets/why/clients/ea.png" alt="EA" /></li>
                <li><img src="<?php print path_to_theme(); ?>/assets/why/clients/coca-cola.png" alt="Coca-Cola" /></li>
                <li><img src="<?php print path_to_theme(); ?>/assets/why/clients/cisco.png" alt="Cisco" /></li>
                <li><img src="<?php print path_to_theme(); ?>/assets/why/clients/mercado-libre.png" alt="Mercado Libre" /></li>
                <li><img src="<?php print path_to_theme(); ?>/assets/why/clients/linkedin.png" alt="Linkedin" /></li>
                <li><img src="<?php print path_to_theme(); ?>/assets/why/clients/cisco.png" alt="Cisco" /></li>
                <li><img src="<?php print path_to_theme(); ?>/assets/why/clients/mercado-libre.png" alt="Mercado Libre" /></li>
                <li><img src="<?php print path_to_theme(); ?>/assets/why/clients/linkedin.png" alt="Linkedin" /></li>
              </ul>
            </div>
          </div>
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                <span class="container">Trabajamos con las empresas más innovadoras</span>
              </a>
            </h4>
          </div>
        </div>
        <!--======== Projects Panel ========-->
        <div class="panel panel-default projects-panel blue-base">
          <div id="collapseFour" class="panel-collapse collapse">
            <div class="panel-body container">
              <img class="bkg-image" src="<?php print path_to_theme(); ?>/assets/why/projects/bkg-projects.png" />
              <p class="eyebrow">Tenemos 1033 proyectos donde podrás trabajar</p>
              <div class="panel-column-right">
                <h3>Open Positions</h3>
                <p>Publicamos las posiciones abiertas y damos autonomía para que los Globers elijan en qué proyectos quieren participar.</p>
                <p>Durante el 2013 más de 75 Globers cambiaron de posición.</p>
                <figure class="image-wrapper">
                  <img class="image-display" src="<?php print path_to_theme(); ?>/assets/why/projects/projects.png" />
                  <figcaption class="image-caption">José se formó en Buenos Aires, y hoy trabaja en Sao Paulo</figcaption>
                </figure>
              </div>
            </div>
          </div>
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                <span class="container">Tenemos 1033 proyectos donde podrás trabajar</span>
              </a>
            </h4>
          </div>
        </div>
        <!--======== Labs Panel ========-->
        <div class="panel panel-default labs-panel yellow-base">
          <div id="collapseFive" class="panel-collapse collapse">
            <div class="panel-body">
              <div class="container bkg-image-container">
                <img class="bkg-image" src="<?php print path_to_theme(); ?>/assets/why/clients/bkg-clients.png" />
                <p class="eyebrow">Anim pariatur cliche reprehenderit</p>
                <div class="panel-column-left">
                  <figure class="image-wrapper">
                    <img class="image-display" src="<?php print path_to_theme(); ?>/assets/why/labs/innovation.png" />
                    <figcaption class="image-caption">José se formó en Buenos Aires, y hoy trabaja en Sao Paulo</figcaption>
                  </figure>
                  <figure class="image-wrapper">
                    <img class="image-display" src="<?php print path_to_theme(); ?>/assets/why/labs/brainstorm.png" />
                    <figcaption class="image-caption">José se formó en Buenos Aires, y hoy trabaja en Sao Paulo</figcaption>
                  </figure>
                </div>
                <div class="panel-column-right">
                  <h3>Capacitación Globers</h3>
                  <p>Non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee.</p>
                  <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. <a href="http://flipthinking.co/" target="blank">http://flipthinking.co/</a></p>
                  <p>Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee.</p>
                  <div style="text-align: center">
                    <img style="display: inline" src="<?php print path_to_theme(); ?>/assets/why/labs/labs.png" />
                    <img src="<?php print path_to_theme(); ?>/assets/why/labs/flip-thinking.png" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                <span class="container">Expertos harán una diferencia en tu carrera</span>
              </a>
            </h4>
          </div>
        </div>
      </div>
    </section>
    
    <section id="row3" class="glb-section studios">
      <div class="container">
        <?php print $content['row3']; ?>

        <h2 class="section-title">Testimonios</h2>
        <p class="section-subtitle">Nuestros Globers<br> te cuentan más acerca de Globant.</p>
      </div>

      <div class="row">
        <div class="col-md-2 studio bkg-green">
          <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-01">
            <img src="<?php print path_to_theme(); ?>/assets/studios/gaming.png" alt="Lorem">
            <span class="studio-overlay">
              Enim eiusmod high life accusamus terry richardson ad squid
              <span class="studio-name">Gaming</span>
            </span>
          </a>
        </div>
        <div class="col-md-2 studio bkg-orange">
          <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-02">
            <img src="<?php print path_to_theme(); ?>/assets/studios/quality-engineering.png" alt="Lorem">
            <span class="studio-overlay">
              Enim eiusmod high life accusamus terry richardson ad squid
              <span class="studio-name">Qualit Engineering</span>
            </span>
          </a>
        </div>
        <div class="col-md-2 studio bkg-blue">
          <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-03">
            <img src="<?php print path_to_theme(); ?>/assets/studios/ux-and-social.png" alt="Lorem">
            <span class="studio-overlay">
              Enim eiusmod high life accusamus terry richardson ad squid
              <span class="studio-name">UX & Social</span>
            </span>
          </a>
        </div>
        <div class="col-md-2 studio bkg-green">
          <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-04">
            <img src="<?php print path_to_theme(); ?>/assets/studios/enterprise-consumerization.png" alt="Lorem">
            <span class="studio-overlay">
              Enim eiusmod high life accusamus terry richardson ad squid
              <span class="studio-name">Enterprise Consumerization</span>
            </span>
          </a>
        </div>
        <div class="col-md-2 studio bkg-violet">
          <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-05">
            <img src="<?php print path_to_theme(); ?>/assets/studios/wearables-and-internet-of-the-things.png" alt="Lorem">
            <span class="studio-overlay">
              Enim eiusmod high life accusamus terry richardson ad squid
              <span class="studio-name">Wearables & Internet of Things</span>
            </span>
          </a>
        </div>
        <div class="col-md-2 studio bkg-orange">
          <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-06">
            <img src="<?php print path_to_theme(); ?>/assets/studios/digital-content.png" alt="Lorem">
            <span class="studio-overlay">
              Enim eiusmod high life accusamus terry richardson ad squid
              <span class="studio-name">Digital Content</span>
            </span>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2 studio bkg-blue">
          <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-07">
            <img src="<?php print path_to_theme(); ?>/assets/studios/after-going-live.png" alt="Lorem">
            <span class="studio-overlay">
              Enim eiusmod high life accusamus terry richardson ad squid
              <span class="studio-name">After Going Live</span>
            </span>
          </a>
        </div>
        <div class="col-md-2 studio bkg-violet">
          <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-08">
            <img src="<?php print path_to_theme(); ?>/assets/studios/product-innovation.png" alt="Lorem">
            <span class="studio-overlay">
              Enim eiusmod high life accusamus terry richardson ad squid
              <span class="studio-name">Product Innovation</span>
            </span>
          </a>
        </div>
        <div class="col-md-2 studio bkg-green">
          <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-09">
            <img src="<?php print path_to_theme(); ?>/assets/studios/consumer-experience.png" alt="Lorem">
            <span class="studio-overlay">
              Enim eiusmod high life accusamus terry richardson ad squid
              <span class="studio-name">Consumer Experience</span>
            </span>
          </a>
        </div>
        <div class="col-md-2 studio bkg-blue">
          <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-10">
            <img src="<?php print path_to_theme(); ?>/assets/studios/big-data-and-high-performance.png" alt="Lorem">
            <span class="studio-overlay">
              Enim eiusmod high life accusamus terry richardson ad squid
              <span class="studio-name">Big Data & High Performance</span>
            </span>
          </a>
        </div>
        <div class="col-md-2 studio bkg-orange">
          <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-11">
            <img src="<?php print path_to_theme(); ?>/assets/studios/mobile.png" alt="Lorem">
            <span class="studio-overlay">
              IDC: Top vendors for mobile application development
              <span class="studio-name">Mobile</span>
            </span>
          </a>
        </div>
        <div class="col-md-2 studio bkg-green">
          <a href="#" class="studio-content" data-toggle="modal" data-target="#studio-12">
            <img src="<?php print path_to_theme(); ?>/assets/studios/cloud-computing-and-infrastructure.png" alt="Lorem">
            <span class="studio-overlay">
              Enim eiusmod high life accusamus terry richardson ad squid
              <span class="studio-name">Cloud Computing & Infrastructure</span>
            </span>
          </a>
        </div>
      </div>

      <!--======== Studios Modals ========-->
      <!-- Consumer Experience -->
      <div class="modal fade green-base" id="studio-09" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <div class="modal-column-left">
                <h4 class="modal-title" id="myModalLabel">IDC: Top vendors for mobile application development</h4>
                <p class="studio-title"><strong>Consumer Experience</strong></p>
              </div>
            </div>
            <div class="modal-body">
              <div class="modal-column-left">
                <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
              </div>
              <div class="modal-column-right">
                <img class="modal-image" src="<?php print path_to_theme(); ?>/assets/studios/modal-IDC-logo.png" alt="Lorem">
              </div>
            </div>
            <div class="modal-footer">
              <p>Fuente: <span>IDC</span></p>
            </div>
          </div>
        </div>
      </div>
      <!-- Big Data & High Performance -->
      <div class="modal fade blue-base" id="studio-10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <div class="modal-column-left">
                <h4 class="modal-title" id="myModalLabel">IDC: Top vendors for mobile application development</h4>
                <p class="studio-title"><strong>Big Data & High Performance</strong></p>
              </div>
            </div>
            <div class="modal-body">
              <div class="modal-column-left">
                <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
              </div>
              <div class="modal-column-right">
                <img class="modal-image" src="<?php print path_to_theme(); ?>/assets/studios/modal-IDC-logo.png" alt="Lorem">
              </div>
            </div>
            <div class="modal-footer">
              <p>Fuente: <span>IDC</span></p>
            </div>
          </div>
        </div>
      </div>
      <!-- Mobile -->
      <div class="modal fade orange-base" id="studio-11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <div class="modal-column-left">
                <h4 class="modal-title" id="myModalLabel">IDC: Top vendors for mobile application development</h4>
                <p class="studio-title"><strong>Mobile</strong></p>
              </div>
            </div>
            <div class="modal-body">
              <div class="modal-column-left">
                <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
              </div>
              <div class="modal-column-right">
                <img class="modal-image" src="<?php print path_to_theme(); ?>/assets/studios/modal-IDC-logo.png" alt="Lorem">
              </div>
            </div>
            <div class="modal-footer">
              <p>Fuente: <span>IDC</span></p>
            </div>
          </div>
        </div>
      </div>

    </section>
      
    <section id="row4" class="glb-section hero contact" style="background-image: url('<?php print path_to_theme(); ?>/assets/bkg_contact.png');">
      <div class="container">
        <?php print $content['row3']; ?>

        <h2 class="section-title">Sumate a nuestro equipo</h2>
        <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.</p>
      </div>
    </section>
  </div>
</div>
