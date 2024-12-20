<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('../includes/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resources</title>
    <link rel="stylesheet" href="../assets/css/blog.css"> <!-- Link to CSS file -->
</head>
<body>

<header>
    <div class="resources-header">
        <h1>Resources</h1>
        <p>Access valuable resources to expand your knowledge in AI and technology. Whether you're a beginner or an expert, these resources will help you along your journey.</p>
    </div>
</header>

<main class="resources-content">
    <?php
    $resources_folder = '../data/resources/';  
    $resources_files = array_diff(scandir($resources_folder), array('.', '..'));  // Get all files except '.' and '..'

    if (!empty($resources_files)) {
        foreach ($resources_files as $resource_file) {
            // Only include HTML files
            if (pathinfo($resource_file, PATHINFO_EXTENSION) == 'html') {
                echo '<div class="resource-entry">';
                include($resources_folder . $resource_file);  // Include the resource HTML file
                echo '</div>';
            }
        }
    } else {
        echo '<p>No resources available at the moment. Check back later!</p>';
    }
    ?>
</main>

<?php include('../includes/footer.php'); ?>

</body>
</html>
