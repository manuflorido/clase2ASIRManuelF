<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Horario Manuel Florido</title>
    <style>
        table, tr, td {
            border: 1px solid black;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
        }
        p {
            text-align: center;
            font-size: 22px;
            background-color: #9b807a;
            color: white;
            width: 50%;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <?php
        #Variable dia 0=Domingo 6=Sabado
        $dia = date("w");
        $hora = date("G");
        $minuto = date("i");
        $horaentera = date("H:i");

        switch ($dia) {
            case '1':
                echo "Hoy es Lunes " . date("j") . " de " . date("F") . " del " . date("Y") . " y son las " . "$hora" . ":" . "$minuto" . "<br>";
                echo "
                <table>
                    <caption>Tu horario es:</caption>
                    <tr>
                        <td>8:15-9:15</td>
                        <td>Aplicaciones Web</td>
                    </tr>
                    <tr>
                        <td>9:15-10:15</td>
                        <td>Aplicaciones Web</td>
                    </tr>
                    <tr>
                        <td>10:15-11:15</td>
                        <td>Aplicaciones Web</td>
                    </tr>
                    <tr>
                        <td>11:15-11:45</td>
                        <td>Recreo</td>
                    </tr>
                    <tr>
                        <td>11:45-12:45</td>
                        <td>Servicios de Redes e Internet</td>
                    </tr>
                    <tr>
                        <td>12:45-13:45</td>
                        <td>Servicios de Redes e Internet</td>
                    </tr>
                    <tr>
                        <td>13:45-14:45</td>
                        <td>Servicios de Redes e Internet</td>
                    </tr>
                </table>";
                if (('08:15'>=$horaentera) | ($horaentera<'11:15')) {
                    echo "<p>Est??s dando Aplicaciones Web</p>";
                }
                elseif (('11:15'>=$horaentera) | ($horaentera<'11:45')) {
                    echo "<p>Est??s en el Recreo</p>";
                }
                elseif (('11:45'>=$horaentera) | ($horaentera<'14:45')) {
                    echo "<p>Est??s dando Servicios de Redes e Internet</p>";
                }
                else {
                    echo "<p>Escuchame que tienes que estar en tu casa</p>";
                }
                break;

                case '2':
                    echo "Hoy es Martes " . date("j") . " de " . date("F") . " del " . date("Y") . " y son las " . "$hora" . ":" . "$minuto" . "<br>";
                    echo "
                    <table>
                        <caption>Tu horario es:</caption>
                        <tr>
                            <td>8:15-9:15</td>
                            <td>Administraci??n de Sistemas Operativos</td>
                        </tr>
                        <tr>
                            <td>9:15-10:15</td>
                            <td>Administraci??n de Sistemas Operativos</td>
                        </tr>
                        <tr>
                            <td>10:15-11:15</td>
                            <td>Administraci??n de Sistemas Operativos</td>
                        </tr>
                        <tr>
                            <td>11:15-11:45</td>
                            <td>Recreo</td>
                        </tr>
                        <tr>
                            <td>11:45-12:45</td>
                            <td>Seguridad Inform??tica</td>
                        </tr>
                        <tr>
                            <td>12:45-13:45</td>
                            <td>Empresa e Iniciativa Emprendedora</td>
                        </tr>
                        <tr>
                            <td>13:45-14:45</td>
                            <td>Empresa e Iniciativa Emprendedora</td>
                        </tr>
                    </table>";
                    if (('08:15'>=$horaentera) | ($horaentera<'11:15')) {
                        echo "<p>Est??s dando Administraci??n de Sistemas Operativos</p>";
                    }
                    elseif (('11:15'>=$horaentera) | ($horaentera<'11:45')) {
                        echo "<p>Est??s en el Recreo</p>";
                    }
                    elseif (('11:45'>=$horaentera) | ($horaentera<'12:45')) {
                        echo "<p>Est??s dando Seguridad Inform??tica</p>";
                    }
                    elseif (('12:45'>=$horaentera) | ($horaentera<'14:45')) {
                        echo "<p>Est??s dando Empresa e Iniciativa Emprendedora</p>";
                    }
                    else {
                        echo "<p>Escuchame que tienes que estar en tu casa</p>";
                    }
                    break;

                    case '3':
                        echo "Hoy es Mi??rcoles " . date("j") . " de " . date("F") . " del " . date("Y") . " y son las " . "$hora" . ":" . "$minuto" . "<br>";
                        echo "
                        <table>
                            <caption>Tu horario es:</caption>
                            <tr>
                                <td>8:15-9:15</td>
                                <td>Administraci??n de Sistemas Operativos</td>
                            </tr>
                            <tr>
                                <td>9:15-10:15</td>
                                <td>Administraci??n de Sistemas Operativos</td>
                            </tr>
                            <tr>
                                <td>10:15-11:15</td>
                                <td>Administraci??n de Sistemas Operativos</td>
                            </tr>
                            <tr>
                                <td>11:15-11:45</td>
                                <td>Recreo</td>
                            </tr>
                            <tr>
                                <td>11:45-12:45</td>
                                <td>Servicios de Redes e Internet</td>
                            </tr>
                            <tr>
                                <td>12:45-13:45</td>
                                <td>Servicios de Redes e Internet</td>
                            </tr>
                            <tr>
                                <td>13:45-14:45</td>
                                <td>Servicios de Redes e Internet</td>
                            </tr>
                        </table>";
                        if (('08:15'>=$horaentera) | ($horaentera<'11:15')) {
                            echo "<p>Est??s dando Administraci??n de Sistemas Operativos</p>";
                        }
                        elseif (('11:15'>=$horaentera) | ($horaentera<'11:45')) {
                            echo "<p>Est??s en el Recreo</p>";
                        }
                        elseif (('11:45'>=$horaentera) | ($horaentera<'14:45')) {
                            echo "<p>Est??s dando Servicios de Redes e Internet</p>";
                        }
                        else {
                            echo "<p>Escuchame que tienes que estar en tu casa</p>";
                        }
                        break;

                        case '4':
                            echo "Hoy es Jueves " . date("j") . " de " . date("F") . " del " . date("Y") . " y son las " . "$hora" . ":" . "$minuto" . "<br>";
                            echo "
                            <table>
                                <caption>Tu horario es:</caption>
                                <tr>
                                    <td>8:15-9:15</td>
                                    <td>Base de Datos</td>
                                </tr>
                                <tr>
                                    <td>9:15-10:15</td>
                                    <td>Base de Datos</td>
                                </tr>
                                <tr>
                                    <td>10:15-11:15</td>
                                    <td>Base de Datos</td>
                                </tr>
                                <tr>
                                    <td>11:15-11:45</td>
                                    <td>Recreo</td>
                                </tr>
                                <tr>
                                    <td>11:45-12:45</td>
                                    <td>Seguridad Inform??tica</td>
                                </tr>
                                <tr>
                                    <td>12:45-13:45</td>
                                    <td>Ingl??s</td>
                                </tr>
                                <tr>
                                    <td>13:45-14:45</td>
                                    <td>Ingl??s</td>
                                </tr>
                            </table>";
                            if (('08:15'>=$horaentera) | ($horaentera<'11:15')) {
                                echo "<p>Est??s dando Base de Datos</p>";
                            }
                            elseif (('11:15'>=$horaentera) | ($horaentera<'11:45')) {
                                echo "<p>Est??s en el Recreo</p>";
                            }
                            elseif (('11:45'>=$horaentera) | ($horaentera<'12:45')) {
                                echo "<p>Est??s dando Seguridad Inform??tica</p>";
                            }
                            elseif (('12:45'>=$horaentera) | ($horaentera<'14:45')) {
                                echo "<p>Est??s dando Ingl??s</p>";
                            }
                            else {
                                echo "<p>Escuchame que tienes que estar en tu casa</p>";
                            }
                            break;

                            case '5':
                                echo "Hoy es Viernes " . date("j") . " de " . date("F") . " del " . date("Y") . " y son las " . "$hora" . ":" . "$minuto" . "<br>";
                                echo "
                                <table>
                                    <caption>Tu horario es:</caption>
                                    <tr>
                                        <td>8:15-9:15</td>
                                        <td>Ingl??s</td>
                                    </tr>
                                    <tr>
                                        <td>9:15-10:15</td>
                                        <td>Seguridad Inform??tica</td>
                                    </tr>
                                    <tr>
                                        <td>10:15-11:15</td>
                                        <td>Seguridad Inform??tica</td>
                                    </tr>
                                    <tr>
                                        <td>11:15-11:45</td>
                                        <td>Recreo</td>
                                    </tr>
                                    <tr>
                                        <td>11:45-12:45</td>
                                        <td>Aplicaciones Web</td>
                                    </tr>
                                    <tr>
                                        <td>12:45-13:45</td>
                                        <td>Empresa e Iniciativa Emprendedora</td>
                                    </tr>
                                    <tr>
                                        <td>13:45-14:45</td>
                                        <td>Empresa e Iniciativa Emprendedora</td>
                                    </tr>
                                </table>";
                                if (('08:15'>=$horaentera) | ($horaentera<'09:15')) {
                                    echo "<p>Est??s dando Ingl??s</p>";
                                }
                                elseif (('09:15'>=$horaentera) | ($horaentera<'11:15')) {
                                    echo "<p>Est??s dando Seguridad Inform??tica</p>";
                                }
                                elseif (('11:15'>=$horaentera) | ($horaentera<'11:45')) {
                                    echo "<p>Est??s en el Recreo</p>";
                                }
                                elseif (('11:45'>=$horaentera) | ($horaentera<'12:45')) {
                                    echo "<p>Est??s dando Aplicaciones Web</p>";
                                }
                                elseif (('12:45'>=$horaentera) | ($horaentera<'14:45')) {
                                    echo "<p>Est??s dando Empresa e Iniciativa Emprendedora</p>";
                                }
                                else {
                                    echo "<p>Escuchame que tienes que estar en tu casa</p>";
                                }
                                break;

                                case '6':
                                    echo "<p>Hermano que es s??bado, sal por ah?? o algo</p>";
                                    break;
            
            default:
            echo "<p>Es el d??a del Se??or, hoy toca dormir mucho que ma??ana hay clase</p>";
                break;
        }
    ?>
</body>
</html>