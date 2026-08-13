<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Mediateca</title>
    <link rel="shortcut icon" href="../image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/estilo_cadastro.css">
</head>
<body>
    <div class="cadastro">
        <img src="../image/logob.png" alt="" width="100px" class="logo">
        <div class="input_grup">
            <input type="text" alt="Nome de utilizador" placeholder="">
            <label for="Nome" class="seunome">Digite seu nome</label>
        </div>
        <div class="input_grup" >
            <input type="email" alt="email do utilizador" placeholder="exemplo@mediateca.com">
            <label for="Email" class="seuemail">Digite o seu email</label>
        </div>
        <div class="input_grup" >
            <input type="text" alt="Numero de identificação" maxlength="14" placeholder="1234567890LA123">
            <label for="BI" class="seubi">Digite o Nº do BI</label>
        </div>
        <div class="input_grup" >
            <input type="date" alt="Data de nascimento" placeholder="19/09/2000">
            <label for="Data" class="suadata">Digite a data de nascimento</label>
        </div>
        <div class="input_grup">
            <input type="tel" alt="Numero do utilizador" maxlength="15" placeholder="+244 999 999 999">
            <label for="Numero" class="seunumero">Digite o numero</label>
        </div>
        <div class="input_grup">
            <input type="password" alt="Senha do utilizador" maxlength="16" placeholder="">
            <label for="Senha" class="suasenha">Digite a senha</label>
        </div>
        <div class="input_grup" >
            <input type="password" alt="Confirmação da senha" maxlength="16" placeholder="">
            <label for="Senha_conf" class="suasenha_conf">Confirmar senha</label>
        </div>
        <button class="botao">Confirmar</button>
    </div>
</body>
</html>