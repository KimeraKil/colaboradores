<?php

    include('conexao.php');

    $p0 = $_POST['p25'];
    $p1 = $_POST['p1'];
    $p2 = $_POST['p2'];
    $p3 = $_POST['p3'];
    $p4 = $_POST['p4'];
    $p5 = $_POST['p5'];
    $p6 = $_POST['p6'];
    $p7 = $_POST['p7'];
    $p8 = $_POST['p8'];
    $p9 = $_POST['p9'];
    $p10 = $_POST['p10'];
    $p11 = $_POST['p11'];
    $p12 = $_POST['p12'];
    $p13 = $_POST['p13'];
    $p14 = $_POST['p14'];
    $p15 = $_POST['p15'];
    $p16 = $_POST['p16'];
    $p17 = $_POST['p17'];
    $p18 = $_POST['p18'];
    $p19 = $_POST['p19'];
    $p20 = $_POST['p20'];
    $p21 = $_POST['p21'];
    $p22 = $_POST['p22'];
    $p23 = $_POST['p23'];
    $p24 = $_POST['p24'];

    $hoje = date('y/m/d');

    $comando = "INSERT INTO `cardapio`(`data`, `p1`, `p2`, p3, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, p12, p13, p14, `p15`, `p16`, `p17`, `p18`, `p19`, `p20`, `p21`, `p22`, `p23`, `p24`) VALUES ('$hoje', '$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$p9', '$p10', '$p11', '$p12', '$p13', '$p14', '$p15', '$p16', '$p17', '$p18', '$p19', '$p20', '$p21', '$p22', '$p23', '$p24')";
    mysqli_query($conn, $comando);
    //mysqli_close($conn);
   /*if(mysqli_query($conn, $comando)){
        echo "Cadastrado com Sucesso";
        echo "$comando";
    } else {
        echo "Erro ao Cadastrar ".mysqli_connect_error($conn);
    }*/

    print_r ('<!DOCTYPE html>');
    print_r ('<html lang="pt-br">');
    print_r ('<head>');
    print_r ('<meta charset="UTF-8">');
    print_r ('<meta http-equiv="X-UA-Compatible" content="IE=edge">');
    print_r ('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
    print_r ('<link rel="stylesheet" href="./css/full.css">');
    print_r ('<title>Cardapio</title>');
    print_r ('</head>');
    print_r ('<body>');
    print_r ('<div class="supImg">');
    print_r ('<img src="./img/BSupCardapioAFPESP.png" alt="Superior">');
    print_r ('</div>');
    print_r ('<div class="principal">');
    print_r ('<h4 id="refeicao-data">'.$p0. ' - ' .$hoje.'</h4>');
    print_r ('<div class="saladas">');
    print_r ('<h2>Saladas</h2>');
    print_r ('<p id="p1">'.$p1.'</p>');
    print_r ('<p id="p2">'.$p2.'</p>');
    print_r ('<p id="p3">'.$p3.'</p>');
    print_r ('<p id="p4">'.$p4.'</p>');
    print_r ('<p id="p5">'.$p5.'</p>');
    print_r ('<p id="p6">'.$p6.'</p>');
    print_r ('<br>');
    print_r ('</div>');
    print_r ('<div class="PratosQuentes">');
    print_r ('<h2>Pratos Quentes</h2>');
    print_r ('<p id="p7">'.$p7.'</p>');
    print_r ('<p id="p8">'.$p8.'</p>');
    print_r ('<p id="p9">'.$p9.'</p>');
    print_r ('<p id="p10">'.$p10.'</p>');
    print_r ('<p id="p11">'.$p11.'</p>');
    print_r ('<p id="p12">'.$p12.'</p>');
    print_r ('<p id="p13">'.$p13.'</p>');
    print_r ('<p id="p14">'.$p14.'</p>');
    print_r ('<p id="p15">'.$p15.'</p>');
    print_r ('<p id="p16">'.$p16.'</p>');
    print_r ('<p id="p17">'.$p17.'</p>');
    print_r ('<p id="p18">'.$p18.'</p>');
    print_r ('<p id="p19">'.$p19.'</p>');
    print_r ('<p id="p20">'.$p20.'</p>');
    print_r ('<br>');
    print_r ('</div>');
    print_r ('<div class="sobremesa">');
    print_r ('<h2>Sobremesa</h2>');
    print_r ('<p id="p21">'.$p21.'</p>');
    print_r ('<p id="p22">'.$p22.'</p>');
    print_r ('<p id="p23">'.$p23.'</p>');
    print_r ('<p id="p24">'.$p24.'</p>');
    print_r ('<br>');
    print_r ('<h2 id="bPetite">Bom Apetite!</h2>');
    print_r ('</div>');
    print_r ('<div class="infImg">');
    print_r ('<h3 id="msAlteracoes">*Menu Sujeito a Alterações.</h3>');
    print_r ('<img src="./img/BInfCardapioAFPESP.png" alt="Superior">');
    print_r ('</div>');
    print_r ('</div>');  
    print_r ('</body>');
    print_r ('</html>');

    //for($i = 0; $i < 24; $i++){
    //    $varP ="p".$i; 
    //    echo ('<p id="p1">'.$$varP.'</p>');
    //}

?>