<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <title>Diners-Dive-In: Business Registration</title>
</head>
<body>

<h1>DINERS DIVE IN</h1>
<h2>Welcome to Diners Dive In</h2>
<h3>Register Business</h3>

<form method="post" action="business_database.php">

    Enter Name of Business:<br>
    <input type="text" name="BusinessName">
    <br>

    Choose Type of Business:<br>

    <select name="BusinessType">
        <option value="blank"></option>
        <option value="Restauant">Restaurant</option>
        <option value="NightClub">Night Club</option>
        <option value="Bar">Bar</option>

    </select>
    <br>

    Enter Country:<br>
    <select name="Country">
        <option value="blank"></option>
        <option value="Zambia">Zambia</option>
    </select>
    <br>

    Enter City:<br>
    <select name="City">
        <option value="blank"></option>
        <option value="Kitwe">Kitwe</option>
        <option value="Lusaka">Lusaka</option>
        <option value="Kasama">Kasama</option>
        <option value="Ndola">Ndola</option>

    </select>
    <br>

    Enter Street Address:<br>
    <input type="text" name="StreetAddress">
    <br>
    Enter email:<br>
    <input type="text" name="Email">
    <br>

    Enter PhoneNumber:<br>
    <input type="text" name="PhoneNumber">
    <br>

    <input type="Submit" value="Register">

</form>
</body>
</html>
