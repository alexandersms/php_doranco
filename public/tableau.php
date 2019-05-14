<?php 
    require ("inc/header.php");
?>

            <?php 

            // $products = [
            //     [
            //         "name" => "Hamac",
            //         "description" => "Pour se reposer après 5 jours de PHP"
            //     ],
            //     [
            //         "name" => "Parasol",
            //         "description" => "Pour faire l'ombre au Hamac"
            //     ]
            // ]

            $hamac = [
                "name" => "Hamac",
                "description" => "Pour se reposer après 5 jours de PHP",
                "image_name" => "hamac.jpg"
            ];

            $parasol = [
                "name" => "Parasol",
                "description" => "Pour faire l'ombre au Hamac",
                "image_name" => "parasol.jpg"
            ];

            $ballon = [
                "name" => "ballon",
                "description" => "Pour jouer",
                "image_name" => "ballon.jpg"
            ];

            $products = [];
            $products[] = $hamac;
            $products[] = $parasol;
            $products[] = $ballon;

            // var_dump($products);
            // var_dump($products[0]['name']);
        ?>

<main class="container">
    <h1>Présentation des produits</h1>

    <section class="row">

            <?php foreach ($products as $product) : ?>

            <div class="card col-4">
            <img src="img/uploads/<?php echo $product['image_name'] ?>" class="card-img-top" alt="image_name">
            <div class="card-body">
                <h5 class="card-title"><?php echo $product['name']; ?></h5>
                <p class="card-text"><?php echo $product['description']; ?></p>
                <a href="#" class="btn btn-success">Card link</a>
            </div>
            </div>


            <?php 
            endforeach; ?>
    </section>

</main>
<?php
    require ("inc/footer.php");
?>