<!DOCTYPE html>
<html lang="zh-Hant">
<head>
  <meta charset="UTF-8">
  <title>人浮於愛｜表單</title>
  <style>
    body {
      font-family: "微軟正黑體", sans-serif;
      background-color: #fafafa;
      color: #333;
      margin: 0;
      padding: 0;
      text-align: center;
    }

    nav {
      width: 100%;
      background-color: #555;
      padding: 10px 0;
    }

    nav a {
      color: white;
      text-decoration: none;
      margin: 0 15px;
      font-size: 16px;
    }

    nav a:hover {
      color: yellow;
    }

    h1 {
      margin: 20px 0;
      font-size: 28px;
    }

    form {
      width: 90%;
      max-width: 600px;
      margin: 20px auto;
      background-color: #fff;
      padding: 15px;
      text-align: left;
      border: 1px solid #ccc;
    }

    label {
      display: block;
      margin-top: 10px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    select,
    textarea {
      width: 100%;
      padding: 5px;
      margin-top: 5px;
      margin-bottom: 10px;
      font-size: 14px;
    }

    input[type="submit"] {
      background-color: #555;
      color: white;
      padding: 8px 15px;
      border: none;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #444;
    }

    .result {
      width: 90%;
      max-width: 600px;
      margin: 20px auto;
      padding: 10px;
      background-color: #eef;
      border: 1px solid #ccc;
    }

    .result p {
      margin: 5px 0;
    }
  </style>
</head>
<body>

  <nav>
    <a href="index.html">首頁</a>
    <a href="page1.html">人物介紹</a>
    <a href="page2.html">劇集介紹</a>
    <a href="about.html">關於</a>
    <a href="form.php">表單</a>
  </nav>

  <h1>意見回饋表單</h1>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET") {
      $name = htmlspecialchars($_REQUEST['name'] ?? '');
      $email = htmlspecialchars($_REQUEST['email'] ?? '');
      $topic = htmlspecialchars($_REQUEST['topic'] ?? '');
      $suggestion = htmlspecialchars($_REQUEST['suggestion'] ?? '');

      echo '<div class="result">';
      echo '<p><strong>姓名：</strong>' . $name . '</p>';
      echo '<p><strong>電子郵件：</strong>' . $email . '</p>';
      echo '<p><strong>想知道更多的內容：</strong>' . $topic . '</p>';
      echo '<p><strong>建議或留言：</strong><br>' . nl2br($suggestion) . '</p>';
      echo '</div>';
  }
  ?>

  <form method="post" action="">
    <label>姓名</label>
    <input type="text" name="name" placeholder="輸入姓名" required>

    <label>電子郵件</label>
    <input type="email" name="email" placeholder="輸入電子郵件" required>

    <label>想知道更多的內容</label>
    <select name="topic">
      <option>人物介紹</option>
      <option>劇集介紹</option>
      <option>幕後花絮</option>
      <option>其他</option>
    </select>

    <label>建議或留言</label>
    <textarea name="suggestion" rows="4" placeholder="輸入你的建議"></textarea>

    <input type="submit" value="送出">
  </form>

</body>
</html>
