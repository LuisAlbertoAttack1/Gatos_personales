<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="./css/style.css">
    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <form action="./procesos/usuarios/agregar.php" method="post"
                    class="shadow rounded p-4 blur-effect position-absolute top-50 start-50 translate-middle">
                    <h1 class="text-center"  id="tipoLetra">NEW USER</h1>
                    <h5 id="tipoLetra">Username</h5>
                    <input type="text" name="usuario" class="form-control" placeholder="Username" aria-label="Username"
                        aria-describedby="basic-addon1">
                    <h5>password</h5>
                    <input type="text" name="contraseña" class="form-control" placeholder="Username"
                        aria-label="Username" aria-describedby="basic-addon1">
                    <h5 id="tipoLetra">Name</h5>
                    <input type="text" name="nombre" class="form-control" placeholder="Username" aria-label="Username"
                        aria-describedby="basic-addon1">
                    <h5 id="tipoLetra">Mother's Last Name</h5>
                    <input type="text" name="apellido_paterno" class="form-control" placeholder="Username"
                        aria-label="Username" aria-describedby="basic-addon1">
                    <h5 id="tipoLetra">Last Name</h5>
                    <input type="text" name="apellido_materno" class="form-control" placeholder="Username"
                        aria-label="Username" aria-describedby="basic-addon1">
                    <div class="d-grid gap-2 col-6 mx-auto mt-4">
                        <button class="btn btn-warning">New</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
</body>

</html>