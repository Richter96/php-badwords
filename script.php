<?php

$name = $_POST['nome'];

$paragraph = $_POST["paragraph"];

$badword = $_POST["badword"];

// echo $name;
// echo $badword;
// echo $paragraph;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>SubmitData</title>
</head>
<body>
    <header class="container-ld p-4 mb-4">
        <div class="d-flex justify-content-between">
            <h1>Words PHP</h1>
            <h2>Ciao <?php echo $name ?></h2>
        </div>
    </header>

    <!-- / header -->
    <main>
        <div class="container-md">
            <div class="row row-col-2">
                <div class="col d-flex justify-content-center">
                    <!-- card original paragraph -->
                    <div class="card" style="width:25rem;" >
                        <div class="card-body">
                            <h5 class="card-title">Original Paragraph</h5>
                            <span>Lunghezza del paragrafo: <?php echo strlen($paragraph); ?></span>
                            <p class="card-text border"><?php echo $paragraph; ?></p>
                        </div>
                    </div>
                </div>

                <div class="col d-flex justify-content-center">
                    <!-- card censored paragraph -->
                    <div class="card" style="width:25rem;" >
                        <div class="card-body">
                            <h5 class="card-title">Censored Paragraph</h5>
                            <span>Lunghezza del paragrafo: <?php echo strlen($paragraph); ?></span>
                            <p class="card-text border"><?php echo str_replace($badword, "***", $paragraph); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </main>
    
</body>
</html>

