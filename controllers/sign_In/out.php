<?php
session_unset();

session_destroy();

header('location:/mvc/sign_in');