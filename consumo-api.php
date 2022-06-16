<?php
    $url = "http://localhost/consumo-api-php/api/api_teste.json";
    $jsondecode = json_decode(file_get_contents($url));
?>
<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <title>Consumindo API by GET</title>
    </head>
    <body>
        <section class="div__title">
            <strong>Consumo de API com PHP</strong>
        </section>
        <div class="div__initial">
            <br>A P I</br>
        </div>
        <section class="div__infos2">
            <h4 class="h4__infos"> ➥ Aqui Está o JSON.</h4>
        </section>
        <section class="div__medium">
        <div class="div__grid">
            <!-- Recuperando informações -->
            <?php
                echo  '<pre>';
                print_r($jsondecode);
            ?>
        </div>
        </section>
        <section class="div__divisor">
        </section>
        <section class="div__infos">
            <h4 class="h4__infos"> ➥ Usando a mesma função json_decode() vamos percorrer o objeto de retorno mas agora vamos acessar o identificador "person"</h4>
        </br>
        <div class="div__register">
            <!-- Percorrendo array -->
            <?php
            foreach($jsondecode->person as $register):
                echo 'ID: ➥      ' . $register->id .    '<br>';
                echo 'Name: ➥    ' . $register->name .  '<br>';
                echo 'Imagem: ➥  ' . $register->img .   '<br>';
                echo 'Rua: ➥     ' . $register->street .'<br>';
                echo 'Número: ➥  ' . $register->number .'<br>';
                echo 'Cidade: ➥  ' . $register->city . ' <br>';
                echo 'Estado: ➥  ' . $register->state . '<br>';
                echo 'Telefone: ➥' . $register->phonenumber . '<br>';
                echo '<br>';
            endforeach;
            ?>
        </div>
        </section>
            </br>
            </br>
        <section class="div__divisor">
        </section>
        <section class="div__infos2">
            <h4 class="h4__infos"> ➥ Usando a mesma função json_encode()</h4>
        </br>
        </section>
        <section class="div__arrayyClientes">
            <?php
            $arrayClientes = [
                    'clientes' => 
                    [
                        'id' => 1,
                        'nome' => 'Marcos'
                    ],
                    [
                        'id' => 2,
                        'nome' => 'José'
                    ],
                    [
                        'id' => 3,
                        'nome' => 'Francisco'
                ]
                ];
            print_r(json_encode($arrayClientes));


            ?>
        </section>
    </body>
    </html>