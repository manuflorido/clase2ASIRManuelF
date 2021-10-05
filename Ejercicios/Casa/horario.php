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
                echo "Hoy es Lunes " . date("j") . " de " . date("F") . " del " . date("Y") . "<br>";
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
                    break;

                    case '3':
                        echo "Hoy es Miércoles " . date("j") . " de " . date("F") . " del " . date("Y") . "<br>";
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
                        break;

                        case '4':
                            echo "Hoy es Jueves " . date("j") . " de " . date("F") . " del " . date("Y") . "<br>";
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
                            break;

                            case '5':
                                echo "Hoy es Viernes " . date("j") . " de " . date("F") . " del " . date("Y") . "<br>";
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
                                break;

                                case '6':
                                    echo "Hermano que es sábado, sal por ahí o algo";
                                    break;
            
            default:
            echo "Es el día del Señor, hoy toca dormir mucho que mañana hay clase";
                break;
        }
    ?>
</body>
</html>