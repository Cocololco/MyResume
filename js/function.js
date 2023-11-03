document.addEventListener("DOMContentLoaded", function() {
  const navbarLinks = document.querySelectorAll(".navbar-nav .nav-link");
  const categoryContainers = document.querySelectorAll(".category");

  navbarLinks.forEach((link, index) => {
    link.addEventListener("click", () => {
      // Remove the "active" class from all navbar links
      navbarLinks.forEach(navLink => {
        navLink.classList.remove("active");
      });

      // Add the "active" class to the clicked navbar link
      link.classList.add("active");

      // Hide all category containers
      categoryContainers.forEach(container => {
        container.style.display = "none";
      });

      // Show the selected category container
      categoryContainers[index].style.display = "block";
    });
  });
});