<?php

include('db/config.php');
session_destroy();

header('Location:'.BASE_URL.'');