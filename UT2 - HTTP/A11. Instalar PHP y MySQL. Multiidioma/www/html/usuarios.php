<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla usuarios</title>
    <style>
        .contenedor table {
            margin: 0 auto;
        }
    </style>
</head>

<body>

    <div class='contenedor'>
        <?php
        $hostname = 'mysql';
        $username = 'yeray';
        $password = 'csas1234';
        $dbname =   'http';

        $conn = new mysqli($hostname, $username, $password, $dbname);
        $conn->set_charset('utf8');

        if ($conn->connect_error) {
            die('Connection failed: ' . $conn->connect_error);
        }

        $result = $conn->query("
            select * from usuarios
        ");

        if ($result->num_rows > 0) {
            $html = '
                <table>
                <thead>
                    <tr>
                        <th>Usuarios</th>
                        <th>Contraseñas</th>
                    </tr>
                </thead>
                <tbody>
            ';
            while ($fila = $result->fetch_object()) {
                $html .= '<tr>';
                $html .= '<td style="border: 1px solid black;">' . $fila->username . '</td>';
                $html .= '<td style="border: 1px solid black;">' . $fila->password . '</td>';
                $html .= '</tr>';
            }
            $html .= "
                </tbody>
                </table>
            ";
            echo $html;
        } else {
            echo '<h1>No se ha devuelto ningún registro</h1>';
        }
        ?>
    </div>
</body>

</html>