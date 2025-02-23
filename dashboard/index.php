<?php
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: index.php");
        die();
    }

    include 'config.php';

   /* $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);

        echo "Welcome " . $row['name'] . " <a href='logout.php'>Logout</a>";
    } */
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="dashboard/css/style.css">
    <title>DashBoard</title>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#" class="logo">
            <i class='bx bx-code-alt'></i> 

            <div class="logo-name">
        <br>
        <br>
            <?php    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");

if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_assoc($query);

    echo "Welcome " . $row['name'] ;
}
?>
</div>
        </a>
        <ul class="side-menu">
            <li><a href="#"><i class='bx bxs-dashboard'></i>Dashboard</a></li>
            <li><a href="#"><i class='bx bx-store-alt'></i>My MovieList</a></li>
            <li class="active"><a href="#"><i class='bx bx-analyse'></i>Analytics</a></li>
            <li><a href="#"><i class='bx bx-message-square-dots'></i>Tickets</a></li>
            <li><a href="#"><i class='bx bx-group'></i>Users</a></li>
            <li><a href="#"><i class='bx bx-cog'></i>Settings</a></li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="logout.php" class="logout">
                    <i class='bx bx-log-out-circle'></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <nav>
            <i class='bx bx-menu'></i>
        
            <form id="searchDorm">
        <div class="form-input">
            <input type="search" id="searchInput" placeholder="Search..." required>
            <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
        </div>
    </form>



    
            <input type="checkbox" id="theme-toggle" hidden>
            <label for="theme-toggle" class="theme-toggle"></label>
            
            <div class="profile">
    <img id="profilePic" src="dashboard/images/logo.png" alt="Profile Picture">
    <input type="file" id="profilePicInput" accept="image/*" style="display: none;">
</div>
        </nav>

        <!-- End of Navbar -->

        <main>
            <div class="header">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">
                                Analytics
                            </a></li>
                        /
                        <li><a href="#" class="active">Shop</a></li>
                    </ul>
                </div>
             
            </div>

            <!-- Insights -->
            <ul class="insights">
            <li><i class='bx bx-list-plus'></i>
            <span class="info">
                <h3 id="watchlistAdditions">0</h3>
                <p>Watchlist Additions</p>
            </span>
        </li>
                <li>
            <i class='bx bx-show-alt'></i>
            <span class="info">
                <h3 id="visitCount">0</h3>
                <p>Site Visits</p>
            </span>
        </li>
        <li><i class='bx bx-search'></i>
            <span class="info">
                <h3 id="totalSearches">0</h3>
                <p>Total Searches</p>
            </span>
        </li>
                <li><i class='bx bx-film'></i>
            <span class="info">
                <h3 id="moviesIdentified">0</h3>
                <p>Movies Identified</p>
            </span>
        </li>
              
            </ul>
            <!-- End of Insights -->

        
            <div class="bottom-data">
        <div class="orders">
            <div class="header">
                <i class='bx bx-receipt'></i>
                <h3>Recent Searches</h3>
                <i class='bx bx-filter'></i>
                <i class='bx bx-search'></i>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Movie</th>
                        <th>Search Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody id="recentSearches">
                    <!-- New searches will appear here -->
                </tbody>
            </table>
        </div>
    </div>

                <!-- Reminders 
                <div class="reminders">
                    <div class="header">
                        <i class='bx bx-note'></i>
                        <h3>Remiders</h3>
                        <i class='bx bx-filter'></i>
                        <i class='bx bx-plus'></i>
                    </div>
                    <ul class="task-list">
                        <li class="completed">
                            <div class="task-title">
                                <i class='bx bx-check-circle'></i>
                                <p>Start Our Meeting</p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li class="completed">
                            <div class="task-title">
                                <i class='bx bx-check-circle'></i>
                                <p>Analyse Our Site</p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li class="not-completed">
                            <div class="task-title">
                                <i class='bx bx-x-circle'></i>
                                <p>Play Footbal</p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                    </ul>
                </div>
-->
                <!-- End of Reminders-->

            </div>

        </main>

    </div>

    
<script>
    const searchDorm = document.getElementById('searchDorm');
const searchInput = document.getElementById('searchInput');
const recentSearches = document.getElementById('recentSearches');

searchDorm.addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form from refreshing the page

    const searchValue = searchInput.value.trim();
    if (searchValue === '') return;

    const currentDate = new Date().toLocaleDateString();

    const newRow = document.createElement('tr');
    newRow.innerHTML = `
        <td>
            <img src="dashboard/images/profile-1.jpg" alt="Profile Image" style="width: 40px; height: 40px; border-radius: 50%;">
            <p>${searchValue}</p>
        </td>
        <td>${currentDate}</td>
        <td><span class="status pending">Pending</span></td>
    `;

    recentSearches.prepend(newRow); // Add the new search at the top
    searchInput.value = ''; // Clear the search bar
});



const profilePic = document.getElementById("profilePic");
    const profilePicInput = document.getElementById("profilePicInput");

    // Open file input when user clicks on the profile picture
    profilePic.addEventListener("click", function () {
        profilePicInput.click();
    });

    // Update profile picture when a new file is selected
    profilePicInput.addEventListener("change", function (event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                profilePic.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });
    
</script>
    <script src="dashboard/js/index.js"></script>
    
</body>

</html>