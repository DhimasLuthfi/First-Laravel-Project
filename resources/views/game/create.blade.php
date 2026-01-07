<!doctype html>

<html lang="en">

<head>

<!-- Required meta tags -->

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<title>Create Data</title>

</head>

<body>

<h2>Create Data Game</h2>


<form action='/game' method='POST'>
    @csrf

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
        <label for="name">Name</label>
        <input type="string" class="form-control" id="name" name="name" >
    </div>
    <div class="form-group">
        <label for="gameplay">Game Play</label>
        <textarea name="gameplay" class="form-control" id="gameplay" cols="10"></textarea>
    </div>
    <div class="form-group">
        <label for="developer">Developer</label>
        <input type="string" class="form-control" id="developer" name="developer">
    </div>
    <div class="form-group">
        <label for="year">Year</label>
        <input type="string" class="form-control" id="year" name="year">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>