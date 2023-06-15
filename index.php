<?php
date_default_timezone_set('America/Sao_Paulo');
$mes = date('m');

switch ($mes) {
    case 1:
        $mes = 'Janeiro';
        break;
    case 2:
        $mes = 'Fevereiro';
        break;
    case 3:
        $mes = 'Março';
        break;
    case 4:
        $mes = 'Abril';
        break;
    case 5:
        $mes = 'Maio';
        break;
    case 6:
        $mes = 'Junho';
        break;
    case 7:
        $mes = 'Julho';
        break;
    case 8:
        $mes = 'Agosto';
        break;
    case 9:
        $mes = 'Setembro';
        break;
    case 10:
        $mes = 'Outubro';
        break;
    case 11:
        $mes = 'Novembro';
        break;
    case 12:
        $mes = 'Dezembro';
        break;
    default:
        $mes = 'ERRO AO COLETAR O MÊS';
        break;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="https://img.icons8.com/fluency/512/time-span.png" type="image/x-icon">
    <title>Relógio digital</title>
</head>

<body>
    <div class="main d-flex coluna justify-content-center align-items-center">
        <div>
            <p class="legenda"><?php echo date('d') . ' de ' . $mes . ' de ' . date('Y'); ?></p>
        </div>
        <div class="container">
            <div class="cards">
                <p id="hr"></p>
                <p class="legenda">HORAS</p>
            </div>
            <div class="cards">
                <p id="min"></p>
                <p class="legenda">MINUTOS</p>
            </div>
            <div class="cards">
                <p id="seg"></p>
                <p class="legenda">SEGUNDOS</p>
            </div>
        </div>
        <div class="clima">
            <div>
                <i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                    </svg>
                </i>
                <span class="cidade"></span>
            </div>
            <div>
                <span class="temp"></span>
            </div>
            <div>
                <span class="descClima"></span>
                <img class="imgClima" src="" alt="condições do tempo">
            </div>
            <div>
                <i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet-half" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10c0 0 2.5 1.5 5 .5s5-.5 5-.5c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z" />
                        <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z" />
                    </svg>
                </i>
                <span class="chuva"></span>
            </div>
            <div>
                <i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wind" viewBox="0 0 16 16">
                        <path d="M12.5 2A2.5 2.5 0 0 0 10 4.5a.5.5 0 0 1-1 0A3.5 3.5 0 1 1 12.5 8H.5a.5.5 0 0 1 0-1h12a2.5 2.5 0 0 0 0-5zm-7 1a1 1 0 0 0-1 1 .5.5 0 0 1-1 0 2 2 0 1 1 2 2h-5a.5.5 0 0 1 0-1h5a1 1 0 0 0 0-2zM0 9.5A.5.5 0 0 1 .5 9h10.042a3 3 0 1 1-3 3 .5.5 0 0 1 1 0 2 2 0 1 0 2-2H.5a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </i>
                <span class="vento"></span>
            </div>
        </div>
    </div>


    <script src="script.js"></script>
</body>

</html>
