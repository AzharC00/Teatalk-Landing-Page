<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="css/styles.css">

        <title>Teatalk Program</title>
         <!-- CSS Libraries -->
         <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
         <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">     
    </head>

    <body>
        <!--===== HEADER =====-->
        <?php include"frame/header.php"?>
        <!--===== HOME =====-->
        <main class="l-main">
        <?php include"frame/hero.php"?>
            


        <!--===== ABOUT PROGRAM =====-->
        <?php include"frame/about.php"?>
            

        <!--===== LIST PROGRAM =====-->
        <?php include"frame/list.php"?>
           

        <!--===== PROGRAM LIVE =====-->
        <?php include"frame/live.php"?>
              

        <!--===== LINK =====-->
        <?php include"frame/link.php"?>

   
        </main>

        <!--===== GSAP =====-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
      
    </body>
</html>