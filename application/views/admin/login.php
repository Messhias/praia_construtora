
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
    <link href="<?=site_url('vendors/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=site_url('vendors/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=site_url('vendors/nprogress/nprogress.css');?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?=site_url('vendors/animate.css/animate.min.css');?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=site_url('build/css/custom.min.css');?>" rel="stylesheet">
    <link href="<?=site_url('build/css/admin.css');?>" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="<?=site_url('ajax/loginAdmin');?>" 
            method="post"
            name='frmLoginAdmin' id='frmLoginAdmin'>
              <h1><img src="<?=site_url('assets/img/logo.png');?>" alt="Praia Atlantica logo"></h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" 
                name="username" id="username" required="true" />
              </div>
              <div>
                <input type="password"
                name="pass" id="pass" class="form-control" placeholder="Password" required="true" />
              </div>
              <div>
                <button type='submit' 
                class="btn btn-default submit">Entrar</button>
              </div>

              <div class="clearfix"></div>
                  <p>© <?=date('Y');?> All Rights Reserved - Praia Atlantica</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        
    </div>
    
<script type="text/javascript" src="<?=site_url('assets/js/jquery-2.1.0.min.js');?>"></script>
<script type="text/javascript" src="<?=site_url('assets/js/jquery.form.min.js');?>"></script>
<script type="text/javascript" src="<?=site_url('adm/admin.js');?>"></script>
<div class='lmask'></div>
  </body>
</html>
