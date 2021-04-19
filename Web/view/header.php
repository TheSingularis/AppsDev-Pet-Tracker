<!DOCTYPE html>
<html>

<head>
    <title>AppsDev - Sluiter</title>

    <base href="http://192.168.1.59/">

    <link rel="stylesheet" type="text/css" href="/style/main.css">
    <link rel="stylesheet" type="text/css" href="/style/old_main.css">

    <link rel="stylesheet" href="javascript/jquery-ui-1.12.1.custom/jquery-ui.min.css">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
</head>

<body>
    <header>
        <h1 id="header">
            AppsDev - Sluiter
        </h1>

        <h2>
            <?php if (isset($_SESSION['user'])) {
                $user = unserialize($_SESSION['user']);                
                echo 'Welcome ' . $user->getFullName();
            }
            ?>
        </h2>

        <nav id="nav_menu">
            <?php if (!isset($_SESSION['user'])) : ?>
                <ul class="left">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="user_manager?controllerRequest=user_add">Register</a></li>
                    <li><a href="user_manager?controllerRequest=user_login">Log In</a></li>
                </ul>
            <?php else : ?>
                <ul>
                    <li><a href="list_manager">ToDo Lists</a></li>
                    <li><a href="user_manager?controllerRequest=user_profile">User Profile</a></li>
                    <li><a href="user_manager?controllerRequest=user_logout">Log Out</a></li>
                </ul>
            <?php endif; ?>
        </nav>
    </header>
