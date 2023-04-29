<?php session_start();
session_encode();
session_destroy();
header("Location:../index.html"); ?>