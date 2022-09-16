 <div class="footer" id="contacto">

     <div class="row m-0">
         <div class="col-xs-12 col-sm-12 col-md-12 centro">

             <div class="modal-header mb-2 justify-content-center">
                 <h4>CONTACTAME</h4>
             </div>

             <div class="card card-personalizada mb-4">
                 <div class="card-body">



                     <div class="container">

                         <div class="modal-header mb-5">
                             <p>Si tienes una critica, encontraste un bug en esta web, tienes una idea para este sitio o
                                 quieres
                                 hablar de
                                 negocios,
                                 estas en el lugar indicado.</p>
                         </div>

                         <form action="correos.php" method="POST">
                             <ul class="flex-outer">
                                 <li>
                                     <label for="nombre"><strong>Nombre Completo</strong></label>
                                     <input type="text" name="nombre" placeholder="Ingresa Nombre"
                                         class="rect rounded-pill" required>
                                 </li>
                                 <li>
                                     <label for="correo"><strong>Correo</strong></label>
                                     <input type="email" name="email" placeholder="Ingresa Correo"
                                         class="rect rounded-pill" required>
                                 </li>
                                 <li>
                                     <label for="fono"><strong>Teléfono </strong></label>
                                     <input type="text" name="telefono" placeholder="Ingresa Teléfono"
                                         class="rect rounded-pill" required>
                                 </li>
                                 <li>
                                     <label for="asunto"><strong>asunto </strong></label>
                                     <input rows="6" name="asunto" class="rect rounded-pill"
                                         placeholder="Ingresa el Asunto" required>
                                 </li>
                                 <li>
                                     <label for="mensaje"><strong>mensaje </strong></label>
                                     <textarea rows="6" name="mensaje" class="rect" placeholder="Ingresa Mensaje" required></textarea>
                                 </li>

                                 <div class="modal-footer">

                                     <li class="centrar-boto">
                                         <button type="submit" class="boton">Enviar <i
                                                 class="fa-solid fa-paper-plane ml-2"></i></button>
                                     </li>
                                 </div>
                             </ul>
                         </form>
                     </div>
                 </div>
             </div>

         </div>

     </div>



 </div>
