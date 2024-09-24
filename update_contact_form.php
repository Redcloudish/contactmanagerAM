<?php
    require_once('database.php');
    $contact_id = filter_input(INPUT_POST, 'contact_id' FILTER_VALIDATE_INT);
    $query = 'SELECT * From contacts
        Where contactID = :contact_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':contact_id',$contact_id);
    $statement->execute();
    $contact = $statement->fetch();
    $statement->closeCursor();

?>

<!DOCTYPE html>
<html>
   <head>
       <title>Contact Manager - Update Contact </title>
       <link rel="stylesheet" type="text/css" href="css/main.css" />   
   </head>
   <body>
       <?php include("header.php"); ?>
       <main>
        <h2>Update Contact</h2>

        <form action="update_contact.php" method="post" id="update_contact_form">
            <div id="data">

            <input type="hidden" name="contact_id"
            value="<?php echo $contact['contactID']; ?>" />

            <label>First Name:</label>
            <input type="text" value="first_name" 
            value="<?php echo $contact['firstName']; ?>" /><br />

            <label>Last Name:</label>
            <input type="text" value="Last_name" 
            value="<?php echo $contact['lastName']; ?>" /><br />

            <label>Email <Address></Address>:</label>
            <input type="text" value="email_address" 
            value="<?php echo $contact['emailAddress']; ?>" /><br />

            <label>Phone Number:</label>
            <input type="text" value="phone_number" 
            value="<?php echo $contact['phone']; ?>"  /><br />         

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