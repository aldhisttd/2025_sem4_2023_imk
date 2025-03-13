<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    
    <div class="container-fluid">

        
        <div class="row">
            <div class="col-12 col-md-3 bg-primary">HEADER</div>
            <div class="col d-sm-none d-md-block bg-danger">MENU</div>
        </div>

        <div class="row">
            <div class="col bg-info">HERO</div>
        </div>

        <div class="row">

            <!-- tablet sm -->
            <div class="col d-md-none">
                <div class="row">
                    <div class="col-12 col-sm-3 bg-danger d-none d-sm-block">
                        MENU
                    </div>
                    <div class="col">
                        
                        <div class="row">
                            <div class="col-12 bg-success">MAIN</div>
                            <div class="col-12 bg-info">BANNER</div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-8 bg-warning">EXTRA</div>
                            <div class="col bg-secondary">IMAGE</div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- desktop md+ -->
            <div class="col d-none d-md-block">
                <div class="row">
                    <div class="col-6 bg-danger">
                        MAIN
                    </div>
        
                    <div class="col offset-3">
                        <div class="row">
                            <div class="col-12 bg-success">IMAGE</div>
                            <div class="col bg-secondary">EXTRA</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col bg-warning d-sm-none d-md-block">
                BANNER
            </div>
        </div>



    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>