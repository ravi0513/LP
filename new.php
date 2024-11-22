<?php
// Create a file named hello_world.php
$file = 'hello_world.php';

// Content to write into the file
$content = '<?php echo "Hello, World!"; ?>';

// Write the content to the file
file_put_contents($file, $content);

echo "File 'hello_world.php' created successfully.";
?>