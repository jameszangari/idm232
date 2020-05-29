<?php require './includes/_dbconnect.php'; ?>
<?php $title = "Recipe Result";?>
<?php require './includes/_header.php'; ?>

<div class="recipeGridResult">

<?php 
$id = isset($_GET["id"]) ? mysqli_real_escape_string($connection, $_GET["id"]) : null;

  if (!$id) {
    redirect_to("index.php");
  }
  else {
    $query = 'SELECT * ';
    $query .= 'FROM recipes ';
    $query .= "WHERE id = '$id' ";
    $query .= 'LIMIT 1';
  }
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) { 
    // Step 4: Release Returned Data
	  mysqli_free_result($result);
?>
    <img class="resultImage" src="./media/recipeImages/<?php echo $row['images']; ?>/main_pic.jpg" alt="<?php echo $row['title']; ?>">
    <br>
    <h1 class="resultTitle"><?php echo $row['title']; ?></h1>
    <h1 class="resultSide">with <?php echo $row['side']; ?></h1>
    <p class="resultDescription"><?php echo $row['description']; ?></p>
    <br>
  <div class="miscInfo">
      <h3>Nutrition</h3><p class="resultNutrition"><?php echo $row['nutrition']; ?> calories</p>
  <br>
      <h3>Cook Time</h3><p class="resultTime"><?php echo $row['time']; ?> minutes</p>
  <br>
      <h3>Serving Size</h3><p class="resultServing"><?php echo $row['servings']; ?></p>
</div>

    <h3>Ingredients</h3>
        <div class="resultIngredients">
          <ol>
          <?php
              $ingredients = $row['ingredients'];
              $ingredients_array = explode("\\", $ingredients);
              for ($i = 0; $i < substr_count($ingredients, '\\'); $i++) {
          ?>
      <li><?php echo $ingredients_array[$i]; ?></li>
          <?php } ?>
          </ol>
        </div>
    <br>
    <img class="resultImageIngredients" src="./media/recipeImages/<?php echo $row['images']; ?>/ingredients.png" alt="Ingredients">
    <h3 class="resultSteps">Steps</h3>
    <div class="stepsImagesGrid">
    <?php
              $steps = $row['steps'];
              $steps_array = explode("\\", $steps);
    ?>
    <h2 class="stepNumbers"><?php echo $steps_array[0]; ?></h2>
    <img src="./media/recipeImages/<?php echo $row['images']; ?>/step_01.jpg" alt="Step 1" class="stepsImages">
    <br>
    <p><?php echo $steps_array[1]; ?></p>
    <br>

    <h2 class="stepNumbers"><?php echo $steps_array[2]; ?></h2>
    <img src="./media/recipeImages/<?php echo $row['images']; ?>/step_02.jpg" alt="Step 2" class="stepsImages">
    <br>
    <p><?php echo $steps_array[3]; ?></p>
    <br>
    
    <h2 class="stepNumbers"><?php echo $steps_array[4]; ?></h2>
    <img src="./media/recipeImages/<?php echo $row['images']; ?>/step_03.jpg" alt="Step 3" class="stepsImages">
    <br>
    <p><?php echo $steps_array[5]; ?></p>
    <br>
    
    <h2 class="stepNumbers"><?php echo $steps_array[6]; ?></h2>
    <img src="./media/recipeImages/<?php echo $row['images']; ?>/step_04.jpg" alt="Step 4" class="stepsImages">
    <br>
    <p><?php echo $steps_array[7]; ?></p>
    <br>
    
    <h2 class="stepNumbers"><?php echo $steps_array[8]; ?></h2>
    <img src="./media/recipeImages/<?php echo $row['images']; ?>/step_05.jpg" alt="Step 5" class="stepsImages">
    <br>
    <p><?php echo $steps_array[9]; ?></p>
    <br>
    
    <h2 class="stepNumbers"><?php echo $steps_array[10]; ?></h2>
    <img src="./media/recipeImages/<?php echo $row['images']; ?>/step_06.jpg" alt="Step 6" class="stepsImages" id="step6" onerror="this.style.display='none';">
    <br>
    <p><?php echo $steps_array[11]; ?></p>
    <br>
    </div>

<?php
    }
	// Step 5: Close Database Connection
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
      <p>Use the search bar to find what you are looking for, or find a recipe by using the filters above.</p>
    </div>
  </div>

</div>

<script src="javascript.js"></script>

<?php require './includes/_footer.php'; ?>