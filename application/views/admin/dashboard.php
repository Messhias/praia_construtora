
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Praia Atlantica - area administrativa</title>

    <!-- Bootstrap -->
     <script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"07388794b836301a6131a75afbf1e572",petok:"4038895c875e5e8356df561c9fcf35206d3a3768-1493672774-1800",zone:"colorlib.com",rocket:"a",apps:{}}];document.write('<script type="text/javascript" src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=85b614c0f6/cloudflare.min.js"><'+'\/script>');}}catch(e){};
//]]>
</script>
<link href="<?=site_url('vendors/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=site_url('vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=site_url('vendors/nprogress/nprogress.css')?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?=site_url('vendors/iCheck/skins/flat/green.css')?>" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?=site_url('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=site_url('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=site_url('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=site_url('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=site_url('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=site_url('build/css/custom.min.css')?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
        
        <!-- page content -->
        <div class="container" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Formulários prenchido através do site</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
					
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>Telefone</th>
                          <th>E-mail</th>
                          <th>Observações</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php if($clients->num_rows() == 0) : ?>
                            <tr>
                                <td colspan=4>
                                    <center>NENHUM CONTATO EFETUADO </center>
                                </td>
                            </tr>
                          <?php else: ?>
                            <?php foreach($clients->result() as $key => $value): ?>
                                <tr>
                                    <td><?=$value->name?></td>
                                    <td><?=$value->telphone?></td>
                                    <td><?=$value->email?></td>
                                    <td><?=$value->observation?></td>
                                </tr>
                            <?php endforeach; ?>
                          <?php endif; ?>
                      </tbody>
                    </table>
					
					
                  </div>
                </div>
              </div>


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Quem baixou as plantas</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
          
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>E-mail</th>
                          <th>planta</th>
                          <th>Data</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php if($plant_request->num_rows() == 0) : ?>
                            <tr>
                                <td colspan=4>
                                    <center>NENHUM CONTATO EFETUADO </center>
                                </td>
                            </tr>
                          <?php else: ?>
                            <?php foreach($plant_request->result() as $key => $value): ?>
                                <tr>
                                    <td><?=$value->email?></td>
                                    <td><?=$value->plant_link?></td>
                                    <td><?=date('d/m/Y',strtotime($value->data))?></td>
                                </tr>
                            <?php endforeach; ?>
                          <?php endif; ?>
                      </tbody>
                    </table>
          
          
                  </div>
                </div>
              </div>
              
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Formulários de contato</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
          
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>E-mail</th>
                          <th>Mensagem</th>
                          <th>Data</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php if($contact_form->num_rows() == 0) : ?>
                            <tr>
                                <td colspan=4>
                                    <center>NENHUM CONTATO EFETUADO </center>
                                </td>
                            </tr>
                          <?php else: ?>
                            <?php foreach($contact_form->result() as $key => $value): ?>
                                <tr>
                                    <td><?=$value->name?></td>
                                    <td><?=$value->email?></td>
                                    <td><?=$value->message?></td>
                                    <td><?=date('d/m/Y',strtotime($value->date))?></td>
                                </tr>
                            <?php endforeach; ?>
                          <?php endif; ?>
                      </tbody>
                    </table>
          
          
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- /page content -->

      </div>
    </div>

    <!-- jQuery -->
    <script data-rocketsrc="<?=site_url('vendors/jquery/dist/jquery.min.js');?>'" type="text/rocketscript"></script>
    <!-- Bootstrap -->
    <script data-rocketsrc="<?=site_url('vendors/bootstrap/dist/js/bootstrap.min.js');?>'" type="text/rocketscript"></script>
    <!-- FastClick -->
    <script data-rocketsrc="<?=site_url('vendors/fastclick/lib/fastclick.js');?>'" type="text/rocketscript"></script>
    <!-- NProgress -->
    <script data-rocketsrc="<?=site_url('vendors/nprogress/nprogress.js');?>'" type="text/rocketscript"></script>
    <!-- iCheck -->
    <script data-rocketsrc="<?=site_url('vendors/iCheck/icheck.min.js');?>'" type="text/rocketscript"></script>
    <!-- Datatables -->
    <script data-rocketsrc="<?=site_url('vendors/datatables.net/js/jquery.dataTables.min.js');?>'" type="text/rocketscript"></script>
    <script data-rocketsrc="<?=site_url('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js');?>'" type="text/rocketscript"></script>
    <script data-rocketsrc="<?=site_url('vendors/datatables.net-buttons/js/dataTables.buttons.min.js');?>'" type="text/rocketscript"></script>
    <script data-rocketsrc="<?=site_url('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js');?>'" type="text/rocketscript"></script>
    <script data-rocketsrc="<?=site_url('vendors/datatables.net-buttons/js/buttons.flash.min.js');?>'" type="text/rocketscript"></script>
    <script data-rocketsrc="<?=site_url('vendors/datatables.net-buttons/js/buttons.html5.min.js');?>'" type="text/rocketscript"></script>
    <script data-rocketsrc="<?=site_url('vendors/datatables.net-buttons/js/buttons.print.min.js');?>'" type="text/rocketscript"></script>
    <script data-rocketsrc="<?=site_url('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js');?>'" type="text/rocketscript"></script>
    <script data-rocketsrc="<?=site_url('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js');?>'" type="text/rocketscript"></script>
    <script data-rocketsrc="<?=site_url('vendors/datatables.net-responsive/js/dataTables.responsive.min.js');?>'" type="text/rocketscript"></script>
    <script data-rocketsrc="<?=site_url('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js');?>'" type="text/rocketscript"></script>
    <script data-rocketsrc="<?=site_url('vendors/datatables.net-scroller/js/dataTables.scroller.min.js');?>'" type="text/rocketscript"></script>
    <script data-rocketsrc="<?=site_url('vendors/jszip/dist/jszip.min.js');?>'" type="text/rocketscript"></script>
    <script data-rocketsrc="<?=site_url('vendors/pdfmake/build/pdfmake.min.js');?>'" type="text/rocketscript"></script>
    <script data-rocketsrc="<?=site_url('vendors/pdfmake/build/vfs_fonts.js');?>'" type="text/rocketscript"></script>

    <!-- Custom Theme Scripts -->
    <script data-rocketsrc="../build/js/custom.min.js" type="text/rocketscript"></script>

  </body>
</html>