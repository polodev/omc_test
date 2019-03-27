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

            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    </div>
</body>
</html>
