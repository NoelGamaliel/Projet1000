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
                        $nom = htmlspecialchars($_POST["nom"]);
                        $email = htmlspecialchars($_POST["email"]);
                        $subjet = htmlspecialchars($_POST["subjet"]);
                        $test = htmlspecialchars($_POST["test"]);
                        
                        $message = "";

                        /********** IF THE CHAMPS IS EMPTY ****************/
                        if (empty($_POST["nom"]) || empty($_POST["email"]) || empty($_POST["subjet"]) || empty($_POST["test"])) {
                            echo "<script>alert('Your champs are empty');</script>";
                        }
                        else {
                            /******** INSERT TO DATABASES *******************************/
                            $req = "INSERT INTO message (nom, email, subjet, test) VALUES (?,?,?,?)";
                            $stmt = $conn->prepare($req);

                            if ($stmt->execute([$nom, $email, $subjet, $test])) {
                                echo "<script>alert('Your message has send with succes!');</script>";

                                header('Location: index.php');
                            } else {
                                echo "<script>alert('Your message is not send!');</script>";
                            }                            
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

                <button type="submit" name="send">Send your message</button>
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