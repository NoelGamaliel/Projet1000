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
        <form action="contact.php" method="post">
            <div class="container_form">
                <?php 
                    include 'conn/_cnx.php';

                    // declared the variable;
                    if (isset($_POST['send'])) {
                        /******************** SUPER VARIABLE OF MY PAGE ****************/
                        $nom = $_POST["nom"];
                        $email = $_POST["email"];
                        $subjet = $_POST["subjet"];
                        $test = $_POST["test"];

                        $message = "";

                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            # code...
                            /******** INSERT TO DATABASES *******************************/
                            $req = "INSERT INTO message (nom, email, subjet, test) VALUES (?, ?, ?, ?)";
                            $stmt = $conn->prepare($req);

                            if ($stmt->execute(array($nom, $email, $subjet, $test))) {
                                echo 'Your request as received with succes! Return to home page...';
                            } else {
                                echo 'Your article is not saved !';
                            }
                        }
                        else {
                            echo 'change the format the your email';
                        }

                    }
                ?>
                <label for="name">Name :</label>
                <input type="text" name="nom" id="name" placeholder="your name complet" require autofocus>

                <label for="email">Email :</label>
                <input type="email" name="email" id="email" placeholder="your address email" require>

                <label for="subjet">Subjet :</label>
                <input type="text" name="subjet" id="subjet" placeholder="your subjet" require>

                <label for="message">Message :</label>
                <textarea name="test" id="message" cols="30" rows="4" placeholder="writing your message here" require></textarea>

                <button type="submit" name="send">Send</button>
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