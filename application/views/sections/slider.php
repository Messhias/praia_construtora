<section id="slider">
        <div class="flexslider loading">
            <div id="loading-icon"><i class="fa fa-cog fa-spin"></i></div>
            <ul class="slides">
                <li class="slide slide-has-parallax"><img src="<?=site_url('assets/img/slide1.jpg');?>" class="parallax-bg" alt=""></li>
                <li class="slide slide-has-parallax"><img src="<?=site_url('assets/img/slide2.jpg');?>" class="parallax-bg" alt=""></li>
                <li class="slide slide-has-parallax"><img src="<?=site_url('assets/img/slide3.jpg');?>" class="parallax-bg" alt=""></li>
                <li class="slide slide-has-parallax"><img src="<?=site_url('assets/img/slide4.jpg');?>" class="parallax-bg" alt=""></li>
                <li class="slide slide-has-parallax"><img src="<?=site_url('assets/img/slide5.jpg');?>" class="parallax-bg" alt=""></li>
            </ul><!-- /.slides -->
        </div><!-- /.flexslider -->
        <div class="slider-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="title">
                            <h2 style="color: #fff;">2 e 3 dormitórios <span style="font-weight: lighter;">na Riviera</span></h2>
                            <figure class="subtitle" style="color: #fff;">Sua casa de campo da praia</figure>
                            <figure class="subtitle" style="color: #fff;"></figure>
                            <i class="fa fa-arrow-circle-o-right"></i>
                        </div><!-- /.title -->
                    </div><!-- /.col-md-8 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="form-slider-wrapper form-has-parallax">
                            <header>
                                <h3 style="text-align: center;">Mais Informações:</h3>
                            </header>
                            <hr>
                            <form action="<?=site_url('welcome/sendInformation');?>" 
                            method = "post" enctype="multipart/form-data"
                            name='infoForm'
                            id="infoForm">
                                <div class="form-group">
                                    <label for="name">Nome<em>*</em></label>
                                    <input type="text" class="form-control" id="name" name="name" >
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <label for="email">Email<em>*</em></label>
                                    <input type="email" class="form-control" id="email" name="email" >
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <label for="phone">Telefone<em>*</em></label>
                                    <input type="text" class="form-control" id="phone" name="phone" >
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <label for="obs">Observações</label>
                                    <textarea id="obs" name='obs' rows="3" cols="30" style="color: black;" placeholder="Olá, gostaria de receber mais informações sobre o Viva Feliz."></textarea>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <div id="form-slider-status"></div>
                                    <button type="submit" id="form-slider-submit" class="btn btn-default">Enviar</button>
                                </div><!-- /.form-group -->
                            </form><!-- /#form-slider -->
                            <figure>*Campos requeridos</figure>
                        </div><!-- /.form-slider-wrapper -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.slider-banner -->
    </section><!-- /#slider -->