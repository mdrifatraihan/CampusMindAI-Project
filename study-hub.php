<?php
include 'db.php';
$msg = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['study_file'])) {
    $target_dir = "uploads/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    $file_name = time() . "_" . basename($_FILES["study_file"]["name"]);
    $target_file = $target_dir . $file_name;

    if (move_uploaded_file($_FILES["study_file"]["tmp_name"], $target_file)) {
        $msg = "ফাইল সফলভাবে আপলোড হয়েছে এবং AI হাবের সাথে যুক্ত হয়েছে!";
    } else {
        $msg = "ফাইল আপলোড করতে সমস্যা হয়েছে।";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Study Material Hub - CampusMind AI</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f7f6; padding: 20px; }
        .container { max-width: 600px; background: white; padding: 20px; margin: auto; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0,0,0,0.1); }
        input[type="file"] { margin-bottom: 10px; }
        button { background: #ffc107; color: black; font-weight: bold; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer; }
        .msg { margin-top: 15px; color: green; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Centralized Study Material Hub</h2>
        <form method="POST" enctype="multipart/form-data">
            <p>আপনার লেকচার স্লাইড, পিডিএফ বা নোটস আপলোড করুন:</p>
            <input type="file" name="study_file" required><br>
            <button type="submit">আপলোড ও এআই সামারি জেনারেট করুন</button>
        </form>

        <?php if (!empty($msg)): ?>
            <p class="msg"><?php echo $msg; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>