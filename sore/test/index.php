<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="continer-fluid d-none d-md-block">
        <div class="row">
            <div class="col bg-danger">
                <h1>A</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-7">
                <div class="row">
                    <div class="col bg-primary">
                        <h1>B</h1>
                        <h1>B</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col bg-success">
                        <h1>C</h1>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col bg-success">
                        <h1>D</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col bg-info">
                        <h1>E</h1>
                        <h1>E</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col bg-warning">
                <h1>F</h1>
            </div>
        </div>


    </div>

    <div class="continer-fluid d-none d-sm-block d-md-none">
        <div class="row">
            <div class="col bg-primary">
                <h1>ini konten tengah</h1>
            </div>
        </div>
    </div>

    <div class="continer-fluid d-sm-none">
        <div class="row">
            <div class="col bg-success">
                <h1>ini konten kanan</h1>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>