<?php
//bonus 1: includere array.php:
include './array.php'

/*$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!--css-->
    <link rel="stylesheet" href="./css/style.css">
    <title>Hotel</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Parking</th>
                <th>Vote</th>
                <th>Distance to Center</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < count($hotels); $i++) { ?>
                <tr>
                    <td><?php echo $hotels[$i]['name']; ?></td>
                    <td><?php echo $hotels[$i]['description']; ?></td>
                    <td><?php echo $hotels[$i]['parking'] ? 'Yes' : 'No'; ?></td>
                    <td><?php echo $hotels[$i]['vote']; ?></td>
                    <td><?php echo $hotels[$i]['distance_to_center']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>