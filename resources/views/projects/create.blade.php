<!DOCTYPE html>
<html>
<head>

    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
</head>
<body>  
    <div class="container">
    <h1> Create a new project </h1>

        <form method="POST" action="/projects">
            {{ csrf_field() }}
            <div class="field">
                <div class="control">
                <input type="text" name="title" placeholder="Project title" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" value="{{ old('title') }}">
                </div>
            </div>

            <div class="field">
                <div class="control">
                <textarea name="description" placeholder="Project Description" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}">{{ old('description') }}</textarea>
                </div>
            </div>

            <div class="control">
                <button type="submit" class="button is-primary">Create Project</button>
            </div>

            @include ('errors')

        </form>
    </div>
</body>
</html>