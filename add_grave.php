<?php 

	include("head.php");
  include("nav.php");
  include("database.php");

  if (isset($_POST['submit'])){
  
    $firstName = $_POST["firstName"];
    $middleName = $_POST["middleName"];
    $lastName = $_POST["lastName"];
    $birthDate = $_POST["birthDate"];
    $deathDate = $_POST["deathDate"];
    $PhotoLink = $_POST["PhotoLink"];
    
    // Check upload key
    if ($_POST['upLoadKey'] === 'Bruiz@rio') {
      echo "Grave Created Successfully";
    } else {
      die();
    }
    // validate grave input data
    if ($firstName == null || $middleName == null || $lastName == null || $birthDate == null || $deathDate == null || $PhotoLink == null) {
        $error = "Please make sure all fields are included.";
    } else {
        require_once('database.php');
    }
    
    //add grave data to database
    $addNewGraveQuery = "INSERT INTO graves(firstname, middleName, lastName, birthDate, deathDate, PhotoLink) VALUES ('{$firstName}', '{$middleName}', '{$lastName}', '{$birthDate}', '{$deathDate}', '{$PhotoLink}')"; 
    $newGraveResult = mysqli_query($connection, $addNewGraveQuery);

      // escape variables for security
      $firstName = mysqli_real_escape_string($connection, $_POST['firstName']);
      $middleName = mysqli_real_escape_string($connection, $_POST['middleName']);
      $lastName = mysqli_real_escape_string($connection, $_POST['lastName']);
      $birthDate = mysqli_real_escape_string($connection, $_POST['birthDate']);
      $deathDate = mysqli_real_escape_string($connection, $_POST['deathDate']);
      $PhotoLink = mysqli_real_escape_string($connection, $_POST['PhotoLink']);

      mysqli_close($connection);
}

?>

  <h2>Add New Grave</h2>

  <div class="add-graves">
    <form action="" method="post">
      <input type="text" placeholder="First Name" name="firstName">
      <input type="text" placeholder="Middle Name" name="middleName">
      <input type="text" placeholder="Last Name" name="lastName">
      <h6>Birth Date</h6>
      <input type="date" placeholder="Birth Date" name="birthDate">
      <h6>Death Date</h6>
      <input type="date" placeholder="Death Date" name="deathDate">
      <p>Gravestone Image File:</p>
      <input type="text" placeholder="Link to Image" name="PhotoLink">
      <input type="text" placeholder="Upload Key" name="upLoadKey">
      <input type="submit" value="Add Grave" name="submit">
    </form>
   </div> 

<?php 

include("footer.php");

?>