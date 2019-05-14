<?php 
    require ("../inc/header.php");
?>
    <section class="container">
        <h1>Ma page</h1>

        <p>
            <?php

                echo "Hello word";

                $boll = true;
                $int = 1.2;

                $content = "<p>Ceci est un paragraphe : $int</p>";
                $content2 = '<p>Ceci est un paragraphe : $int</p>';

                echo $content;
                // die("Fin du script"); // pour mettre fin à un script
                echo $content2;

                // Les constantes
                const NB_ARTICLES_NB = 6;
                // define ("DATABASE_NAME")

                var_dump($content);

                $ctn = "Bonjour ";
                $ctn1 = "tout le monde";

                echo $ctn . $ctn1;

                echo "<br>";

                // incrémentation et decrémentation

                $cpt = 5;

                echo $cpt ++;
                echo "<br>";
                echo $cpt;
                echo "<br>";
                echo ++$cpt;
                echo "<br>";
                echo --$cpt;
                echo "<br>";
                echo $cpt--;
                echo "<br>";
                echo $cpt;

                echo "<br>";

                // $nbr = 1;
                // $result = (1 === $nbr);
                // var_dump ($result);

                $nbr = 2;
                $result = ($nbr === 1);
                echo "resultat : " . $result . "|";


                $temp = -18;

                // if ($temp < 0 || $temp < 20) {
                //     echo "<p>La temperature est bonne</p>";
                // } elseif ($temp < 50) {
                //     echo "<p>La temperature es trop basse</p>";
                // } elseif ($temp = 0) {
                //     echo "<p>La temperature est gélé</p>";
                // } elseif ($temp >= 20 || $temp > 50) {
                //     echo "<p>La temperature est chaude</p>";
                // } else {
                //     echo "<p>helllo</p>";
                // }

                // $clim = ($temp < 20)? "<p>La temperature est bonne</p>" : "<p>La temperature est chaude</p>";

                // echo $clim;

                // if ($temp <= 20) {
                //     echo "<p>La temperature est bonne</p>";
                // } elseif ($temp > 50) {
                //     echo "<p>La temperature es trop basse</p>";
                // } elseif ($temp < 0) {
                //     echo "<p>La temperature est gélé</p>";
                // } elseif ($temp >= 20){
                //     echo "<p>La temperature est chaude</p>";
                // } else {

                // }

                // if ($temp > 0 && $temp < 20) {
                //     echo "<p>La temperature est bonne</p>";
                // } elseif ($temp > 50) {
                //     echo "<p>La temperature est trop chaude</p>";
                // } elseif ($temp <= 0) {
                //     echo "<p>La temperature est gélé</p>";
                // } else{
                //     echo "<p>La temperature est chaude</p>";
                // }

                if ($temp <= 0) {
                    echo "<p>La temperature est gélé</p>";
                } elseif ($temp < 20){
                    echo "<p>La temperature est bonne</p>";
                } elseif ($temp < 50) {
                    echo "<p>La temperature est chaude</p>";
                } else{
                    echo "<p>La temperature est trop chaude</p>";
                }

                // Les boucle
                /* Objectif : créer une liste à puces (10 puces)*/

                echo "<ul>";
                    $i = 1;
                    while ($i <= 10) {
                        echo "<li>Puce $i</li>";
                        $i++;
                    }
                echo "</ul>";

                echo "<ul>";

                    for ($i=0; $i < 10; $i++) { 
                        echo "<li>Puce $i</li>";
                    }

                echo "</ul>";

                // Tableau indexé
                    $fruits = ["Banane", "Pomme", "Citron", "Kiwi"];

                    echo "<ul>";

                        foreach ($fruits as $fruit) {
                            echo "<li>$fruit</li>";
                        }
                    echo "</ul>";

                $people = [
                    "Nom" => "Simisi",
                    "Prenom" => "Alex",
                    "age" => 30
                ];

            ?>

            <table>
                <thead>
                    <tr>
                        <?php 
                            foreach ($people as $key => $value) {
                                echo "<td>$key</td>";
                            }
                        
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php 
                            foreach ($people as $value) {
                                echo "<td>$value</td>";
                            }
                        
                        ?>
                    </tr>
                </tbody>
            </table>

        </p>

        <?php 
            $Mfruits = ["Pomme", "Citron", "Orange"];
            $Mfruits[] = "Kiwi";
            $separator= implode("</li><li>", $Mfruits);
            
            echo "<ul><li>" . $separator . "</ul></li>";       
        ?>


    </section>


    <?php 
    require ("../inc/footer.php");
?>







    