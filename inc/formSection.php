<div class="formSection">
<div class="container"> 
    <div class="row">
      <div class="col-xs-12">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-7 col-lg-5" id="backgroundFormSection">
            <p id="titulo">
              <strong>
              No lo pienses más. <br>
              ¡Inscribete ahora!
              </strong>
            </p>
          </div>  

          <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3">
            
          </div> 

          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
            
          </div> 
        </div>
      </div>

      <div class="col-xs-12">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-7 col-lg-5">
            <p id="texto">
              Completar este formulario te pondrá directo en la tv
              y solo te tomará algunos segundos terminarlo.
              No lo pienses más y empieza ya.
            </p>
          </div>  

          <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3">
            
          </div> 
              
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
            
          </div> 
        </div>
      </div>
    </div>    









<div ng-app="myApp" ng-controller="formController">
        <div class="row">
          <div class="col-xs-12">
                    <form action="inc/insertarAitv.php" method="post" class="form-horizontal">
                      <div class="form-group">
                        <label for="input" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 control-label"><p>Nombres :</p></label>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                          <input type="text" class="form-control" name="nombre" required=""/>
                        </div>
                      </div>
                        



          <div class="form-group">
                        <label for="input" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 control-label"><p>Apellidos :</p></label>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                          <input type="text" class="form-control" id="input" placeholder="" required="" name="apellidos">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="input" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 control-label"><p>Fecha de nacimiento :</p></label>
                        <div class="container">

                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <input type="text" class="form-control" placeholder="Año/Mes/Día"  id="example1" required="" name="nacimiento">
                        </div>
                      </div>
                      </div>

                      <div class="form-group">
                        <label for="input" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 control-label"><p>Genero :</p></label>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                          <select class="form-control" id="" required="" name="genero">
                            <option>* Desplegar</option>
                            <option>Masculino</option>
                            <option>Femenino</option>
                          </select>
                        </div>
                      </div>
      <!--:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
                      <hr>
                      <div class="form-group" id="fotosObligatorias">
                        <label for="input" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 control-label"><p></p></label>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          <div class="row">

                      
                        

                      <!--********************-->
                        <div class="fotos">
                          <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                              <div class="container">
                                  <div class="row">
                                   
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                      <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>
        
                                      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                              <img src="images/aspirante/cara.png" alt="" height="50px" id="img1">
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
                                              <input type="file" id="inputFile1">
                                            </div>
                                        </div>
                                      </div>

                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>
                                      </div>
                                      <hr>
                                    </div>
  
                                      

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                      <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>

                                      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                              <img src="images/aspirante/medio.png" alt="" height="90px" id="img2">
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
                                              <input type="file" id="inputFile2">
                                            </div>
                                        </div>
                                      </div>

                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>
                                      </div>
                                      <hr>
                                    </div>
                                    

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                      <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>

                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                          <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                              <img src="images/aspirante/completo.png" alt="" height="180px" id="img3">
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> 
                                              <input type="file" id="inputFile3">
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"></div>
                                      </div>
                                    </div>

                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      <!--********************-->

                    
      
                        </div>
                        </div>
                       
                      </div>
                      <hr>
      <!--:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::-->
                      <div class="form-group">
                        <label for="input" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 control-label"><p>Correo electrónico :</p></label>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                          <input type="email" class="form-control" id="input" placeholder="" required="" name="correo">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="input" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 control-label"><p>Celular :</p></label>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                          <input type="text" class="form-control" id="input" placeholder="" required="" name="celular">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="input" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 control-label"><p>Ciudad de residencia :</p></label>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                          <input type="text" class="form-control" id="input" placeholder="" required="" name="residencia">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="input" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 control-label"><p>Cédula:</p></label>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                          <input type="text" class="form-control" id="input" placeholder="" required="" name="cedula">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="input" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 control-label"><p>Estatura :</p></label>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                          <input type="text" class="form-control" id="input" placeholder="" required="" name="estatura"
                          data-toggle="tooltip" data-placement="right" title="Aca un disclaimer con la instrucción para 
                          escribir correctamente el peso ......................">
                        </div>
                      </div>
                    
                    <hr>
                    <div id="inputPeso">
                      <div class="form-group">
                        <label for="input" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 control-label"><p>Peso :</p></label>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                          <input type="text" class="form-control" id="input" placeholder="" required="" name="peso"
                          data-toggle="tooltip" data-placement="right" title="Aca un disclaimer con la instrucción para 
                          escribir correctamente el peso ......................">
                        </div>
                      </div>
                    </div>
                    <hr>

                      <div class="form-group">
                        <label for="input" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 control-label"><p>Conduce :</p></label>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                          <select class="form-control" id="" required="" name="conduce">
                            <option>* Desplegar</option>
                            <option>Moto</option>
                            <option>Carro</option>
                            <option>Ambos</option>
                          </select>
                        </div>
                      </div>
                     <div class="form-group">
                        <label for="input" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 control-label"><p>Color piel :</p></label>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                          <select class="form-control" id="" required="" name="piel">
                            <option>* Desplegar</option>
                            <option>Amarilla</option>
                            <option>Blanca</option>
                            <option>Indigena</option>
                            <option>Mestiza</option>
                            <option>Negra</option>
                            <option>Roja</option>
                            <option>Trigueña</option>
                            <option>Otro</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="input" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 control-label"><p>Color ojos :</p></label>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                          <select class="form-control" id="" required="" name="ojos">
                            <option>* Desplegar</option>
                            <option>Cafes</option>
                            <option>Azules</option>
                            <option>Negros</option>
                            <option>Verdes</option>
                            <option>Otro</option>
                          </select>
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="input" class="col-sm-4 control-label"><p>Cabello :</p></label>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                          <select class="form-control" id="" required="" name="cabello">
                            <option>* Desplegar</option>
                            <option>Castaño oscuro</option>
                            <option>Castaño</option>
                            <option>Negro</option>
                            <option>Rojo</option>
                            <option>Rubio</option>
                            <option>Otro</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="input" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 control-label"><p>Experiencia en tv :</p></label>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                          <textarea class="form-control" rows="5" placeholder="No te preocupes, no es necesaria..." name="experiencia"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="input" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 control-label"><p>Deportes :</p></label>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                          <textarea class="form-control" rows="5" placeholder="No te preocupes, no es necesaria..." name="deportes"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="input" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 control-label"><p>Habiliddes :</p></label>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                          <textarea class="form-control" rows="5" placeholder="No te preocupes, no es necesaria..." name="habilidades"></textarea>
                        </div>
                      </div>
                   


                      
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      
                      </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" id="terminos">

                            Al hacer clic en "Enviar formulario", aceptas nuestros
                              <div data-toggle="modal" data-target=".bs-example-modal-lg">
                                <a href=""> términos y condiciones</a>
                              </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                      
                      </div>
                    </div>


                      <div class="form-group">
                      <label for="input" class="col-sm-4 control-label"></label>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                          <button type="submit" class="btn btn-default btn-lg"><strong>Enviar formulario</strong></button>
                        </div>
                      </div>




  


                      <!-- Large modal -->
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            <div type="" class="" data-dismiss="modal"><a href="#">X</a></div>
                              <?php include'inc/terminos.php'; ?>
                            </div>
                          </div>
                        </div>
                      <!-- END Large modal -->
    


                    </form>
          </div>
        </div>
</div>

</div>
</div>