<?php
require 'config.php';
require_once 'login_check.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <form name="agendaFormulier" method="post" action="toevoegVerwerk.php">
        <table>
            <tr>
                <td>Onderwerp:</td>
                <td><input type="text" name="onderwerpVeld" id="onderwerpv" required></td>
            </tr>

            <tr>
                <td>Inhoud:</td>
                <td><input type="text" name="inhoudVeld" id="inhoudv" required></td>
            </tr>
            
            <tr>
                <td>Begindatum:</td>
                <td><input type="date" name="begindatumVeld" id="begindatumv" required></td>
            </tr>

            <tr>
                <td>Einddatum:</td>
                <td><input type="date" name="einddatumVeld" id="einddatumv" required></td>
            </tr>
            
            <tr>
                <td>Prioriteit:</td>
                <td><input type="number" name="prioriteitVeld" id="prioriteitv" min="1" max="5" value="3" required></td>
            </tr>

            <tr>
                <td>Status:</td>
                <td>
                    <select name="statusVeld">
                        <option value="n" selected>Niet begonnen</option>
                        <option value="b" selected>Bezig</option>
                        <option value="a" selected>Afgerond</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td> </td>
                <td><input type="submit" name="verzend" id="verzend" value="Voeg toe aan agenda" required></td>
            </tr>

        </table>
    </form>
    
</body>
</html>