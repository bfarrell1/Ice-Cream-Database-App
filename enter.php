<?php

include 'database.php';

// use of prepared statements - SQL

// erase any HTML tags and then escape all quotes
// this is used on each value that came from the HTML form
function sanitizeMySQL($conn, $var) {
    $var = strip_tags($var);
    $var = mysqli_real_escape_string($conn, $var);
    return $var;
}

// ensure that form values were received
if (isset($_POST['personality1']) && isset($_POST['personality2'])) {

    // sanitizeMySQL() is a custom function, written below
    $personality1 = sanitizeMySQL($conn, $_POST['personality1']);
    $personality2 = sanitizeMySQL($conn, $_POST['personality2']);
    $personality3 = sanitizeMySQL($conn, $_POST['personality3']);
    $personality4 = sanitizeMySQL($conn, $_POST['personality4']);
    $personalityType = sanitizeMySQL($conn, $_POST['personalityType']);
    $flavor = sanitizeMySQL($conn, $_POST['flavor']);
    $topping = sanitizeMySQL($conn, $_POST['topping']);
    $medium = sanitizeMySQL($conn, $_POST['medium']);

    // create a PHP timestamp

    // the prepared statement - note: 6 question marks represent
    // 6 variables we will send to database separately
    $query = "INSERT INTO icecreamflavors (personality1, personality2, personality3, personality4, personalityType, flavor, topping, medium)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    // prepare the statement in db
    if ( $stmt = mysqli_prepare($conn, $query) ) {

        // bind the values to replace the 6 question marks
        // note that 6 letters in 'sssids' MUST MATCH data types in table
        // Type specification chars:
        // i - integer, s - string , d - double (decimal), b - blob
        mysqli_stmt_bind_param($stmt, 'ssssssss',
        $personality1,
        $personality2,
        $personality3,
        $personality4,
        $personalityType,
        $flavor,
        $topping,
        $medium
        );

        // executes the prepared statement with the values already set, above
        mysqli_stmt_execute($stmt);
        // close the prepared statement
        mysqli_stmt_close($stmt);
        // close db connection
        mysqli_close($conn);
    } // end of prepare if-statement
    echo "New record for " . $flavor . " entered successfully.";
} else {
    echo "Failed to enter new record!";
} // end of isset if-statement

?>
