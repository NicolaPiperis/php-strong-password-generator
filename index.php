<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- TITLE -->
    <title>PASSWORD GENERATOR</title>

        <?php
        include "functions.php";
        ?>

</head>
<body>

    <h1>Strong password generator</h1>
    <h2>Genera una password sicura</h2>

    <div class="container result">
        La password è :
        <?php
            echo $pass;
        ?>
        
    </div>

    <div class="container setting">

        <form>

            <!-- PASSWORD E LUNGHEZZA -->
            <div class="container d-flex justify-content-between align-items-center pt-5">
                <label for="length">Lunghezza password : </label>
                <input type="text" name="length">
            </div>

            <!-- RIPETIZIONE CARATTERI -->
            <div class="container d-flex justify-content-between align-items-center pt-5">

                <label for="rep">Consenti ripetizioni di uno o più caratteri : </label>

                <div class="me-5">

                    <div class="d-flex gap-3 align-items-center" >
                        <input type="radio" name="yes" value="yes">
                        <label for="yes">Yes</label>
                    </div>

                    <div class="d-flex gap-3 align-items-center" >
                        <input type="radio" name="no" value="no">
                        <label for="no">No</label>
                    </div>

                </div>

            </div>

            <!-- OPZIONI CARATTERI -->
            <div class="container d-flex justify-content-end pt-5">

                <div class="flex-column me-5">

                    <div class="d-flex gap-3 align-items-center" >
                        <input type="checkbox" name="lettere" value="lettere">
                        <label for="lettere">Lettere</label>
                    </div>

                    <div class="d-flex gap-3 align-items-center" >
                        <input type="checkbox" name="numeri" value="numeri">
                        <label for="numeri">Numeri</label>
                    </div>

                    <div class="d-flex gap-3 align-items-center" >
                        <input type="checkbox" name="simboli" value="simboli">
                        <label for="simboli">Simboli</label>
                    </div>

                </div>

            </div>

            <!-- BOTTONI -->
            <div>
                <input type="submit" value="length" class="bg-primary p-3">
                <input type="submit" value="annulla" class="bg-danger p-3">
            </div>

        </form>


    </div>

</body>
</html>