window.addEventListener("DOMContentLoaded", (event) => {
  // Sidebar button with Icon change
  const sidebarWrapper = document.body.querySelector("#sidebar-wrapper");
  const sidebarWrapperStyle = getComputedStyle(sidebarWrapper);

  if (sidebarWrapperStyle.marginLeft == "-240px") {
    document.getElementById("testToggle").classList.add("burger");
    document.getElementById("testToggle").classList.remove("arrow-left");
  }

  const sidebarToggle = document.body.querySelector("#sidebarToggle");
  if (sidebarToggle) {
    // Uncomment Below to persist sidebar toggle between refreshes
    // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
    //     document.body.classList.toggle('sb-sidenav-toggled');
    // }
    sidebarToggle.addEventListener("click", (event) => {
      event.preventDefault();
      document.body.classList.toggle("sb-sidenav-toggled");
      document.getElementById("testToggle").classList.toggle("burger");
      document.getElementById("testToggle").classList.toggle("arrow-left");

      localStorage.setItem(
        "sb|sidebar-toggle",
        document.body.classList.contains("sb-sidenav-toggled")
      );
    });
  }
});
