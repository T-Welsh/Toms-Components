<?php

?>
<!-- PATH TO STYLE SHEET FROM INDEX FILE -->
<link rel="stylesheet" href="./_INC/Navbar/navbar.css">
<script type="application/javascript" src="./_INC/Navbar/navbar.js" defer></script>

<nav class="topnav" id="topnav">

    <!-- COMPANY LOGO -->
    <div class="logo-wrapper">
        <a href="#">LOGO HERE</a>
    </div>
    <!-- TOGGLE ICON -->
    <button class="navbar-toggler">
        <span class="navbar-toggler-icon">
            <!-- Icon for toggle button is set using event listener in navbar.js -->
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/></svg>
        </span>
    </button>

    <!-- NAV LINKS -->
    <!-- Content here will be collapsed on smaller screen sizes -->
    <div class="collapsible-content" id="collapsible-content" aria-expanded="false">
        <ul class="nav-links">
            <li class="navlink-item"><a href="">Link 1</a></li>
            <li class="navlink-item"><a href="">Link 2</a></li>
            <li class="navlink-item"><a href="">Link 3</a></li>
            <li class="navlink-item"><a href="">Link 4</a></li>
            <li class="navlink-item"><a href="">Link 5</a></li>
        </ul>
    </div>

</nav>