<?php
$myID = $_GET["id"];

require_once 'config.php';
require_once 'login_check.php';

$query = "SELECT * FROM `crud_agenda` WHERE id = " . $myID;

$result = mysqli_query($mysqli, $query);

if (mysqli_num_rows($result) == 1) {
    $agenda = mysqli_fetch_array($result);
    // header("Location: toonagenda.php");
    ?>
        <form method="post" action="editback.php?id=<?= $myID ?>">
            <div>
                <input type="text" value="<?= $agenda["onderwerp"] ?>" name="owinput">
                <?= $agenda["onderwerp"] ?>
            </div>
            <div>
                <input type="text" value="<?= $agenda["inhoud"] ?>" name="inhoudinput">
                <?= $agenda["inhoud"] ?>
            </div>
            <div>
                <input type="date" value="<?= $agenda["begindatum"] ?>" name="bdinput">
                <?= $agenda["begindatum"] ?>
            </div>
            <div>
                <input type="date" value="<?= $agenda["einddatum"] ?>" name="edinput">
                <?= $agenda["einddatum"] ?>
            </div>
            <div>
                <input type="number" value="<?= $agenda["prioriteit"] ?>" name="priinput">
                <?= $agenda["prioriteit"] ?>
            </div>
            <div>
                <!-- <input type="text" value="<?= $agenda["status"] ?>" name="statusinput"> -->
                <select name="statusinput">
                        <option value="n" selected>Niet begonnen</option>
                        <option value="b" selected>Bezig</option>
                        <option value="a" selected>Afgerond</option>
                    </select>
                <!-- <select name="statusVeld">
                        <option value="n" selected>Niet begonnen</option>
                        <option value="b" selected>Bezig</option>
                        <option value="a" selected>Afgerond</option>
                </select> -->
                <?= $agenda["status"] ?>
            </div>
            <div>
                <input type="submit">
            </div>
        </form>
    <?php
}
?>

<link rel="stylesheet" href="style/style.css">

<?php
