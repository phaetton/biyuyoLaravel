<!DOCTYPE html>
<html lang="en">
<?php
include 'includes/headercontacto.php'; 
?>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="text-center">
                <h3 class="text-grey mt-5">Contáctanos</h3>
            </div>
            <section class="form_wrap col-md-8 col-sm-8">
                <form action="enviar.php" method="post" class="form_contact">
                    <h2>Envía un mensaje</h2>
                    <div class="user_info">
                        <label for="names">Nombres *</label>
                        <input type="text" id="names" name="nombre" placeholder="Escribe tu nombre" required>

                        <label for="phone">Teléfono / Celular</label>
                        <input type="text" id="phone" name="telefono" placeholder="Escribe tu número celular">

                        <label for="email">Correo electrónico *</label>
                        <input type="text" id="email" name="correo" required placeholder="Ejemplo@gmail.com">

                        <label for="mensaje">Mensaje*</label>
                        <textarea id="mensaje" name="mensaje" required placeholder="Escríbenos un mensaje"></textarea>
                        <div class="row">
                            <div class="col-6">
                                <input type="submit" class="btn btn-primary icoplace2" value="︁ Enviar mensaje" id="btnSend">
                            </div>
                            <div class="col-6">
                            <input type="button" class="btn btn-info icoplace" value="  Participa "id="btn" readonly> </a>-->
                            </div>
                        </div>
                    </div>
                </form>

            </section>
        </div>
    </div>
</body>
<script type="text/javascript" src="js/buscador.js"></script>
<?php
include 'includes/footer.php'; 
?>
</html>
