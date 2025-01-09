<?php
// registerbusiness_pda.php

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the selected flavors from the form
    $selectedFlavors = $_POST['flavors'] ?? [];
    
    // Display the selected flavors
    echo "<h1>Selected Ice Cream Flavors</h1>";
    if (!empty($selectedFlavors)) {
        echo "<ul>";
        foreach ($selectedFlavors as $flavor) {
            echo "<li>" . htmlspecialchars($flavor) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No flavors selected.</p>";
    }

    // Exit to prevent re-showing the form
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ice Cream Flavor Selector</title>
</head>
<body>
    <h1>Register Your Favorite Ice Cream Flavors</h1>
    <form action="registerbusiness_pda.php" method="POST">
        <label>
            <input type="checkbox" name="flavors[]" value="Vanilla"> Vanilla
        </label><br>
        <label>
            <input type="checkbox" name="flavors[]" value="Chocolate"> Chocolate
        </label><br>
        <label>
            <input type="checkbox" name="flavors[]" value="Strawberry"> Strawberry
        </label><br>
        <label>
            <input type="checkbox" name="flavors[]" value="Mint Chocolate Chip"> Mint Chocolate Chip
        </label><br>
        <label>
            <input type="checkbox" name="flavors[]" value="Cookie Dough"> Cookie Dough
        </label><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>