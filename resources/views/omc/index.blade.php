<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello world</title>
    <style type="text/css">
        p {
            font-size: 24px;
        }
    </style>
  </head>
  <body>
      <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <h1>Database structure</h1>
                <table class="table table-bordered">
                    <tr>
                        <th>Id</th>
                        <th>company</th>
                        <th>age_start</th>
                        <th>age_end</th>
                        <th>price</th>
                    </tr>
                    @foreach ($omcs as $omc)
                        <tr>
                            <td> <b>{{ $omc->id }}</b> </td>
                            <td> <b>{{ $omc->company }}</b> </td>
                            <td>{{ $omc->age_start }}</td>
                            <td>{{ $omc->age_end }}</td>
                            <td>{{ $omc->price }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td>so on</td>
                        <td>so on</td>
                        <td>so on</td>
                        <td>so on</td>
                        <td>so on</td>
                    </tr>

                </table>

                <h2 class="mt-2">Here: </h2>
                <p>Age 23 will fetch rows -> id 1, 6, 9</p>
                <p>Age 78 will fetch rows -> id 8, 12</p>
                <p>Question: How can query using eloquent or mysql </p>

            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </div>
</body>
</html>
