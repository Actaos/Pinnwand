<?php
require "../../src/Functions/Delete/EntryDelete.php";

$id = $_GET['id'];

//var_dump($id);

delete_Entry($id);

header('Location: ../../index.php');
?>