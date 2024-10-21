<?php


@include('include.connection');

//$users = $connection->table('doctor')->get();

//$name=$connection->DB::table('doctor')->get();



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Hi galib</h1>

    <div>
        <ul>
            @foreach ($data as $i )

            <li>{{$i->username}}</li>
                
            @endforeach
        </ul>
    </div>

    <div>
        @foreach ( $data2 as $i )

        <li>{{$i->username}}</li>
            
        @endforeach
    </div>
    
</body>
</html>