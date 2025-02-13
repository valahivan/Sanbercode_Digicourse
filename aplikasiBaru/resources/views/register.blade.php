<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regsiter</title>
</head>
<body>
    <h1>Buat Akun Baru</h1>
    <form action="/welcome" method="post">
        @csrf
        <h2>Sign Up Form</h2>

        <label for="firstName">First Name:</label> <br><br>
        <input type="text" name="firstName" id="firstName" required> <br><br>
        <label for="lastName">Last Name:</label> <br><br>
        <input type="text" name="lastName" id="lastName"> <br><br>

        <label for="gender">Gender:</label> <br><br>
        <input type="radio" name="gender" id="gender" value="Male">Male <br>
        <input type="radio" name="gender" id="gender" value="Female">Female <br>
        <input type="radio" name="gender" id="gender" value="Other">Other <br><br>

        <label for="nationality">Nationality :</label><br><br>
        <select name="national" id="national">
            <option value="Indonesian">Indonesian</option>
            <option value="Singapore">Singapore</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Australian">Australian</option>
        </select><br><br>

        <label for="gender">Languange Spoken :</label> <br><br>
        <input type="checkbox" name="languange" id="languange" value="Indonesian">Indonesian <br>
        <input type="checkbox" name="languange" id="languange" value="English">English <br>
        <input type="checkbox" name="languange" id="languange" value="Other">Other <br><br>

        <label for="bio">Bio:</label><br><br>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br>
        <button type="submit">Sign UP</button>
    </form>
</body>
</html>