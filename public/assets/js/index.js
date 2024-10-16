// Get references to sidebar, toggle button, and close button
var sidebar = document.getElementById("sidebar");
var sidebarToggle = document.getElementById("sidebarToggle");
var closeSidebar = document.getElementById("closeSidebar");

// Add click event listener to toggle button
sidebarToggle.addEventListener("click", function () {
    sidebar.style.right = "0px"; // Show sidebar
});

// Add click event listener to close button
closeSidebar.addEventListener("click", function () {
    sidebar.style.right = "-440px"; // Hide sidebar
});

/////////////////////fixed nav

///add sticky on nav-bar

window.addEventListener("scroll", function () {
    var header = document.querySelector(".fixed-nav")
    header.classList.toggle("sticky", window.scrollY > 0);
    header.classList.toggle("sticky2", window.scrollY > 10);
})

///////////////go to top 

const goTopBtn = document.getElementById('goTopBtn');
const progressBar = document.getElementById('progressBar');

// Show/Hide the Go to Top button and update the progress bar on scroll
window.onscroll = function () {
    scrollFunction();
    updateProgressBar();
};

function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        goTopBtn.style.display = "block";
    } else {
        goTopBtn.style.display = "none";
    }
}

// Function to update the progress bar height and color based on scroll position
function updateProgressBar() {
    const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const scrolledPercentage = (scrollTop / scrollHeight) * 100;

    progressBar.style.height = scrolledPercentage + "%";

    // Change background color based on how far the user scrolls
    if (scrolledPercentage > 50) {
        progressBar.style.backgroundColor = '#f38323'; // Red color after 50% scroll
    } else {
        progressBar.style.backgroundColor = 'rgba(243, 131, 35,.5)'; // Green color before 50%
    }
}

// Function to smoothly scroll to the top with cubic-bezier easing
function scrollToTop() {
    const duration = 1000; // Animation duration in milliseconds
    const startPosition = window.pageYOffset;
    const startTime = performance.now();

    const easeInOutCubicBezier = (t) => {
        return cubicBezier(t, 0.25, 1, 0.5, 1);
    };

    function cubicBezier(t, p1x, p1y, p2x, p2y) {
        const ax = 3 * p1x - 3 * p2x + 1;
        const bx = 3 * p2x - 6 * p1x;
        const cx = 3 * p1x;

        const ay = 3 * p1y - 3 * p2y + 1;
        const by = 3 * p2y - 6 * p1y;
        const cy = 3 * p1y;

        const solveX = (t) => ((ax * t + bx) * t + cx) * t;
        const solveY = (t) => ((ay * t + by) * t + cy) * t;

        let x = t, i = 0;
        while (i < 14) {
            const dx = solveX(x) - t;
            if (Math.abs(dx) < 1e-5) break;
            x -= dx / (3 * ax * x * x + 2 * bx * x + cx);
            i++;
        }
        return solveY(x);
    }

    function animateScroll(currentTime) {
        const timeElapsed = currentTime - startTime;
        const progress = Math.min(timeElapsed / duration, 1);
        const easing = easeInOutCubicBezier(progress);

        window.scrollTo(0, startPosition * (1 - easing));

        if (timeElapsed < duration) {
            requestAnimationFrame(animateScroll);
        }
    }

    requestAnimationFrame(animateScroll);
}


////////// show search modal ////////////


// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("openModalBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function () {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}