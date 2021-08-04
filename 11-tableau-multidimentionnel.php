<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau Multidim.</title>
</head>
<body>
    
    <h1>Tableau Multidim.</h1>

<pre>
# | firstname  | lastname | age 
---------------------------------
1 | John       | Doe      | 35
2 | John       | Wayne    | 90
3 | Jane       | Doe      | 35
4 | Bob        | Sponge   | 2
</pre>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>firstname</th>
                <th>lastname</th>
                <th>age</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John</td>
                <td>Doe</td>
                <td>35</td>
            </tr>
            <tr>
                <td>2</td>
                <td>John</td>
                <td>Wayne</td>
                <td>90</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Jane</td>
                <td>Doe</td>
                <td>35</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Bob</td>
                <td>Sponge</td>
                <td>2</td>
            </tr>
        </tbody>
    </table>


    <h2>Creation du tableau multidim.</h2>

    <pre>$users = [
    // Line 1 - index 0
    [
        'firstname' => "John",
        'lastname' => "Doe",
        'age' => 35
    ],
    // Line 2 - index 1
    [
        'firstname' => "John",
        'lastname' => "Wayne",
        'age' => 90
    ],
    // Line 3 - index 2
    [
        'firstname' => "Jane",
        'lastname' => "Doe",
        'age' => 35
    ],
    // Line 4 - index 3
    [
        'firstname' => "Bob",
        'lastname' => "Sponge",
        'age' => 2
    ],
];</pre>

    <!-- Exemple PHP -->
    <?php 
    $users = [
        // Line 1 - index 0
        [
            'firstname' => "John",
            'lastname' => "Doe",
            'age' => 35
        ],
        // Line 2 - index 1
        [
            'firstname' => "John",
            'lastname' => "Wayne",
            'age' => 90
        ],
        // Line 3 - index 2
        [
            'firstname' => "Jane",
            'lastname' => "Doe",
            'age' => 35
        ],
        // Line 4 - index 3
        [
            'firstname' => "Bob",
            'lastname' => "Sponge",
            'age' => 2
        ],
    ];
    ?>

    <pre><?php print_r($users) ?></pre>


    <h2>Affichage du tableau</h2>

    <?php 
    for ($i=0; $i< count($users); $i++)
    {
        echo $i + 1 . ", ";
        echo $users[$i]['firstname'] . ", ";
        echo $users[$i]['lastname'] . ",";
        echo $users[$i]['age'] . "<br>";
    }
    ?>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</body>
</html>