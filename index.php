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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="./js/jquery-3.2.1.min.js"></script>
<script src="./js/jquery.blockUI.js"></script>

    <title>Hello, world!</title>
</head>

<body style="background-color: #f5f3f4;">
    <div class="container position-absolute top-50 start-50 translate-middle">
        <form action="./procesos/usuarios/login.php" method="post">
            <div class="row">
                <div class="col">
                    <div class="card border-0">
                        <div class="row border-0">
                            <div class="col text-center mt-4">
                                <img src="./img/principal.gif" class="img-fluid rounded-start"
                                    alt="No dios">
                            </div>
                            <div class="col-6">
                                <div class="card-body">
                                    <div class="text-center mb-3 mt-3">
                                        <i class="fas fa-user fa-4x"></i>
                                    </div>
                                    <h2 class="card-title mb-4n text-center" id="tipoLetra">Start Sesion</h2>
                                    <h3 id="tipoLetra"><i class="fa-solid fa-user"></i> Username</h3>
                                    <input type="text" class="form-control text-center" name="username"
                                        placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                    <h3 id="tipoLetra" class="mt-2"><i class="fa-solid fa-key"></i> Password</h3>
                                    <input type="password" class="form-control text-center mb-4" name="password"
                                        placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button class="btn border-0" id="Colour">Get Into</button>
                                        <a href="registro.php" class="btn border-0" id="Colour2">new user</a>
                                    </div>
                                    <div class="text-center">
                                        <i class="fa-brands fa-facebook fa-2x mt-2"></i>
                                        <i class="fa-brands fa-whatsapp-square fa-2x mt-2"></i>
                                        <i class="fa-brands fa-twitter-square fa-2x mt-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript">
    $(document).ready(function() {
        mascaraObloqueo();
    });

    function mascaraObloqueo() {
        $.blockUI({
            message: ' <img src="./img/Mascara-removebg-preview.png" width="300" height="300">',
            css: {
                border: 'none',
                // padding: '15px', 
                backgroundColor: 'rgba(138,221,45,0)',
                '-webkit-border-radius': '10px',
                '-moz-border-radius': '10px',
                // opacity: .5, 
                color: '#FFFFFF '
            }
        });

        setTimeout($.unblockUI, 800);
    }
    </script>
</body>

</html>