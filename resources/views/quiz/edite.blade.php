<!doctype html>

<html lang="en">

<head>

<!-- Required meta tags -->

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<title>Edit Data</title>

</head>

<body>

<h2>Edit Data Game</h2>

<!-- //Code disini -->
<form action="/game/{{$game->id}}" method="POST">
    @csrf
    @method('PUT')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="form-group">
        <label for="name">name</label>
        <input type="text" name="name" class="form-control" id="name" value="{{$game->name}}" aria-describedby=""emailHelp>
    </div>

    <div class="form-group">
        <label for="gameplay">gameplay</label>
        <input type="text" name="gameplay" class="form-control" id="gameplay" value="{{$game->gameplay}}" >
    </div>

    <div class="form-group">
        <label for="developer">developer</label>
        <input type="text" name="developer" class="form-control" id="developer" value="{{$game->developer}}">
    </div>

    <div class="form-group">
        <label for="year">year</label>
        <input type="number" name="year" class="form-control" id="year" value="{{$game->year}}">
    </div>

    <button type="submit" class="btn btn-success">Update</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>