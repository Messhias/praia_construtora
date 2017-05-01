
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Praia Atlântica - Administrador </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form>
              <h1>Area administrativa</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="true" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="true" />
              </div>
              <div>
                <button type='submit' class="btn btn-default submit" href="index.html">Entrar</button>
              </div>

              <div class="clearfix"></div>

                  <h1><img src="assets/img/logo.png" alt="Praia Atlantica logo"></h1>
                  <p>© <?=date('Y');?> All Rights Reserved - Praia Atlantica</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        
    </div>
  </body>
</html>
