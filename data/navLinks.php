<?php

    // $noLogin = array(
    //     'index.php' => 'Home', 
    //     'index.php#about' => 'About',
    //     'login.php' => 'Login'
    // );

$noLogin = array(
    'index.php' => 'Home', 
    'index.php#about' => 'About', 
    'login.php' => 'Login'
);

$login  = array(
    'index.php' => 'Home', 
    'catalog.php' => 'Catalog', 
    'profile.php' => 'Profile', 
    'logout.php' => 'Logout'
);

$currentLink = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);

isset($_SESSION['username']) ? login($login, $currentLink) : login($noLogin, $currentLink);

function login ($list, $userlink) {
    foreach ($list as $link => $value) {
        if ($userlink == $link) {
            echo 
            '<li class="nav-item">
                <a class="nav-link active" href="./' . $link . '">' . $value . '</a>
            </li>';
        } else {
            echo 
            $value == 'Login' ? 
            '<li class="nav-item">
                <a class="nav-link login" href="./' . $link . '">' . $value . '</a>
            </li>' : 
            '<li class="nav-item">
                <a class="nav-link" href="./' . $link . '">' . $value . '</a>
            </li>';
        }
    }
}

