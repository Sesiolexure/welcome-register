<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    
<div class="low-bg-image">
</div>
    <div class="container">
        
            <h1><b>Registration<b></h1>
        
    <Form action="registration.php" method="post">

        <div class="form-group">
            <input type="text" class="form-control" name="fullname" placeholder="Full Name:">
        </div>
        <div class="form-group">
            <input type="contact" class="form-control" name="contact" placeholder="Contact No:">
        </div>
        <div class="form-group">
            <input type="gender" class="form-control" name="gender" placeholder="Gender:">
        </div>
        <div class="form-group">
            <input type="age" class="form-control" name="age" placeholder="Age:">
        </div>
        <div class="form-group">
            <input type="address" class="form-control" name="address" placeholder="Home Address:">
        </div>
        <div class="combo-box">
        <select name="course"; class="combo-box"; name="course" placeholder="Choice Course">
        <option value="a">BSIT</option>
        <option value="b">BSHM</option>
        <option value="c">BSTM</option>
        <option value="d">BEED</option>
        </select>
        </div>

    </form>

        <div class="submit">
            <button type="button" onclick="location.href='dashboard.php'"> Sign-Up </button>
        </div>

    </div>

</body>
</html>