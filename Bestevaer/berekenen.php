<?php include 'includes/header.php'; ?>
<div class="topnav" id="myTopnav">
    <a href="index.php">Home</a>
    <a href="Berekenenhtml.php" class="active">Berekenen</a>
    <a href="Boten.php">Boten</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
    </a>
</div>
<div class="flex-container">
    <div class="Textbox1">
        <h1>
            <?php
            include "schepen.php";

            $lading = $_POST["lading"];
            $laadruimte = $_POST["laadruimte"];
            $schip = $_POST["schip_select"];

            $max_lading = $schepen[$schip]["max_lading"];
            $m3 = $schepen[$schip]["m3"];

            $ruimteover = $m3 - $laadruimte;
            $ladingover = $max_lading - $lading;

            echo "Gekozen: $lading Ton en $laadruimte M3.";
            echo "<br><br>";
            echo "max lading van $schip is: $max_lading";
            echo "<br>";
            echo "m3 van $schip is: $m3";
            echo "<br><br>";

            if ($lading > $max_lading) {
                echo "Je lading van $lading Ton is te zwaar.";
                echo "<br>";
            } else {
                echo 'Met ' . $lading . ' Ton op het schip heb je nog ' . $ladingover . ' Ton over.';
                echo "<br>";
            }

            if ($laadruimte > $m3) {
                echo "Je lading van $laadruimte is te groot.";
                echo "<br>";
            } else {
                echo 'Met ' . $laadruimte . ' M3 bezet op het schip heb je nog ' . $ruimteover . ' M3 over.';
                echo "<br>";
            }
            ?>
        </h1>
    </div>
</div>

</body>
</html>