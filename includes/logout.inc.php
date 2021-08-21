<?php

session_start();
session_unset();
session_destroy();
header("location: ../Votepoll/signin.php?error=loggedout");
  exit();