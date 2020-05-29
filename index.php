<?php require './includes/_dbconnect.php'; ?>
<?php $title = "The Wooden Spoon";?>
<?php require './includes/_header.php'; ?>


<div class="recipeGrid"> 
<?php 
  // Perform Database Query
  $query = "SELECT * FROM recipes";
  $result = mysqli_query($connection, $query);


  // Check there are no errors with SQL statement
  if (!$result) {
    die ("Database query failed.");
}
    while ($row = mysqli_fetch_assoc($result)) { 
?>

<div class="individualRecipe">
    <a href="result.php?id=<?php echo $row['id']; ?>" class="recipeHyperlink">
    <img src="./media/recipeImages/<?php echo $row['images']; ?>/main_pic.jpg" alt="<?php echo $row['title']; ?>" id="main"></a>
    <h2 class="gridTitle"><?php echo $row['title']; ?></h2>
    <p class="gridSide">with <?php echo $row['side']; ?></p>
</div>  

<?php
    }
	// Release Returned Data
	mysqli_free_result($result);
	// Close Database Connection
	mysqli_close($connection);
?>
</div>


<!-- Trigger/Open Modal -->
<button id="myBtn" onclick="helpMe();" title="Help">Help</button>

<!-- Modal -->
<div id="myModal" class="modal">

<!-- Modal content -->
  <div class="modalContent">
    <div class="modalHeader">
      <span class="close">&times;</span>
      <h2 class="modalTitle">Instructions</h2>
    </div>
    <div class="modalBody">
      <p>Select a recipe from the list above. You can also use the search bar to find what you are looking for, or find a recipe by using the filters above.</p>
    </div>
  </div>

</div>

<script src="javascript.js"></script>

<?php require './includes/_footer.php'; ?>