<?php
$dir = "uploads/";
if (!is_dir($dir)) mkdir($dir); // Folder bana agar nahi hai

// 🟢 Upload file
if (isset($_FILES['file'])) {
    $target = $dir . basename($_FILES['file']['name']);
    if (move_uploaded_file($_FILES['file']['tmp_name'], $target))
        $msg = "✅ File Uploaded Successfully!";
    else
        $msg = "❌ Upload Failed!";
}

// 🔵 Download file
if (isset($_GET['file'])) {
    $file = $dir . basename($_GET['file']);
    if (file_exists($file)) {
        header("Content-Disposition: attachment; filename=" . basename($file));
        readfile($file);
        exit;
    } else $msg = "❌ File not found!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload & Download</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #121212;
            color: #fff;
            text-align: center;
            padding-top: 50px;
        }
        form {
            background: #1f1f1f;
            padding: 20px;
            border-radius: 15px;
            display: inline-block;
            box-shadow: 0 0 15px #000;
        }
        input[type="file"] {
            margin: 10px;
        }
        button {
            background: #00bfff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
        }
        button:hover {
            background: #0099cc;
        }
        a {
            color: #00ffcc;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .msg {
            margin-top: 15px;
            font-weight: bold;
        }
        .list {
            margin-top: 30px;
            background: #1f1f1f;
            padding: 15px;
            border-radius: 10px;
            display: inline-block;
        }
    </style>
</head>
<body>

    <h1>📁 File Upload & Download</h1>

    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <button>Upload</button>
    </form>

    <?php if (isset($msg)) echo "<div class='msg'>$msg</div>"; ?>

    <div class="list">
        <h3>📄 Uploaded Files:</h3>
        <?php
        $files = array_diff(scandir($dir), ['.', '..']);
        if (count($files) > 0) {
            foreach ($files as $f)
                echo "<a href='?file=$f' download>$f</a><br>";
        } else {
            echo "No files uploaded yet.";
        }
        ?>
    </div>

</body>
</html>