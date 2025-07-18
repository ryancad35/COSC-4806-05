<?php

class Reminders extends Controller {

    public function __construct() {
        // If user is not logged in, redirect to login page
        if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
            header('Location: /login');
            exit;
        }

        // If user is not admin, redirect to home page
        if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin') {
            header('Location: /home');
            exit;
        }
    }
