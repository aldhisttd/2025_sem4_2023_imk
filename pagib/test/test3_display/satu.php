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

            <div class="col-12 bg-danger d-none d-md-block">
                
                <div class="row">
                    <div class="col bg-danger">
                        A
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 bg-warning">C</div>
                    <div class="col">
                        <div class="row">
                            <div class="col-12 bg-success">B</div>
                            <div class="col-12 bg-primary">D</div>
                        </div>
                    </div>
                    <div class="col-3 bg-secondary">E</div>
                </div>
                <div class="row">
                    <div class="col bg-danger">F</div>
                </div>

            </div>

            <div class="col-12 bg-success d-none d-sm-block d-md-none">
                
                <div class="row">
                    <div class="col bg-danger">A</div>
                </div>
                <div class="row">
                    <div class="col bg-primary">B</div>
                </div>
                <div class="row">
                    <div class="col-3 bg-success">C</div>
                    <div class="col bg-warning">D</div>
                </div>
                <div class="row">
                    <div class="col-3 bg-info">E</div>
                    <div class="col bg-secondary">F</div>
                </div>

            </div>

            <div class="col-12 bg-warning d-block d-sm-none">
                <div class="row">
                    <div class="col-12 bg-danger">A</div>
                    <div class="col-12 bg-warning">B</div>
                    <div class="col-12 bg-primary">D</div>
                    <div class="col-12 bg-success">C</div>
                    <div class="col-12 bg-info">E</div>
                    <div class="col-12 bg-secondary">F</div>
                </div>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>