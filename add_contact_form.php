<!DOCTYPE html>
<html>
   <head>
       <title>Contact Manager - Add Contact </title>
       <link rel="stylesheet" type="text/css" href="css/main.css" />   
   </head>
   <body>
       <?php include("header.php"); ?>
       <main>
        <h2>Add Contact</h2>

        <form action="add_contact.php" method="post" id="add_conatact_form">
            <div id="data">
            <label>First Name:</label>
            <input type="text" value="first_name" /><br />

            <label>Last Name:</label>
            <input type="text" value="Last_name" /><br />

            <label>Email <Address></Address>:</label>
            <input type="text" value="email_address" /><br />

            <label>Phone Number:</label>
            <input type="text" value="phone_number" /><br />


        </div>
        
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Save Contact" /><br />

        </div>

        </form>
        
        <p><a href="add_contact_form.php">View Contact List</a></p>
       </main>
       <?php include("footer.php"); ?>
   </body>
</html>