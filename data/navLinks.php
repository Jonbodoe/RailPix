<?php

    $links = array(
        'index.php' => 'Home', 
        'catalog.php' => 'Catalog', 
        'profile.php' => 'Profile', 
        'login.php' => 'Login'
    );

    $currentLink = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);

    foreach ($links as $link => $value) {
        if ($currentLink == $link) {
            echo '<li class="nav-item">
                <a class="nav-link active" href="./' . $link . '">' . $value . '</a>
            </li>';
        } else {
            echo '<li class="nav-item">
                <a class="nav-link" href="./' . $link . '">' . $value . '</a>
            </li>';
        }
    }
    // function isLogin() {
        
    // }
    // isLogin();

?>