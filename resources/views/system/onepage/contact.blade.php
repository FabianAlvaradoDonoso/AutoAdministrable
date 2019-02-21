@extends('system.layouts.master')
@section('content')
<div id="colorlib-about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-push-6 animate-box">
                <img class="img-responsive about-img" src="{{asset('vetportugal/images/foto1.jpeg')}}" alt="">
            </div>
            <div class="col-md-6 col-md-pull-6 animate-box">
                <h2>Acerca de nosotros</h2>
                <p>
                    Vetportugal es medicina de alto estándar para las mascotas de hoy. Sabemos que son parte importante de nuestra familia y nuestras actividades diarias, es por eso que queremos estar junto a ustedes. Contamos con profesionales de excelencia y en constante actualización, exámenes complementarios de alto valor diagnóstico. Ven a conocernos!.
                </p>
                    <div class="fancy-collapse-panel">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                 <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingOne">
                         <h4 class="panel-title">
                             <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Nuestra Misión
                             </a>
                         </h4>
                     </div>
                     <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                         <div class="panel-body">
                             <div class="row">
                                          <div class="col-md-6">
                                              <p>Lorem ipsum dolor sit cuchuflí barquillo bacán jote gamba listeilor po cahuín, luca melón con vino pichanga coscacho ni ahí peinar la muñeca chuchada al chancho achoclonar. Chorrocientos pituto ubicatex huevo duro bolsero cachureo el hoyo del queque en cana huevón el año del loly hacerla corta impeque de miedo quilterry la raja longi ñecla. Hilo curado rayuela carrete quina guagua lorea piola ni ahí. </p>
                                          </div>
                                          <div class="col-md-6">
                                              <p>Lorem ipsum dolor sit cuchuflí barquillo bacán jote gamba listeilor po cahuín, luca melón con vino pichanga coscacho ni ahí peinar la muñeca chuchada al chancho achoclonar. Chorrocientos pituto ubicatex huevo duro bolsero cachureo el hoyo del queque en cana huevón el año del loly hacerla corta impeque de miedo quilterry la raja longi ñecla. Hilo curado rayuela carrete quina guagua lorea piola ni ahí.</p>
                                          </div>
                                      </div>
                         </div>
                     </div>
                 </div>
                 <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingTwo">
                         <h4 class="panel-title">
                             <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Nuestra Visión
                             </a>
                         </h4>
                     </div>
                     <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                         <div class="panel-body">
                             <p>Lorem ipsum dolor sit cuchuflí barquillo bacán jote gamba listeilor po cahuín, luca melón con vino pichanga coscacho ni ahí peinar la muñeca chuchada al chancho achoclonar. Chorrocientos pituto ubicatex huevo duro bolsero cachureo el hoyo del queque en cana huevón el año del loly hacerla corta impeque de miedo quilterry <strong>la raja</strong>  longi ñecla. Hilo curado rayuela carrete quina guagua lorea piola ni ahí.</p>
                                        <ul>
                                            <li>Separated they live in Bookmarksgrove right</li>
                                            <li>Separated they live in Bookmarksgrove right</li>
                                        </ul>
                         </div>
                     </div>
                 </div>
                 <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingThree">
                         <h4 class="panel-title">
                             <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Por qué elegirnos
                             </a>
                         </h4>
                     </div>
                     <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                         <div class="panel-body">
                             <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                         </div>
                     </div>
                 </div>
              </div>
           </div>
            </div>
        </div>
    </div>
</div>
<div id="colorlib-contact">
    <div class="container">
        <div class="row">

            <div class="col-md-12 animate-box">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Información de Contacto</h2>
                        <form action="#">
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <label for="fname">Nombres</label>
                                    <input type="text" id="fname" class="form-control mb" placeholder="Sus nombres">
                                </div>
                                <div class="col-md-6">
                                    <label for="lname">Apellidos</label>
                                    <input type="text" id="lname" class="form-control" placeholder="Sus apellidos">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="email">Email</label>
                                    <input type="text" id="email" class="form-control" placeholder="ejemplo@email.com">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="subject">Asunto</label>
                                    <input type="text" id="subject" class="form-control" placeholder="Asunto del mensaje">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="message">Mensaje</label>
                                    <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Cuéntanos"></textarea>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" value="Enviar" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="colorlib-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3328.7681654762323!2d-70.63567708480045!3d-33.455346080772664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c565603f41ad%3A0xf1a06253bd5d99f5!2sVetPortugal-Centro+Veterinario+Integral!5e0!3m2!1ses!2scl!4v1550677404749"
                                width="600"
                                height="450"
                                frameborder="0"
                                style="border:0"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
