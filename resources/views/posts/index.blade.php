<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company</title>
</head>

<body>
    <ul>

        @forelse ($posts as $post)
        <li>
            <h2>
                {{ $post['title'] }}
            </h2>
            <p>
                {{ $post['content'] }}
            </p>
        </li>
        @empty
        <li>
            <h2>No posts available</h2>
        </li>
        @endforelse
        
    </ul>
</body>

</html>
