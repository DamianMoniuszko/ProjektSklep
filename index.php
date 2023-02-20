<?php
require_once"systemClass.php";
require_once"layoutClass.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php
SystemClass::printHead("./styles/main.css");
?>
<body>
    <?php
    LayoutClass::printHeader();
    ?>

    <section class='hero'>
        <div class='hero__container'>
            <h1>Welcome to DAMIANEX</h1>
            <!-- <p>Sklep</p> -->
            <button type='button'>
                <a>Sklep</a>
        </div>  
    </section>

    <?php
    LayoutClass::printFooter();
    ?>

</body>
</html>
