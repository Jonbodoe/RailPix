<?php

    // $noLogin = array(
    //     'index.php' => 'Home', 
    //     'index.php#about' => 'About',
    //     'login.php' => 'Login'
    // );

$noLogin = array(
    'index.php' => 'Home', 
    'catalog.php' => 'Catalog', 
    'profile.php' => 'Profile', 
    'login.php' => 'Login'
);

$login  = array(
    'index.php' => 'Home', 
    'catalog.php' => 'Catalog', 
    'profile.php' => 'Profile', 
    'logout.php' => 'Logout'
);

$currentLink = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);

if (isset($_SESSION['username'])) {
    login($login, $currentLink);
} else {
    login($noLogin, $currentLink);
}

function login ($login, $userlink) {
    foreach ($login as $link => $value) {
        if ($userlink == $link) {
            echo '<li class="nav-item">
                <a class="nav-link active" href="./' . $link . '">' . $value . '</a>
            </li>';
        } else {
            echo '<li class="nav-item">
                <a class="nav-link" href="./' . $link . '">' . $value . '</a>
            </li>';
        }
    }
}

// function nologin ($nologin, $userlink) {
//     foreach ($nologin as $link => $value) {
//         if ($userlink == $link) {
//             echo '<li class="nav-item">
//                 <a class="nav-link active" href="./' . $link . '">' . $value . '</a>
//             </li>';
//         } else {
//             echo '<li class="nav-item">
//                 <a class="nav-link" href="./' . $link . '">' . $value . '</a>
//             </li>';
//         }
//     }
// }
    // function isLogin() {
        
    // }
    // isLogin();
