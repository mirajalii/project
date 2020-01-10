<!DOCTYPE html>
<head>

    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
</head>

<body>
    <div class="container">
        <h1 class="title">Projects</h1>    
        <ul>
            
            @foreach ($projects as $project)
                
                <li>
                <a href="/projects/{{ $project->id }}">
                        {{ $project->title }} 
                    </a>
                </li>

            @endforeach 
            
        </ul>
    </div>

</body>

</html>