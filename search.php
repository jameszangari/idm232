<?php require './includes/_dbconnect.php'; ?>
<?php $title = "Search Result";?>
<?php require './includes/_header.php'; ?>
 
<div class="recipeGrid">

<?php
    if (isset($_POST['search-submit'])) {
      $search = $_POST['query'];

      $search = strtolower($search);
      // changes input to lowercase
      $search = htmlspecialchars($search); 
      // changes characters
      $search = mysqli_real_escape_string($connection, $search);
      // no SQL injection

      $query = "SELECT * FROM `recipes`
      WHERE `title` LIKE '%$search%' 
      OR `side` LIKE '%$search%'
      OR `ingredients` LIKE '%$search%'
      ORDER BY `id` ASC";

      $result = mysqli_query($connection, $query);
      $queryResult = mysqli_num_rows($result);
      // If there are any Results
      if ($queryResult > 0) {
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
    }
    else {
        echo "<div class=\"errorResult\">";
        echo "<img class=\"resultErrorImage\" src=\"./media/assets/kitchenDisaster2.gif\" alt=\"Error Image\">";
        echo "<h1 class=\"resultTitle\">Sorry!</h1>";
        echo "<h3 class=\"resultSide\">We can't find that page.</h3>";
        echo "<br>";
        echo "<a href=\"index.php\" class=\"errorLink\">";
        echo "<h4 class=\"errorButton\">Home</h4>";
        echo "</a>";
        echo "</div>";
    }
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