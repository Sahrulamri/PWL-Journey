<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
    <style>
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 600px;
        }

        .item {
            width: 40%;
            padding: 20px;
            border: 3px solid grey;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="center">
            <div class="item">
                <h2 class="text-center">Login Administrator</h2>
                <form action="<?= BASEURL; ?>/user/prosesLogin" method="post">
                    <div class="mb-3">
                        <label class="form-label">user</label>
                        <input type="text" class="form-control" name="tuser" placeholder="user">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="tpass" placeholder="password">
                    </div>
                    <div class="mb-3 text-center">
                        <input type="submit" class="btn btn-primary" value="login">
                    </div>
                </form>


            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous"></script>
</body>

</html>