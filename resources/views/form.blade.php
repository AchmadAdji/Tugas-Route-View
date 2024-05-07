<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Online Form-Adji</title>
     <style type="text/css">
     body {
    font-family: sans-serif;
    background: linear-gradient(to bottom, #5bea75de 10%, #cfff5fd2);
}

.kotak_login {
    width: 350px;
    background: white;
    margin: 30px auto;
    padding: 25px 50px;
    border: none;
    border-radius: 10px;
}

h1{
    text-align: center;
}

h2 {
    text-align: center;
}

label {
    font-size: 11pt;
}

.form_input {
    box-sizing: border-box;
    width: 100%;
    padding: 10px;
    font-size: 11pt;
    margin-bottom: 15px;
    border-color: #24c64f;
    border-radius: 8px;
    color: #24c64f;
}

.tombol_login {
    background: #46de4b;
    color: white;
    font-size: 11pt;
    width: 100%;
    border: none;
    border-radius: 10px;
    padding: 10px 20px;
    background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
    box-shadow: 0px 1px 8px #24c64f;
    cursor: pointer;

}

.title {
    font-family: sans-serif;
}

.underline-title {
    background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
    height: 4px;
    margin: -1.1rem auto 0 auto;
    width: 150px;
}

select{
    width: 35%;
    height: 38px;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding-left: 5px;
    padding: 10px;
    font-size: 14px;
    font-family: 'Open Sans', sans-serif;
    color: #555;
    background-color: rgb(255, 255, 255);
    background-image: none;
    border: 1px solid #24c64f;
    cursor: pointer;
}

select>option{
    font-size: 18px;
    font-family: 'Open Sans', sans-serif;
    color: #555;
    background-color: rgb(247, 247, 247);
    background-image: none;
    font-size: 14px;
    height: 50px;
    padding: 15px;
    border: 1px solid rgb(41, 18, 18);
    cursor: pointer;
}
</style>
</head>
<body>
    
    <div class="kotak_login">
    <form action="{{url ('welcome') }}" method="get">
    <h1>Buat Account Baru</h1>
    <div id="title">
    <h2>Sign Up Form</h2>
    <div class="underline-title">
    </div><br>

    <label for="fname">First name :</label><br>
    <input type="text" id="fname" name="fname" placeholder="input your first name" maxlength="15" pattern="[A-Za-z ]+" class="form_input" required><br>
    <label for="lname">Last name :</label><br>
    <input type="text" id="lname" name="lname" placeholder="input your last name" maxLength="20" pattern="[A-Za-z ]+" class="form_input" required><br><br>

    <label for="">Gender</label><br><br>
    <input type="radio" name="gender" id="male" class="radio" value="male" required>
    <label for="male">Male</label><br>
    <input type="radio" name="gender" id="female" value="female" class="radio">
    <label for="female">Female</label><br><br>
        
    <label for="national">Nationality</label><br>
    <select name="national" id="national">
        <option value="indonesia">Indonesia</option>
        <option value="english">English</option>
        <option value="japan">Japanese</option>
    </select><p>

    <form method="get">
    <label for="checkbox">Language Spoken</label><br><p></p>
    <input type="checkbox" id="indonesia" name="bahasa[]" value="indonesia" required>
    <label for="indonesia">Bahasa Indonesia</label><br>
    <input type="checkbox" id="english" name="bahasa[]" value="english">
    <label for="english">English</label><br>
    <input type="checkbox" id="japanese" name="bahasa[]" value="japanese">
    <label for="japanese">Japanese</label><br><br>
</form>

        <label for="bio">Bio</label><br><br>
        <textarea name="Bio" rows="10" cols="30" id="bio" maxlength="100" placeholder="Input your Bio in Here"></textarea>
        <br><br>
        <input type="submit" class="tombol_login" value="Sign Up">

    </form>
</div>
</body>
</html>