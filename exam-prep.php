<?php
$questions = [];
$topic_name = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $topic_name = $_POST['topic'];
    // প্রি-ডিফাইনড বা জেনারেটেড কোশ্চেন স্যাম্পল
    $questions = [
        "Conceptual: What is " . $topic_name . " and why is it used in programming?",
        "Coding: Write a simple program implementing " . $topic_name . ".",
        "Output-based: Predict the output of a standard code snippet involving " . $topic_name . ".",
        "Problem-solving: Solve a tricky scenario using " . $topic_name . "."
    ];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exam Preparation - CampusMind AI</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f7f6; padding: 20px; }
        .container { max-width: 600px; background: white; padding: 20px; margin: auto; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0,0,0,0.1); }
        input[type="text"] { width: 80%; padding: 10px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc; }
        button { background: #28a745; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer; }
        ul { line-height: 1.6; }
    </style>
</head>
<body>
    <div class="container">
        <h2>AI Exam Preparation Assistant</h2>
        <form method="POST">
            <input type="text" name="topic" placeholder="টপিক বা লেকচারের নাম লিখুন (যেমন: Pointer)" required>
            <button type="submit">প্রশ্ন তৈরি করুন</button>
        </form>

        <?php if (!empty($questions)): ?>
            <div style="margin-top: 20px; background: #e2f0d9; padding: 15px; border-radius: 4px;">
                <h3><?php echo htmlspecialchars($topic_name); ?> - এর জন্য প্র্যাকটিস প্রশ্নসমূহ:</h3>
                <ul>
                    <?php foreach ($questions as $q): ?>
                        <li><?php echo $q; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>