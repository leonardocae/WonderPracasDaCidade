<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

    <title>Gerente Enzo</title>
</head>

    <body class="vh-100 bg--pattern">
        <div class="container-fluid vh-100">
            <?php 
                $to = "leadsequipeenzo@gmail.com"; // this is your Email address
                $from = $_POST['inputEmail']; // this is the sender's Email address

                $inputNome = $_POST['inputNome'];
                $inputEmail = $_POST['inputEmail'];
                $inputTelefone = $_POST['inputTelefone'];
                $textareaMensagem = $_POST['textareaMensagem'];

                $subject = "Cadastro novo cliente";
                $message = $inputNome . " | " . $inputEmail . " | " . $inputTelefone . " - enviou a mensagem:" . "\n\n" . $textareaMensagem;

                $headers = "De:" . $from;
                mail($to,$subject,$message,$headers) or die("Error!");
            ?>


            <div class="row vh-100 d-flex justify-content-center align-items-center">
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Obrigado, sua mensagem foi enviada com sucesso!</h5>
                        <p class="card-text">Entraremos em contato em breve com todas as informações.</p>
                        <p>Clique em voltar ou aguarde para ser redirecionado em alguns segundos...</p>
                        <a href="index.html" class="btn bg-lavvi text-white">Voltar para o site</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <script language="javascript" type="text/javascript">
            setTimeout(function () {
                window.location.href = "index.html";
            }, 6000);
        </script>
    </body>
</html>