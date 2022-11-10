<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once 'components/boot.php'?>
        <title>PHP CRUD  |  Add New Place</title>
        <style>
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }       
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Add New Place</legend>
            <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <th>Name</th>
                        <td><input class='form-control' type="text" name="name"  placeholder="Secret Place" /></td>
                    </tr>    
                    <tr>
                        <th>Country</th>
                        <td><input class='form-control' type="text" name="country" placeholder="Country" step="any" /></td>
                    </tr>
                    <th>Visited</th>
                        <td><input class='form-control' type="text" name="visited" placeholder="YYYY/MM/DD" step="any" /></td>
                    </tr>
                    <th>Story</th>
                        <td><input class='form-control' type="text" name="story" placeholder="Story..." step="any" /></td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="file" name="picture" /></td>
                    </tr>
                    <tr>
                        <td><button class='btn btn-success' type="submit">Insert Picture</button></td>
                        <td><a href="index.php"><button class='btn btn-warning' type="button">Back Home</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>