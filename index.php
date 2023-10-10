<?php 
include_once './components/header.php';
include_once './components/loader.php';
include_once './components/navbar.php';

if ($_GET['pages'] == 'about') {
    include_once './components/pages/about.php';
} elseif ($_GET['pages'] == 'service') {
    include_once './components/pages/service.php';
} elseif ($_GET['pages'] == 'skills') {
    include_once './components/pages/skills.php';
} elseif ($_GET['pages'] == 'experiences') {
    include_once './components/pages/experiences.php';
} elseif ($_GET['pages'] == 'services') {
    include_once './components/pages/services.php';
} elseif ($_GET['pages'] == 'portfolio') {
    include_once './components/pages/portfolio.php';
} elseif ($_GET['pages'] == 'contact') {
    include_once './components/pages/contact.php';
} else {
    include_once './components/pages/home.php';
}

include_once './components/footer.php';
