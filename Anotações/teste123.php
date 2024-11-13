<?php
    echo "<link rel='stylesheet' type='text/css' href='../../style.css' />";
    echo "<title>Cadastro feito com sucesso</title>";
    include '../../conexao.php';
    $vnom=$_POST['txtnome'];
    $vema=$_POST['txtemai'];
    $vsen=$_POST['txtsenh'];
    $vsex=$_POST['txtsexo'];
    $vdtn=$_POST['txtdtna'];
    $incluir = $cmd->query("insert into tbtest(nome_t,emai_t,senh_t,sexo_t,dtna_t) values('$vnom', '$vema', '$vsen', '$vsex', '$vdtn')");
    echo "<main class='success-container'>";
    echo "<div class='success-content'>
    <div class='success-img'>
    <ion-icon name='checkmark-circle'></ion-icon>
    </div>
    <p class='success-title'>Cadastro feito com sucesso!</p>
    <a onClick='window.history.back()' class='success-btn'>Voltar</a>
    </div>";
    echo "</main>";

    echo "<script type='module' src='https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js'></script>";
    echo "<script nomodule src='https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js'></script>";
?>