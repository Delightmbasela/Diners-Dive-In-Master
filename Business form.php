

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/stylesheet.css">
<title>business sign-up</title>
</head>
<body>

<h1>DINERS DIVE IN</h1>
<h2>Welcome to Diners Dive In .</h2>
<h3>Register Business</h3>

<form>

    Enter Name of Business:<br>
    <input type="text" name="NameofBusiness">
    <br>
<br>
    Choose Type of Business:<br>

    <form action="demo_form.asp">
        <select name="Business">
            <option value="Restauant">Restaurant</option>
            <option value="NightClub">Night Club</option>
            <option value="Bar">Bar</option>

        </select>
        <br>
<br>
        Enter Country:<br>
        <form action="demo_form.asp">
            <select name="Country">
                <option value="Zambia">Zambia</option>
                </select>
        <br>
<br>
        Enter City:<br>
            <form action="demo_form.asp">
                <select name="City">
                    <option value="Kitwe">Kitwe</option>
                    <option value="Lusaka">Lusaka</option>
                    <option value="Kasama">Kasama</option>
                    <option value="Ndola">Ndola</option>

                    </select>
        <br>
<br>
Enter Street Address:<br>
                <input type="text" name="EnterStreetAddress">
                <br>
                <br>
                Enter email:<br>
                <input type="text"name="Enteremail">
                <br>
<br>
                Enter PhoneNumber:<br>
                <input type="text" name="EnterPhoneNumber">
                <br>
<br>
                <input type="Submit" value="Register">

</form>
</body>
</html>