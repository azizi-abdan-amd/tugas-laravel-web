<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="/welcome" method="POST" >
    @csrf
        <h1>Sign Up form</h1>
        <label>First Name</label>
        <br>
        <br>
        <input type="text" name="firstname"/>
        <br>
        <br>
        <label>Last Name</label>
        <br>
        <br>
        <input type="text" name="lastname"/>
        <br>
        <br>
        <label>Gender</label>
        <br>
        <br>
        <input type="radio" name="gender">Male
        <br>
        <input type="radio" name="gender">Female
        <br>
        <input type="radio" name="gender">Other
        <br>
        <br>
        <label>Nationaly:</label>
        <br>
        <br>
        <select>
            <option>Indonesia</option>
            <option>Malaysia</option>
        </select>
        <br>
        <br>
        <label>Gender</label>
        <br>
        <br>
        <input type="checkbox" name="gender">Bahasa indonesia 
        <br>
        <input type="checkbox" name="gender">English
        <br>
        <input type="checkbox" name="gender">Other
        <br>
        <br>
        <label>Bio:</label>
        <br>
        <br>
        <textarea  rows="10" cols="40"></textarea>
        <br>
        <br>
        <input type="submit" value="Sign Up"/>
    </form>
</body>
</html>