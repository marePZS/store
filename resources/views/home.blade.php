
<html>
    <head>
        <title>Store</title>
    </head>
    <body>
        <h1>Home page</h1>

        <p>List of items:</p>
        <div>
            <ul>
            @foreach($items as $item)
                <li>
                    <a href="/store/{{$item->id}}">
                    {{$item->name}}
                    </a>
                </li>
            @endforeach
            </ul>
        </div>
    </body>
</html>
