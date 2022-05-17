<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Nhập Navigation</title>
</head>
<body>
    <?php require_once 'login.php'?>
    <?php 
        if(isset($_POST['add'])){
            $name = $_POST['name'];
            $parent = $_POST['parent'];

            if($conn->query("INSERT INTO Navigation (Name,Parent) VALUE(N'$name',N'$parent')")){
                echo "<script>alert('Them thanh cong')</script>";
            }
            else{
                echo "<script>alert('Them that bai')</script>";
            }
        }
        $conn->close();
    ?>

    <div class="container">
    <form method="POST" action="">
        <div class="mb-3">
            <label for="name">Name</label>
            <input name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="parent">Parent</label>
            <input name="parent" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary" name="add">Submit</button>
    </form>
    </div>
</body>
</html>