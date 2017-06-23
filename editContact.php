<?php
if (isset($_GET['edit_contact']) && $_GET['edit_contact'] == 'true') {
    $contact_id = $_GET['contact_id'];
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>Phonebook</title>
            <meta charset="UTF-8">
            <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" >
            <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" >
            <style>
                .vertical-space{
                    display: block;
                    width: 100%;
                    margin: 70px auto;
                }
                .nav-content{
                    display: none;
                    padding: 20px 0;
                }
            </style>
            <?php
            include_once 'database.php';
            ?>
        </head>
        <body>
            <div class="container">
                <div class="vertical-space"></div><!--.vertical-space-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-defult panel-primary">
                            <div class="panel-heading">Edit Contact</div>
                            <div class="panel-body">
                                <form action="addContact.php" method="post" role="form">
                                    <div class="form-group">
                                        <label for="fname">First name</label>
                                        <input id="fname" name="fname" class="form-control" placeholder="Enter contact's first name" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="lname">Last name</label>
                                        <input id="lname" name="lname" class="form-control" placeholder="Enter contact's last name" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="pnumber">Phone number</label>
                                        <input id="pnumber" name="pnumber" class="form-control" placeholder="Enter contact's phone" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="group">Group</label>
                                        <select class="form-control" id="group" name="group">
                                            <option disabled selected >Select GroupName...</option>
                                            <?php
                                            $query = "SELECT * FROM groups";
                                            $query_result = mysqli_query($link, $query);
                                            while ($result = mysqli_fetch_object($query_result)) {
                                                echo '<option value="' . $result->id . '">' . $result->group_name . '</option>';
                                            }
                                            ?>
                                        </select><!--#group-->
                                    </div>
                                    <input name="edit_contact" class="btn btn-default" type="submit" value="Edit Contact">
                                </form>
                            </div><!--.panel-body-->
                        </div><!--.panel-->
                    </div><!--.row-->
                </div><!--.row-->
            </div><!--.container-->
        </body>
    </html>
    <?php
} else {
    header("Location: index.php");
}