<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <header>
        <h1>Words PHP</h1>
    </header>
    <!-- / header -->
    <main>
        <div class="container-md">
            <div class="card-body">
                <form action="script.php" method="POST">
                    <label class="d-block" for="name">Nome</label>
                    <input type="text" name="nome">

                    <label class="d-block" for="badword">SCRIVI UNA PAROLA DA CENSURARE</label>
                    <input type="text" name="badword">
                    paragra

                    <label class="d-block" for="paragraph">SCRIVI UN TESTO</label>
                    <textarea name="paragraph" cols="30" rows="5">lorem ipsum, dolor sit amet consectetur adipisicing. lorem ipsum dolor sit amet consectetur adipisicing elit. lorem ipsum dolor sit amet consectetur adipisicing elit. Neque corporis architecto illum sint debitis officia non! Necessitatibus illo, hic non, rem impedit repellendus fugiat accusamus fuga ad cum aperiam! Magnam.
                    </textarea>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </main>
</body>

</html>