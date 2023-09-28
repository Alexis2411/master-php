<?php

if (isset($_POST['titulo']) && isset($_POST['description'])) {
    echo "<h1>".$_POST['titulo']."</h1>";
    echo "<h2>".$_POST['description']."</h2>";
}