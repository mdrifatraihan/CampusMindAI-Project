<?php
include 'db.php';

$advice_result = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $question = $_POST['question'];
    // ডামি বা এআই বেসড লজিক রেসপন্স
    $advice_result = "আপনার প্রশ্ন: '$question'। আপনার প্রোফাইল (CSE, 2nd Semester, CGPA 3.20) এবং ক্যারিয়ার গোল (AI/ML) বিবেচনা করে পরামর্শ হলো: প্রথমে পাইথন (Python) এবং বেসিক স্ট্যাটিসটিক্স দিয়ে শুরু করুন, এরপর মেশিন লার্নিং অ্যালগরিদম প্র্যাকটিস করুন।";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Academic & Career Advisor - CampusMind AI</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f7f6; padding: 20px; }
        .container { max-width: 600px; background: white; padding: 20px; margin: auto; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0,0,0,0.1); }
        textarea { width: 100%; height: 100px; padding: 10px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc; }
        button { background: #007bff; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer; }
        .result { margin-top: 20px; background: #e9ecef; padding: 15px; border-radius: 4px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>AI Academic & Career Advisor</h2>
        <form method="POST">
            <textarea name="question" placeholder="আপনার ক্যারিয়ার বা পড়াশোনা সম্পর্কিত প্রশ্ন এখানে লিখুন (যেমন: AI শিখতে হলে কী করব?)" required></textarea>
            <br>
            <button type="submit">পরামর্শ নিন</button>
        </form>

        <?php if (!empty($advice_result)): ?>
            <div class="result">
                <h3>CampusMind AI এর পরামর্শ:</h3>
                <p><?php echo $advice_result; ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>