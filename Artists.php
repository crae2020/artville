<?php
   session_start();
   ob_start();
    include "dbconnect.php"; // Using database connection file here
    ob_end_clean();

    $query = "SELECT * FROM artists";  // SQL query to fetch all the table data
    $view_artists = mysqli_query($conn, $query);   // Sending the query to the database

    if(isset($_POST['deleteArtist'])){
      $userid = $_POST['deleteArtist'];
  
      //SQL query to delte data from user table
      $query = "DELETE FROM artists WHERE artist_id = {$userid}";
      $delete_query = mysqli_query($conn, $query);
      // header("Location: Artists.php");
  }

  $_SESSION['user_id'] = "";
  if (isset($_POST['editArtistInfo'])) {
    $_SESSION['user_id'] = $_POST['editArtistInfo'];
    echo $_SESSION['user_id'];
    header("Location: Update_artist.php");
  }


?>


<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="INTUITIVE">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Artists</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Artists.css" media="screen">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
     </script>
    <meta name="theme-color" content="#478ac9">
    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Artists">
    <meta name="twitter:description" content="">
    <meta property="og:title" content="Artists">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-white u-header" id="sec-1d49"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="#" class="u-btn u-btn-round u-button-style u-custom-font u-hidden-xs u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-1">Favourites</a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse u-custom-font" style="font-size: 0.9375rem; letter-spacing: 0px; font-family: Poppins; font-weight: 500;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-custom-font u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-1-light-1" href="Home.php" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-1-light-1" href="#" style="padding: 10px 20px;">Exhibition</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-1-light-1" href="Artists.php" style="padding: 10px 20px;">Artists</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-1-light-1" href="Artworks.php" style="padding: 10px 20px;">Artworks</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#" style="padding: 10px 20px;">Exhibition</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Artists.php" style="padding: 10px 20px;">Artists</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Artworks.php" style="padding: 10px 20px;">Artworks</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <a href="logout.php" class="u-border-2 u-border-palette-1-base u-btn u-btn-round u-button-style u-custom-font u-hidden-xs u-hover-palette-1-light-1 u-none u-radius-6 u-text-body-color u-text-hover-white u-btn-2">Logout</a>
        <a href="Home.php" class="u-image u-logo u-image-1" data-image-width="137" data-image-height="44">
          <img src="images/ArtVilleLogo1_150.png" class="u-logo-image u-logo-image-1">
        </a>
      </div></header>
    <section class="u-align-center u-clearfix u-section-1" id="carousel_deec">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h4 class="u-text u-text-default u-text-1">Artists Information</h4>
        <a href="Add_new_artists.php" class="u-border-2 u-border-black u-btn u-btn-round u-button-style u-hover-black u-none u-radius-6 u-text-body-color u-text-hover-white u-btn-1">Add new artist</a>
        <a href="Home.php" class="u-black u-border-2 u-border-black u-border-hover-black u-btn u-btn-round u-button-style u-hover-white u-radius-6 u-btn-2">Back</a>
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <form method="post">
          <table class="u-table-entity">
            <colgroup>
              <col width="14.2%">
              <col width="14.2%">
              <col width="14.2%">
              <col width="14.2%">
              <col width="14.6%">
              <col width="14.600000000000005%">
              <col width="13.900000000000006%">
            </colgroup>
            <thead class="u-align-center u-black u-table-header u-table-header-1">
              <tr style="height: 21px;">
                <th class="u-border-2 u-border-black u-table-cell">Name</th>
                <th class="u-border-2 u-border-black u-table-cell">Email</th>
                <th class="u-border-2 u-border-black u-table-cell">Art Style</th>
                <th class="u-border-2 u-border-black u-table-cell">Art Title</th>
                <th class="u-border-2 u-border-black u-table-cell">Year Created</th>
                <th class="u-border-2 u-border-black u-table-cell"></th>
                <th class="u-border-2 u-border-black u-table-cell"></th>
              </tr>
            </thead>
              <tbody class="u-align-center u-table-alt-grey-15 u-table-body">
                <?php while($row = mysqli_fetch_assoc($view_artists)){?>
                <tr style="height: 75px;">
                  <td class="u-border-2 u-border-grey-10 u-table-cell"><?=$row['fullname']?></td>
                  <td class="u-border-2 u-border-grey-10 u-table-cell"><?=$row['email']?></td>
                  <td class="u-border-2 u-border-grey-10 u-table-cell"><?=$row['art_style']?></td>
                  <td class="u-border-2 u-border-grey-10 u-table-cell"><?=$row['art_title']?></td>
                  <td class="u-border-2 u-border-grey-10 u-table-cell"><?=$row['year_created']?></td>
                  <td ><button name = "editArtistInfo" value = <?=$row['artist_id']?> style=" background-color:blue;  width:90%; border-radius:5px">Edit</button></td>
                  <td ><button name = "deleteArtist" value = <?=$row['artist_id']?> style = "background-color:red; width:90%; border-radius:5px">Delete</button></td>
                </tr>
                <?php }?>
              </tbody>
            </table>
          </section>
        </form>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-60 u-footer" id="sec-c37c"><div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <img class="u-image u-image-default u-preserve-proportions u-image-1" src="images/ArtVilleLogo3.svg" alt="" data-image-width="156" data-image-height="50">
        <p class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xs u-custom-font u-small-text u-text u-text-variant u-text-1">PMB FH 17639<br>Abelemkpe - Accra<br>+233 2547 587 4548<br>0302 5846 4154 457<br>info@artville.com.gh
        </p>
        <p class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xs u-custom-font u-small-text u-text u-text-variant u-text-2">ArtVille Gallery<br>Kempinski Hotel<br>228 Dapibus Road East<br>Abelemkpe - Accra<br>Ghana
        </p>
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-center-xl u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xs u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                  <h5 class="u-custom-font u-text u-text-3">Connect with us | Site policies | Site map</h5>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <div class="u-social-icons u-spacing-10 u-social-icons-1">
                    <a class="u-social-url" title="facebook" target="_blank" href="https://facebook.com/name"><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112.196 112.196"  ><use xlink:href="#svg-f82c"></use></svg><svg class="u-svg-content" viewBox="0 0 112.196 112.196" x="0px" y="0px" id="svg-f82c" style="enable-background:new 0 0 112.196 112.196;"><g><circle style="fill:currentColor;" cx="56.098" cy="56.098" r="56.098"></circle><path style="fill:#FFFFFF;" d="M70.201,58.294h-10.01v36.672H45.025V58.294h-7.213V45.406h7.213v-8.34   c0-5.964,2.833-15.303,15.301-15.303L71.56,21.81v12.51h-8.151c-1.337,0-3.217,0.668-3.217,3.513v7.585h11.334L70.201,58.294z"></path>
</g></svg></span>
                    </a>
                    <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/name"><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112.197 112.197"  ><use xlink:href="#svg-c49a"></use></svg><svg class="u-svg-content" viewBox="0 0 112.197 112.197" x="0px" y="0px" id="svg-c49a" style="enable-background:new 0 0 112.197 112.197;"><g><circle style="fill:#55ACEE;" cx="56.099" cy="56.098" r="56.098"></circle><g><path style="fill:#F1F2F2;" d="M90.461,40.316c-2.404,1.066-4.99,1.787-7.702,2.109c2.769-1.659,4.894-4.284,5.897-7.417    c-2.591,1.537-5.462,2.652-8.515,3.253c-2.446-2.605-5.931-4.233-9.79-4.233c-7.404,0-13.409,6.005-13.409,13.409    c0,1.051,0.119,2.074,0.349,3.056c-11.144-0.559-21.025-5.897-27.639-14.012c-1.154,1.98-1.816,4.285-1.816,6.742    c0,4.651,2.369,8.757,5.965,11.161c-2.197-0.069-4.266-0.672-6.073-1.679c-0.001,0.057-0.001,0.114-0.001,0.17    c0,6.497,4.624,11.916,10.757,13.147c-1.124,0.308-2.311,0.471-3.532,0.471c-0.866,0-1.705-0.083-2.523-0.239    c1.706,5.326,6.657,9.203,12.526,9.312c-4.59,3.597-10.371,5.74-16.655,5.74c-1.08,0-2.15-0.063-3.197-0.188    c5.931,3.806,12.981,6.025,20.553,6.025c24.664,0,38.152-20.432,38.152-38.153c0-0.581-0.013-1.16-0.039-1.734    C86.391,45.366,88.664,43.005,90.461,40.316L90.461,40.316z"></path>
</g>
</g></svg></span>
                    </a>
                    <a class="u-social-url" target="_blank" title="Instagram" href=""><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112"  ><use xlink:href="#svg-65aa"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-65aa"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
                    </a>
                    <a class="u-social-url" target="_blank" title="LinkedIn" href=""><span class="u-icon u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112"  ><use xlink:href="#svg-eb6a"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-eb6a"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path></svg></span>
                    </a>
                    <a class="u-social-url" target="_blank" title="Pinterest" href=""><span class="u-icon u-social-icon u-social-pinterest u-icon-5"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112"  ><use xlink:href="#svg-4c56"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-4c56"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M61.1,76.9c-4.7-0.3-6.7-2.7-10.3-5c-2,10.7-4.6,20.9-11.9,26.2c-2.2-16.1,3.3-28.2,5.9-41
            c-4.4-7.5,0.6-22.5,9.9-18.8c11.6,4.6-10,27.8,4.4,30.7C74.2,72,80.3,42.8,71,33.4C57.5,19.6,31.7,33,34.9,52.6
            c0.8,4.8,5.8,6.2,2,12.9c-8.7-1.9-11.2-8.8-10.9-17.8C26.5,32.8,39.3,22.5,52.2,21c16.3-1.9,31.6,5.9,33.7,21.2
            C88.2,59.5,78.6,78.2,61.1,76.9z"></path></svg></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="u-custom-font u-small-text u-text u-text-variant u-text-4">© ArtVille Gallery. Est 2021. All Rights Reserved | Site by Kekeli Mensah<br>
        </p>
      </div></footer>
  </body>
</html>