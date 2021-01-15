<?php include 'includes/header.php'; ?>
<div class="topnav" id="myTopnav">
    <a href="index.php">Home</a>
    <a href="Berekenenhtml.php" class="active">Berekenen</a>
    <a href="Boten.php">Boten</a>
    <a href="page4.php">About</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
    </a>
</div>

<div class="flex-container">
    <div class="Textbox1">
        <select name="schip_select">
        <?php include "includes/schepen.php"; ?>
        <?php foreach($schepen as $key=>$value): ?>
            <option value="<?php echo $key; ?>"><?php echo $value["naam"]; ?></option>
        <?php endforeach; ?>
        </select>

        <h1>
        <form action="berekenen.php" method="POST">
            <input type="text" name="lading">
            <label for="lading">Laadruimte</label><br>
            <input type="text" name="Gewicht">
            <label for="Gewicht">Gewicht</label><br>
            <input type="submit" value="Bereken"><br>
        </form>
        </h1>
    </div>
</div>

<?php
include "schepen.php";

$lading = $_POST["lading"];
$schip = $_POST["schip_select"];
echo "Ik ga $schip bereken met lading: $lading";

$max_lading = $schepen[$schip]["max_lading"];
$m3 = $schepen[$schip]["m3"];

echo "<br>";
echo "max lading van $schip   is: $max_lading";
echo "<br>";
echo "m3 van $schip is $m3";

?>
</body>
</html>