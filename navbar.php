<div class="header_all">
    <div class="motto">
        <p>Good Foundation</p>
    </div>
    <div class="social_media">
        <a href="" target="_blank"><i class="fa-brands fa-facebook"></i></a>
        <a href="" target="_blank"><i class="fa-brands fa-instagram"></i></a>
    </div>
</div>
<div class="navbar_all">
    <a href="index.php">
        <div class="logo"></div>
    </a>
    <div class="nav_links">
        <a href="index.php">Home</a>
        <div class="dropdown">
            <a href="#">About Us <span><i class="fa-solid fa-angle-down"></i></span></a>
            <div class="dropdown-content">
                <a href="">Welcome Message</a>
                <a href="">Mission & Vision</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="#">Academics <span><i class="fa-solid fa-angle-down"></i></span></a>
            <div class="dropdown-content">
                <a href="">Curriculum</a>
                <a href="">Academic Programs</a>
            </div>
        </div>
        <a href="">Admissions</a>
        <a href="">Photo Gallery</a>
        <a href="">Contact Us</a>
    </div>


    <button id="toggleButton">
        <i class="fa-solid fa-bars-staggered"></i>
    </button>
    <div class="mobile">
    <a href="index.php">Home</a>
        <div class="dropdown">
            <a href="#">About Us <span><i class="fa-solid fa-angle-down"></i></span></a>
            <div class="dropdown-content">
                <a href="">Welcome Message</a>
                <a href="">Mission & Vision</a>
            </div>
        </div>
        <div class="dropdown">
            <a href="#">Academics <span><i class="fa-solid fa-angle-down"></i></span></a>
            <div class="dropdown-content">
                <a href="">Curriculum</a>
                <a href="">Academic Programs</a>
            </div>
        </div>
        <a href="">Admissions</a>
        <a href="">Photo Gallery</a>
        <a href="">Contact Us</a>
    </div>
</div>

<script>
    // Get the button and sidebar elements
    var toggleButton = document.getElementById("toggleButton");
    var sidebar = document.querySelector(".mobile");
    var icon = toggleButton.querySelector("i");

    // Add click event listener to the button
    toggleButton.addEventListener("click", function() {
        // Toggle the visibility of the sidebar
        if (sidebar.style.display === "none" || sidebar.style.display === "") {
            sidebar.style.display = "flex";
            sidebar.style.flexDirection = "column";
            icon.classList.remove("fa-bars-staggered");
            icon.classList.add("fa-xmark");
        } else {
            sidebar.style.display = "none";
            icon.classList.remove("fa-xmark");
            icon.classList.add("fa-bars-staggered");
        }
    });
</script>