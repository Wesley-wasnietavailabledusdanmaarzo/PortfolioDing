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
        <form method="POST" action="berekenen.php">
        <select name="schip_select">
            <?php include "schepen.php"; ?>
            <?php foreach($schepen as $key=>$value): ?>
                <option value="<?php echo $key; ?>"><?php echo $value["naam"]; ?></option>
        <?php endforeach; ?>
        </select>
        <h1>
            <input type="text" name="laadruimte">
            <label for="laadruimte">Groote in M3</label><br>
            <input type="text" name="lading">
            <label for="lading">lading in Ton</label><br>
            <input type="submit" value="Bereken"><br>
        </form>
        </h1>
    </div>
</div>
</body>
</html>