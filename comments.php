<?php
require_once("Header.php");

?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Comments</h1>
  </div>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
        <th scope="col">Id</th>
                    <th scope="col">User_name</th>
                    <th scope="col">User_email</th>
                    <th scope="col">Comments</th>
        </tr>
      </thead>
      <tbody>
      <?php
      require_once('../conaction.php');
      $sql = "select * from contct order by Id  desc";
      $result = mysqli_query($conn, $sql);
      if (!$result) {
        die("Selected Erorr" . mysqli_error($conn));
      }
      while($row = mysqli_fetch_assoc($result)){
        $id = $row['Id'];
        $name = $row['User_name'];
        $email = $row['User_email'];
        $text = $row['Textcoment'];
      echo "
        <tr>
          <td>$id</td>
          <td>$name</td>
          <td>$email</td>
          <td>$text</td>
        </tr>
      ";
      }
      mysqli_close($conn);
      ?>
      </tbody>
    </table>
  </div>
</main>
<!-- end main  -->
