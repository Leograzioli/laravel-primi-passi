<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        ul {
            list-style-type: none;

            display: flex;
        }

        li {
            margin: 0 1rem;
        }

        header {
            height: 80px;

            display: flex;
            align-items: center;
            background-color: lightblue;
            justify-content: end;
            padding: 0 2rem;
        }

        h1 {
            margin: 2rem 1rem;
        }
    </style>
</head>

<body>
    <header>
        <nav class="nav-bar">
            <ul>

                @foreach ($links as $link)
                    <li>
                        <a href="{{ route($link['href']) }}"> {{ $link['name'] }} </a>
                    </li>
                @endforeach

            </ul>
        </nav>
    </header>

    <main>
        <h1>{{ $greeting }}</h1>
    </main>
</body>

</html>
