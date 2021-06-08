<?php

include './customers.php';




$customerObj = new Customers();

  // Insert Record in customer table
  if(isset($_POST['submit'])) {
    $customerObj->insertData($_POST);
  }

    ?>