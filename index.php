<?php
/*## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
## Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
## Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
## Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. */
$partite = [
    [
        'casa' =>[
        'squadra' => 'olimpia milano',
        'punti' => 55,
        ],
        'ospiti'=>[
        'squadra' => 'cantu',
        'punti' => 60,
        ]
    ],
    [
        'casa' =>[
        'squadra' => 'olimpia milano',
        'punti' => 55,
        ],
        'ospiti'=>[
        'squadra' => 'cantu',
        'punti' => 60,
        ]
    ],    
        
];


$newArray = [];

while(count($newArray) < 15) {
    $number = rand(1,50);
    if(!in_array($number,$newArray)){
    $newArray[] = $number;
    }
};
$paragrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime debitis magnam voluptatem ducimus nemo alias quidem quibusdam aut placeat cupiditate, vero qui eum deleniti corporis, porro veritatis? Ea libero ipsa illum temporibus. Quos sunt natus iste, dolores atque iusto fugiat!';


$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

if(strpos($db,'teachers') !== false ){
    $class= 'alert-error';
}else{
    $class='alert-success';
};

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];



$keys = array_keys($posts);
var_dump($posts['10/01/2019']);
for($i = 0;$i< count ($keys); $i++){
    echo "<h2>{$keys[$i]}</h2>";
    for($x= 0; $x << count($posts[$keys[$i]]); $x++){
        echo "<span>{$posts[$keys[$i]][$x]['title']}</span><br>";
    }   
};





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .alert-error{
            color:red;
        }
        .alert-success{
            color:green;
        }
    </style>
</head>
<body>
    <main>
        <h1>SNACK  4</h1>
        <p> <?php var_dump($newArray) ?> </p> 

        <h1>SNACK 5 </h1>
        <?php var_dump (explode(".",$paragrafo))?>

        <h1>SNACK 6</h1>
        <?php foreach($db as $y => $y_value) {?>
       
        <div class="<?php echo $class ?>"> <?php echo 'ruolo:' . $y;} ?></div>



        <h1>SNACK 7</h1>
        <?php 
        foreach($posts as $key => $value){
            echo "<h2>{$key}</h2>";

            foreach($value as $item){
                echo "<ul>";
                foreach($item as $k=>$val){
                    echo "<li>{$k}: {$val}</li>";
                }
                echo "</ul>";

            }

        }
        
        
        ?>


    </main>
</body>
</html>