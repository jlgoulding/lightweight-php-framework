<?php

function breadcrumbs($home = 'Home')
{
    global $page_title; //global varable that takes it's value from the page that breadcrubs will appear on. Can be deleted if you wish, but if you delete it, delete also the title tage inside the <li> tag inside the foreach loop.
    $plusUrl = "";
    // $plusUrl = "Information/oncall";
    $breadcrumb  = '<div class="breadcrumb-container"><div class="container"><ol class="breadcrumb">';
    // $root_domain = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
    $root_domain = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
    $breadcrumbs = array_slice(array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))), 2);
    $breadcrumb .= '<li><i class="fa fa-home"></i><a href="' . $root_domain . $plusUrl . '/home' .  '" title="Home Page"><span>' . $home . '</span></a></li>';
    foreach ($breadcrumbs as $crumb) {

        $link = ucwords(str_replace(array(".php", "-", "_"), array("", " ", " "), $crumb));
        $root_domain .= $crumb;
        // $root_domain .= $plusUrl . '/' . $crumb . '/';
        $breadcrumb .= '<li><a href="' . $root_domain . $page_title . '"><span>' . $link . '</span></a></li>';
    }
    $breadcrumb .= '</ol>';
    $breadcrumb .= '</div>';
    $breadcrumb .= '</div>';
    return $breadcrumb;
}

?>
<!-- Top navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom d-flex justify-content-between bg-grad">
    <button class="btn btn-outline-light text-white" id="sidebarToggle">
        <i id="testToggle" class="icon arrow-left" aria-hidden="true"></i>
    </button>

    <h4 class="display-4 text-white">On Call application</h4>
    <div class="form-inline d-flex flex-row bd-highlight align-items-center text-white">
        <img src="../../public/images/Proud-to-care.png" height="90px" width="100px" alt="">
</nav>


    <ul class="navbar-nav d-flex flex-row justify-content-between">
        <li class="nav-item"><a href="home" class="nav-link middle"></a></li>
        <li class="">
            <form method='post' action="logout" class="">
                <button type="submit" class="btn bhnft-btn-outline white" value="Submit" name="but_logout" id="but_logout"><i class="fas fa-sign-out-alt"></i>Logout</button>
            </form>
        </li>
    </ul>
    <?= breadcrumbs() ?>

