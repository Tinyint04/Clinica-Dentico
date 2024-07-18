<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horarios del Médico</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 15px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Selecciona un Médico</h1>
    <select name="medico" id="medico">
        <option value="JULIO ANDRES">JULIO ANDRES</option>
        <!-- Añadir más opciones si es necesario -->
    </select>

    <h2>Horarios de <span id="nombre_medico">JULIO ANDRES</span></h2>
    <table>
        <tr>
            <th>LUNES</th>
            <th>MARTES</th>
            <th>MIERCOLES</th>
            <th>JUEVES</th>
            <th>VIERNES</th>
            <th>SABADO</th>
        </tr>
        <tr>
            <td>8:25 a 12:00</td>
            <td>8:25 a 12:00</td>
            <td>8:25 a 12:00</td>
            <td>8:25 a 12:00</td>
            <td>8:25 a 12:00</td>
            <td>8:25 a 12:00</td>
        </tr>
        <tr>
            <td>15:15 a 16:50</td>
            <td>15:15 a 16:50</td>
            <td>15:15 a 16:50</td>
            <td>15:15 a 16:50</td>
            <td>15:15 a 16:50</td>
            <td>15:15 a 16:50</td>
        </tr>
    </table>

    <script>
        // Aquí podrías agregar funcionalidades en JavaScript si necesitas cambiar el nombre del médico dinámicamente
    </script>
</body>
</html>