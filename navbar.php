<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<style>
    /* Change the navigation bar background colour into deep blue */
    .navbar-custom {
        background-color: #1e3a8a !important;
    }
    
    /* Change the dropdown's table background into white colour */
    .navbar-custom .dropdown-menu {
        background-color: #ffffff !important;
        border: none !important;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
    }
    
    /* The initial text color for the menu dropdown (before being hovered) */
    .navbar-custom .dropdown-item {
        color: #212529 !important;
        background: transparent !important;
        padding: 0.6rem 1.5rem !important;
    }
    
    /* Change the Hover into Blue Colour */
    .navbar-custom .dropdown-item:hover, 
    .navbar-custom .dropdown-item:focus,
    .navbar-custom .dropdown-item:active {
        background-color: #2563eb !important; /* Light Soft Blue */
        color: #ffffff !important; /* White text*/
    }

    /* Support for Dark Mode Function (if it is active) */
    [data-bs-theme="dark"] .navbar-custom .dropdown-menu {
        background-color: #1e293b !important;
    }
    [data-bs-theme="dark"] .navbar-custom .dropdown-item {
        color: #f8f9fa !important;
    }
    [data-bs-theme="dark"] .navbar-custom .dropdown-item:hover {
        background-color: #3b82f6 !important;
    }
</style>

<nav class="navbar navbar-expand-md navbar-dark navbar-custom shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="dashboard.php">
            <i class="bi bi-mortarboard-fill fs-4 text-white"></i>
            <span>My Academic Hub</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'dashboard.php') ? 'active' : ''; ?>" href="dashboard.php">Main Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'courses.php') ? 'active' : ''; ?>" href="courses.php">My Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'schedule.php') ? 'active' : ''; ?>" href="schedule.php">Class Schedule</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo ($current_page == 'results.php') ? 'active' : ''; ?>" 
                       href="#" 
                       id="resultsDropdown" 
                       role="button" 
                       data-bs-toggle="dropdown" 
                       aria-expanded="false">
                       Exam Results
                    </a>
                    <ul class="dropdown-menu shadow" aria-labelledby="resultsDropdown">
                        <li><a class="dropdown-item" href="results.php">All Semester Overview</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="results.php#sem1">Semester 1</a></li>
                        <li><a class="dropdown-item" href="results.php#sem2">Semester 2</a></li>
                        <li><a class="dropdown-item" href="results.php#sem3">Semester 3</a></li>
                    </ul>
                </li>
            </ul>
            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-link text-white-50 p-0 text-decoration-none" id="darkModeToggle" type="button" title="Toggle Theme">
                    <i id="darkModeIcon" class="bi bi-moon-stars-fill fs-5"></i>
                </button>
                <a href="index.php" class="btn btn-danger btn-sm px-3">Logout</a>
            </div>
        </div>
    </div>
</nav>