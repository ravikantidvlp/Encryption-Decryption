<?php
 include ("connection.php" ); 
if (isset($_POST['search'])) {
    //Search box value assigning to $Name variable.
       $Name = $_POST['search'];
    //Search query.
       $Query = "SELECT firstname FROM employees WHERE firstname_hash LIKE '%".hash('sha512', strtolower($Name))."%' LIMIT 5";
    //Query execution
       $ExecQuery = MySQLi_query($conn, $Query);
    //Creating unordered list to display result.
       echo '
    <ul>
       ';
       //Fetching result from database.
       while ($Result = MySQLi_fetch_array($ExecQuery)) {
           ?>
       <!-- Creating unordered list items.
            Calling javascript function named as "fill" found in "script.js" file.
            By passing fetched result as parameter. -->
       <li onclick='fill("<?php echo decrypt($Result['firstname']) ?>")'>
       <a>
       <!-- Assigning searched result in "Search box" in "search.php" file. -->
           <?php echo decrypt($Result['firstname']); ?>
       </li></a>
       <!-- Below php code is just for closing parenthesis. Don't be confused. -->
       <?php
    }}
    ?>
    </ul>
  