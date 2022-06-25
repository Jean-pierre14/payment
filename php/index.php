<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP code</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">

        <div class="box-content">
            <div class="wrapper">
                <h2>Last registration event</h2>
                
                <p id="Last_id" class="list">
                    <span>Username</span>
                    <span>Username</span>
                    <span>
                        <button type="button" id="id" class="btn edit">Edit</button>
                        <button type="button" id="id" class="btn delete">Delete</button>
                    </span>
                </p>

            </div>
        </div>

        <div class="form">
            <h3>PDO code PHP</h3>
            <form action="" method="post" autocomplete="off">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Username">
                <label for="fullname">Fullname</label>
                <input type="text" name="fullname" id="fullname" placeholder="Fullname">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email@grace.cd">
                <button class="button" type="submit">Register</button>
            </form>
        </div>
    </div>
</body>

</html>