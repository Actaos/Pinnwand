<?php

require "../../src/Functions/Export/EntryCSVExport.php";

csvExport_Entries();

header('Location: ../../index.php');