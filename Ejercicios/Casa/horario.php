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
                if ($hora==8) {
                    echo "<p>Estás dando Aplicaciones Web</p>";
                }
                elseif ($hora==9) {
                    echo "<p>Estás dando Aplicaciones Web</p>";
                }
                elseif ($hora==10) {
                    echo "<p>Estás dando Aplicaciones Web</p>";
                }
                elseif ($hora==11) {
                    echo "<p>Estás en el Recreo</p>";
                }
                elseif ($hora==12) {
                    echo "<p>Estás dando Servicios de Redes e Internet</p>";
                }
                elseif ($hora==13) {
                    echo "<p>Estás dando Servicios de Redes e Internet</p>";
                }
                elseif ($hora==14) {
                    echo "<p>Estás dando Servicios de Redes e Internet</p>";
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
                            <td>Administración de Sistemas Operativos</td>
                        </tr>
                        <tr>
                            <td>9:15-10:15</td>
                            <td>Administración de Sistemas Operativos</td>
                        </tr>
                        <tr>
                            <td>10:15-11:15</td>
                            <td>Administración de Sistemas Operativos</td>
                        </tr>
                        <tr>
                            <td>11:15-11:45</td>
                            <td>Recreo</td>
                        </tr>
                        <tr>
                            <td>11:45-12:45</td>
                            <td>Seguridad Informática</td>
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
                    if ($hora==8) {
                        echo "<p>Estás dando Administración de Sistemas Operativos</p>";
                    }
                    elseif ($hora==9) {
                        echo "<p>Estás dando Administración de Sistemas Operativos</p>";
                    }
                    elseif ($hora==10) {
                        echo "<p>Estás dando Administración de Sistemas Operativos</p>";
                    }
                    elseif ($hora==11) {
                        echo "<p>Estás en el Recreo</p>";
                    }
                    elseif ($hora==12) {
                        echo "<p>Estás dando Seguridad Informática</p>";
                    }
                    elseif ($hora==13) {
                        echo "<p>Estás dando Empresa e Iniciativa Emprendedora</p>";
                    }
                    elseif ($hora==14) {
                        echo "<p>Estás dando Empresa e Iniciativa Emprendedora</p>";
                    }
                    else {
                        echo "<p>Escuchame que tienes que estar en tu casa</p>";
                    }
                    break;

                    case '3':
                        echo "Hoy es Miércoles " . date("j") . " de " . date("F") . " del " . date("Y") . " y son las " . "$hora" . ":" . "$minuto" . "<br>";
                        echo "
                        <table>
                            <caption>Tu horario es:</caption>
                            <tr>
                                <td>8:15-9:15</td>
                                <td>Administración de Sistemas Operativos</td>
                            </tr>
                            <tr>
                                <td>9:15-10:15</td>
                                <td>Administración de Sistemas Operativos</td>
                            </tr>
                            <tr>
                                <td>10:15-11:15</td>
                                <td>Administración de Sistemas Operativos</td>
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
                        if ($hora==8) {
                            echo "<p>Estás dando Administración de Sistemas Operativos</p>";
                        }
                        elseif ($hora==9) {
                            echo "<p>Estás dando Administración de Sistemas Operativos</p>";
                        }
                        elseif ($hora==10) {
                            echo "<p>Estás dando Administración de Sistemas Operativos</p>";
                        }
                        elseif ($hora==11) {
                            echo "<p>Estás en el Recreo</p>";
                        }
                        elseif ($hora==12) {
                            echo "<p>Estás dando Servicios de Redes e Internet</p>";
                        }
                        elseif ($hora==13) {
                            echo "<p>Estás dando Servicios de Redes e Internet</p>";
                        }
                        elseif ($hora==14) {
                            echo "<p>Estás dando Servicios de Redes e Internet</p>";
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
                                    <td>Seguridad Informática</td>
                                </tr>
                                <tr>
                                    <td>12:45-13:45</td>
                                    <td>Inglés</td>
                                </tr>
                                <tr>
                                    <td>13:45-14:45</td>
                                    <td>Inglés</td>
                                </tr>
                            </table>";
                            if ($hora==8) {
                                echo "<p>Estás dando Base de Datos</p>";
                            }
                            elseif ($hora==9) {
                                echo "<p>Estás dando Base de Datos</p>";
                            }
                            elseif ($hora==10) {
                                echo "<p>Estás dando Base de Datos</p>";
                            }
                            elseif ($hora==11) {
                                echo "<p>Estás en el Recreo</p>";
                            }
                            elseif ($hora==12) {
                                echo "<p>Estás dando Seguridad Informática</p>";
                            }
                            elseif ($hora==13) {
                                echo "<p>Estás dando Inglés</p>";
                            }
                            elseif ($hora==14) {
                                echo "<p>Estás dando Inglés</p>";
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
                                        <td>Inglés</td>
                                    </tr>
                                    <tr>
                                        <td>9:15-10:15</td>
                                        <td>Seguridad Informática</td>
                                    </tr>
                                    <tr>
                                        <td>10:15-11:15</td>
                                        <td>Seguridad Informática</td>
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
                                if ($hora==8) {
                                    echo "<p>Estás dando Inglés</p>";
                                }
                                elseif ($hora==9) {
                                    echo "<p>Estás dando Seguridad Informática</p>";
                                }
                                elseif ($hora==10) {
                                    echo "<p>Estás dando Seguridad Informática</p>";
                                }
                                elseif ($hora==11) {
                                    echo "<p>Estás en el Recreo</p>";
                                }
                                elseif ($hora==12) {
                                    echo "<p>Estás dando Aplicaciones Web</p>";
                                }
                                elseif ($hora==13) {
                                    echo "<p>Estás dando Empresa e Iniciativa Emprendedora</p>";
                                }
                                elseif ($hora==14) {
                                    echo "<p>Estás dando Empresa e Iniciativa Emprendedora</p>";
                                }
                                else {
                                    echo "<p>Escuchame que tienes que estar en tu casa</p>";
                                }
                                break;

                                case '6':
                                    echo "<p>Hermano que es sábado, sal por ahí o algo</p>";
                                    break;
            
            default:
            echo "<p>Es el día del Señor, hoy toca dormir mucho que mañana hay clase</p>";
                break;
        }
    ?>
</body>
</html>