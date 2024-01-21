<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/style.css">
    
    <title>Contact</title>
</head>
<body>

    <?php
        include 'header.php';
    ?>
    <br><br><br>
    <main class="boxContainer">
        <form action="" method="post">
            <div class="container_form">
                <label for="name">Name :</label>
                <input type="text" name="name" id="name" require autofocus>

                <label for="email">Email :</label>
                <input type="email" name="email" id="email" require>

                <label for="subjet">Subjet :</label>
                <input type="text" name="subjet" id="subjet" require>

                <label for="message">Message :</label>
                <textarea name="message" id="message" cols="30" rows="4" require></textarea>

                <button type="submit">Send</button>
            </div>
        </form>
    </main>
    <br><br><br><br><br><br><br>
    <!-- footer of my page -->
        <?php
            include 'footer.php';
        ?>
    <!-- End footer of my page -->
    <script src="./script.js"></script>
</body>
</html>