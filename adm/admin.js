//var site_url = "http://localhost/praia_construtora/";
var site_url = "http://wtsolucoesdigitais.com/atlantica/";

$(document).ready(function() {

    var login = {
        beforeSend: function() {
            $(".lmask").show();
        },
        error: function(e) {

        },
        success: function(success) {
            if (success.code == 200)
                $(".lmask").hide();


            window.location.replace(site_url + "admin/dashboard");

        },
        complete: function(e) {}
    }

    $("#frmLoginAdmin").ajaxForm(login);

});