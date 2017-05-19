<section id="features" class="block">
        <div class="container">
            <header><h3>Baixar plantas</h3></header>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <h4>Faça o download das plantas do empreendimento!</h4>
                </div><!-- /.col-md-8 -->
                <div class="col-md-8 col-sm-8">
                    
                     <form action='<?=site_url('welcome/downloadPlant');?>' 
                     name='form-slider' method='post'
                     enctype="multipart/form-data"
                     id="form-slider">
                                <div class="form-group">
                                    <label for="email">Email<em>*</em></label>
                                    <input type="email" class="form-control want-more-input-text" id="email" name="email" required='true'>
                                </div><!-- /.form-group -->
                             
                                <div class="form-group">
                                    <div id="form-slider-status"></div>
                                    <button type="submit" id="form-slider-submit" class="btn btn-default">Enviar</button>
                                </div><!-- /.form-group -->
                            </form><!-- /#form-slider -->

                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /#features .block -->