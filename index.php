<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MySQL">
    <meta name="keywords" content="MySQL, PHP, Database">
    <meta name="author" content="ArGuV">

    <title>MySQL Database</title>
    <!--------------------------- STYLES -------------------------------------------------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<fieldset>
    <legend>SELECT FORM</legend>
    <form action='index.php' method='post'>

        <label for='fname'>Student's first name</label><br />
        <input id='fname' type='text' name='fname' size='11' maxlength='20' placeholder='St.first name'  /><br />

        <label for='lname'>Student's last name</label><br />
        <input id='lname' type='text' name='lname' size='11' maxlength='20' placeholder='St.last name'  /><br />

        <label for='class'>Class</label><br />
        <select id='class' name='class' >
            <option></option>
            <option value='8A'>8A</option>
            <option value='8B'>8B</option>
            <option value='8C'>8C</option>
            <option value='9A'>9A</option>
            <option value='9B'>9B</option>
            <option value='9C'>9C</option>
            <option value='10A'>10A</option>
        </select><br />

        <label for='subject'>Subject</label><br />
        <select id='subject' name='subject' >
            <option></option>
            <option value='mathematics'>mathematics</option>
            <option value='physics'>physics</option>
            <option value='chemistry'>chemistry</option>
            <option value='geography'>geography</option>
            <option value='history'>history</option>
        </select><br /><br />

        <input type='submit' name='Submit' value='Submit' />
    </form>
</fieldset>

<hr>

<?php
require_once('models/db_direct.php')
?>
<!------------------------ SCRIPTES -------------------------------------------------------->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="js/main.js" type="text/javascript"></script>

</body>
</html>