<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha del Jugador</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f9;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #444;
            margin-bottom: 20px;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #007BFF;
            color: white;
            text-transform: uppercase;
        }

        td {
            background-color: #f9f9f9;
        }

        tr:hover td {
            background-color: #f1f1f1;
        }

        p {
            text-align: center;
            font-size: 18px;
            margin: 10px 0;
        }

        .highlight {
            color: #007BFF;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h1>Ficha del Jugador</h1>

<?php
class Player {
    private $name;
    private $birthDay;
    private $country;
    private $dorsal;
    private $position;
    private $goals;
    private $matches;
    private $minutes;
    private $yellowCard;
    private $redCard;

    public function __construct($name, $birthDay, $country, $dorsal, $position, $goals, $matches, $minutes, $yellowCard, $redCard){
        $this->name = $name;
        $this->birthDay = $birthDay;
        $this->country = $country;
        $this->dorsal = $dorsal;
        $this->position = $position;
        $this->goals = $goals;
        $this->matches = $matches;
        $this->minutes = $minutes;
        $this->yellowCard = $yellowCard;
        $this->redCard = $redCard;
    }

    public function Age(){
        return date("Y") - $this->birthDay;
    }

    public function Score(){
        $this->goals += 1;
        return "Ha marcado un gol. Goles actuales: <span class='highlight'>" . $this->goals . "</span>";
    }

    public function AddCard($color){
        if($color == 1){
            $this->yellowCard += 1;
            return "Amonestado con tarjeta amarilla. Tarjetas amarillas actuales: <span class='highlight'>" . $this->yellowCard . "</span>";
        } else {
            $this->redCard += 1;
            return "Amonestado con tarjeta roja. Tarjetas rojas actuales: <span class='highlight'>" . $this->redCard . "</span>";
        }
    }

    public function PlayMinutes($min){
        $this->minutes += $min;
        return "Jugó <span class='highlight'>$min</span> minutos adicionales. Total de minutos jugados: <span class='highlight'>" . $this->minutes . "</span>";
    }

    public function Render(){
        return "<table>
            <tr>
                <th>Nombre</th>
                <th>Año de nacimiento</th>
                <th>País</th>
                <th>Dorsal</th>
                <th>Posición</th>
                <th>Goles</th>
                <th>Partidos Jugados</th>
                <th>Minutos jugados</th>
                <th>Tarjetas Amarillas</th>
                <th>Tarjetas Rojas</th>
            </tr>
            <tr>
                <td>{$this->name}</td>
                <td>{$this->birthDay}</td>
                <td>{$this->country}</td>
                <td>{$this->dorsal}</td>
                <td>{$this->position}</td>
                <td>{$this->goals}</td>
                <td>{$this->matches}</td>
                <td>{$this->minutes}</td>
                <td>{$this->yellowCard}</td>
                <td>{$this->redCard}</td>
            </tr>
        </table>";
    }
}

$player = new Player("Ivan", 2004, "España", "9", "LD", 100, 150, 200, 1, 0);
$player2 = new Player("Juan", 2004, "España", "9", "LD", 100, 150, 200, 1, 0);


echo "<p>Edad: " . $player->Age() . " años</p>";
echo "<p>" . $player->Score() . "</p>";
echo "<p>" . $player->AddCard(1) . "</p>";
echo "<p>" . $player->PlayMinutes(90) . "</p>";
echo $player->Render();
echo "<p>Edad: " . $player2->Age() . " años</p>";
echo "<p>" . $player2->Score() . "</p>";
echo "<p>" . $player2->AddCard(1) . "</p>";
echo "<p>" . $player2->PlayMinutes(90) . "</p>";
echo $player2->Render();
?>

</body>
</html>
