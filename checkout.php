<?php  
  session_start();
  if (!isset($_SESSION['carrito'])) {
    header('Location: ./index.php'); 
  }
  $arreglo = $_SESSION['carrito'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    <?php include("./layouts/header.php"); ?> 
   <form action="./thankyou.php" method="post">
      <div class="site-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-12">
              <div class="border p-4 rounded" role="alert">
                Returning customer? <a href="#">Click here</a> to login
              </div>
            </div>
          </div>
          <div class="row">     
            <div class="col-md-6 mb-5 mb-md-0">
                <h2 class="h3 mb-3 text-black">Detalles de Facturacion</h2>
                <div class="p-3 p-lg-5 border">
                  <div class="form-group row">
                    <div class="col-md-12">
                      <label for="c_country" class="text-black">Ciudad<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_country" name="country"  placeholder="Ciudad de residencia">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="c_fname" class="text-black">Nombre<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_fname" name="c_fname">
                    </div>
                    <div class="col-md-6">
                      <label for="c_lname" class="text-black">Apellido<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_lname" name="c_lname">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-12">
                      <label for="c_companyname" class="text-black">Nombre de Empresa</label>
                      <input type="text" class="form-control" id="c_companyname" name="c_companyname">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-12">
                      <label for="c_address" class="text-black">Dirección<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Dirección">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-md-6">
                      <label for="c_state_country" class="text-black">Barrio<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_state_country" name="c_state_country">
                    </div>
                    <div class="col-md-6">
                      <label for="c_postal_zip" class="text-black">Código Postal<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
                    </div>
                  </div>

                  <div class="form-group row mb-5">
                    <div class="col-md-6">
                      <label for="c_email_address" class="text-black">Correo Electrónico<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_email_address" name="c_email_address" placeholder="Email">
                    </div>
                    <div class="col-md-6">
                      <label for="c_phone" class="text-black">Telefono<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Número de teléfono">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="c_create_account" class="text-black" data-toggle="collapse" href="#create_an_account" role="button" aria-expanded="false" aria-controls="create_an_account"><input type="checkbox" value="1" id="c_create_account"> ¿Crea una cuenta?</label>
                    <div class="collapse" id="create_an_account">
                      <div class="py-2">
                        <p class="mb-3">Cree una cuenta ingresando la información a continuación. Si es un cliente recurrente, inicie sesión en la parte superior de la página.</p>
                        <div class="form-group">
                          <label for="c_account_password" class="text-black">Contraseña de la cuenta</label>
                          <input type="password" class="form-control" id="c_account_password" name="c_account_password" placeholder="Contraseña">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="c_order_notes" class="text-black">Dejanos tu opinion, sugerencia o comentario</label>
                    <textarea name="comentario" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Escribe aquí tu comentario..."></textarea>
                  </div>

                </div>
            </div>
            <div class="col-md-6">

                <div class="row mb-5">
                  <div class="col-md-12">
                    <h2 class="h3 mb-3 text-black">Coupon Code</h2>
                    <div class="p-3 p-lg-5 border">
                      
                      <label for="c_code" class="text-black mb-3">Enter your coupon code if you have one</label>
                      <div class="input-group w-75">
                        <input type="text" class="form-control" id="c_code" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="button-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-primary btn-sm" type="button" id="button-addon2">Apply</button>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                
                <div class="row mb-5">
                  <div class="col-md-12">
                    <h2 class="h3 mb-3 text-black">Your Order</h2>
                    <div class="p-3 p-lg-5 border">
                      <table class="table site-block-order-table mb-5">
                        <thead>
                          <th>Product</th>
                          <th>Total</th>
                        </thead>
                        <tbody>
                          <?php 
                            $total = 0;
                            for ($i=0; $i < count($arreglo); $i++) { 
                              $total=$total + ($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad']);
                            ?>
                              <tr>
                                <td><?php echo $arreglo[$i]['Nombre']; ?></td>
                                <td>$<?php echo number_format($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad'], 0, '.', ','); ?></td>
                              </tr>
                            <?php } ?>
                          <tr>
                            <td class="text-black font-weight-bold"><strong>Total del pedido</strong></td>
                            <td class="text-black font-weight-bold"><strong>$<?php echo number_format($total, 0, '.', ',') ?></strong></td>
                          </tr>
                        </tbody>
                      </table>

                      <div class="border p-3 mb-3">
                        <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>

                        <div class="collapse" id="collapsebank">
                          <div class="py-2">
                            <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                          </div>
                        </div>
                      </div>

                      <div class="border p-3 mb-3">
                        <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Cheque Payment</a></h3>

                        <div class="collapse" id="collapsecheque">
                          <div class="py-2">
                            <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                          </div>
                        </div>
                      </div>

                      <div class="border p-3 mb-5">
                        <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

                        <div class="collapse" id="collapsepaypal">
                          <div class="py-2">
                            <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <button class="btn btn-primary btn-lg py-3 btn-block" type="submit">Place Order</button>
                      </div>

                    </div>
                  </div>
                </div>
            </div>
          </div>
          <!-- </form> -->
        </div>
      </div>
    </form>
    <?php include("./layouts/footer.php"); ?> 
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script> <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>