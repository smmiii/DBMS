<?php include('partials/menu.php'); ?>

<div class="main-content">
       <div class="wrapper">
              <h1>Add Admin</h1>
              <br><br>
              <form action="" method="POST">

              <Table class="tbl-30">
                     <tr>
                     <td>Full Name: </td>
                     <td>
                            <input type="text" name="full_name" placeholder="Enter your name">
                     </td>
              </tr>

              <tr>
                     <td>Username:</td>
                     <td>
                            <input type="text" name="username" placeholder="Your username" >
                     </td>
              </tr>

              <tr>
                     <td>Password:</td>
                     <td>
                            <input type="password" name="password" placeholder="Your password">
                     </td>
              </tr>

              <tr>
                     <td colspan="2">
                            <input type="submit" name="submit" value="Add Admin" class="btn-secondary">

                     </td>
              </tr>
       </Table>
              </form>
       </div>
</div>



<?php include('partials/footer.php'); ?>

<?php
//process the value from Form and Save it in Database
//check whether the button is clicked or not 

if (isset($_POST['submit']))
{
       //Buuton clicked 
       //echo "Button Clicked";

       //1.Get the data from form
      $full_name =$_POST['full_name'];
      $username = $_POST['username'];
      $password = md5($_POST['password']) ;//password encryption with md5

      //2.SQL query to save the data into database
      $sql ="INSERT INTO tbl_admin SET
       full_name='$full_name',
       username='$username',
       password='$password'
      ";
       
      $res = mysqli_query($conn, $sql) or die(mysqli_query());
    //4. Check whether the (Query is excuted ) data is inserted or not and display appropriate message
       if($res==TRUE){
              echo"Data Inserted";
       }
       else
       {
              echo "Data is not inserted";
       }
    
}

?>