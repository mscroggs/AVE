<?php
include("../intro.php");
?>
<?php
echo("<script type='text/javascript' src='games/".$_GET['title'].".js'></script>");
?>
<script type='text/javascript' src='game.js'></script>
<div class='game'>
<div style='width:100%;text-align:right;margin-bottom:3px'><span style='color:red'>A</span><span style='color:green'>V</span><span style='color:blue'>E</span></div>
<div id='gameend'>
<div id='gameendtext'>GAME OVER</div>
<div class='menuitem' onclick='gameRestart()'>Play again</div>
<div class='menuitem' onclick='gameList()'>Play a different game</div>
</div>
<div id='roominfo'></div>
<div id='inventory'></div>
<div id='menu'>
</div>
</div>
<script type='text/javascript'>
gameRestart();

</script>
<?php
include("../outro.php");
?>