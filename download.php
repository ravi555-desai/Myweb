<?php 
if (isset($_POST['file'])) { // Agar form se 'file' aayi hai 
$file = 'uploads/' . basename($_POST['file']); // Safe tarike se file path 
if (file_exists($file)) { // File exist karti hai kya? 
header('Content-Type: application/octet-stream'); // File type 
header('Content-Disposition: attachment; filename="' . basename($file) . 
'"'); // Download name 
readfile($file); // File bhej do 
exit; 
} else { 
echo " File not found!"; 
} 
} else { 
echo "  No file selected."; 
} 
?>