<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
       <div class="logo_name">Gampola Zonal</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">

      <li>
        <a href="add_news.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">News</span>
        </a>
         <span class="tooltip">News</span>
      </li>
      <li>
       <a href="index.php">
         <i class='bx bx-arrow-back' ></i>
         <span class="links_name">Back</span>
       </a>
       <span class="tooltip">Back</span>
     </li>
     <li>
       <a href="view_module.php">
        <i class='bx bx-spreadsheet'></i>
         <span class="links_name">Modules</span>
       </a>
       <span class="tooltip">Modules</span>
     </li>
     <li>
       <a href="view_z.php">
         <i class='bx bxs-report' ></i>
         <span class="links_name">Zonal Paper</span>
       </a>
       <span class="tooltip">Zonal Paper</span>
     </li>
     <li>
       <a href="view_dep.php">
         <i class='bx bxs-bar-chart-square' ></i>
         <span class="links_name">Dep paper</span>
       </a>
       <span class="tooltip">Dep paper</span>
     </li>
     <li>
       <a href="view_mpaper.php">
         <i class='bx bx-merge' ></i>
         <span class="links_name">Model paper</span>
       </a>
       <span class="tooltip">Model paper</span>
     </li>
     <li>
       <a href="viewo.php">
        <i class='bx bx-trim' ></i>
         <span class="links_name">Online Test</span>
       </a>
       <span class="tooltip">Online Test</span>
     </li>
     <li>

       <a href="logout.php">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Log out</span>
       </a>
       <span class="tooltip">Log out</span>
     </li>>
    </ul>
  </div>

  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
</body>
</html>
