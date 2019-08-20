<!DOCTYPE html>
<html lang="en">
<head>
    <title>Atendimento ao Cliente</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<body>


<div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form" action="atendimento/novo.php" method="POST">
				<span class="contact100-form-title">
					Atendimento ao Cliente
				</span>

            <div class="wrap-input100  bg1">
                <span class="label-input100">Nome completo *</span>
                <input class="input100" type="text" placeholder="Digite seu nome completo" name="nome"/>
            </div>

            <div class="wrap-input100  bg1 rs1-wrap-input100">
                <span class="label-input100">Email *</span>
                <input class="input100" type="text" placeholder="Digite seu e-mail " name="email"/>
            </div>

            <div class="wrap-input100 bg1 rs1-wrap-input100">
                <span class="label-input100">Telefone</span>
                <input class="input100" type="text" placeholder="(DD) 9 XXXX-XXXX" name="telefone"/>
            </div>

            <div class="wrap-input100 input100-select bg1">
                <span class="label-input100">Tipo de mensagem *</span>
                <div>
                    <select class="js-select2" id="opcao" name="opcao">
                        <option>Escolha uma opção</option>
                        <option>Elogio</option>
                        <option>Crítica</option>
                        <option>Reclamação</option>
                        <option>Adquirir novo produto</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>

            <div class="wrap-input100 bg1 rs1-wrap-input100">
                <span class="label-input100">Tipo de cliente *</span><br/>
                <label class="input100">
                    <input type="radio" value="novo-cliente" name="tipo_cliente"> Novo cliente
                </label>
                <label class="input100">
                    <input type="radio" value="antigo-cliente" name="tipo_cliente"> Cliente antigo
                </label>
            </div>

            <div class="wrap-input100 bg1 rs1-wrap-input100">
                <span class="label-input100">Deseja receber ligação?</span><br/>
                <br/>
                <label class="input100">
                    <input type="checkbox" id="agree" name="confirmar"/> Sim, pode me ligar
                </label>
            </div>

            <div class="wrap-input100  bg0 ">
                <span class="label-input100">Mensagem do cliente *</span>
                <textarea class="input100" placeholder="Escreva sua mensagem aqui..." name="mensagem_cliente"></textarea>
            </div>

            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn" type="submit">
						<span>
							Abrir atendimento
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
                </button>
            </div>
        </form>
    </div>
</div>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor/select2/select2.min.js"></script>
<script>
    $(".js-select2").each(function(){
        $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2')
        });


        $(".js-select2").each(function(){
            $(this).on('select2:close', function (e){
                if($(this).val() == "Please chooses") {
                    $('.js-show-service').slideUp();
                }
                else {
                    $('.js-show-service').slideUp();
                    $('.js-show-service').slideDown();
                }
            });
        });
    })
</script>
<!--===============================================================================================-->

</body>
</html>
