<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo SITENAME; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/main.css">
</head>
<body>
    <header class="main-header">
        <nav class="header-container">
            <h1 class="brand h4">Student Management System</h1>
            <div class="user-auth">
                <?php if($_SESSION['user_id']): ?>
                    <a href="<?php echo URLROOT; ?>/Users/logout">Logout</a>
                <?php else: ?>
                    <a href="<?php echo URLROOT; ?>/Users/login">Login</a>
                    <a href="<?php echo URLROOT; ?>/Users/register">Sign in</a>
                <?php endif; ?>
            </div>
        </nav>
    </header>
    <main class="main">
        <div class="row">
    
    
    
