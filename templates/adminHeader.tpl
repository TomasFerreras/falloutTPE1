<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>FalloutDB</title>
</head>
<body class="adminBody">
    <header class="header admin-header">
        <nav class="nav re-container">
            <a href="home" class="nav-logo admin-logo">FALLOUT 4 DB</a>

            <div class="nav-menu" id="navMenu">
                <ul class="nav-list">
                    <li class="nav-item"><a href="allItems" class="nav-link nav-admin">All items</a></li>
                    <li class="nav-item"><a href="allCategories" class="nav-link nav-admin">All categories</a></li>
                    <li class="nav-item"><a href="admin" class="nav-link nav-admin">Admin Page</a></li>
                    <li class="nav-item"><a href="users" class="nav-link nav-admin">Users</a></li>
                    <li class="nav-item nav-login-item"><a href="logOut" class="nav-link nav-link-item nav-admin-btn">Log out</a></li>
                </ul>
            </div>

            <div class="nav-toggle" id="navToggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>