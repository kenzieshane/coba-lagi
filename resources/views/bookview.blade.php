<?php

// Get book ID from URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Fetch specific book
$stmt = $pdo->prepare("SELECT * FROM shop_db WHERE id = ?");
$stmt->execute([$id]);
$book = $stmt->fetch(PDO::FETCH_ASSOC);

// If book not found, show 404
if (!$book) {
    header("HTTP/1.0 404 Not Found");
    echo "<h1>Book not found</h1>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($book['name']) ?></title>
    <style>
        .book-detail {
            border: 3px solid #000000;
            padding: 30px;
            max-width: 800px;
            margin: 40px auto;
            border-radius: 10px;
        }
        .book-detail img {
            max-width: 100%;
            height: auto;
            max-height: 500px;
            display: block;
            margin: 0 auto;
        }
        .book-title {
            font-size: 2.5em;
            margin: 20px 0;
        }
        .book-price {
            font-size: 1.8em;
            color: #e74c3c;
            font-weight: bold;
        }
        .book-desc {
            font-size: 1.2em;
            line-height: 1.6;
            color: #34495e;
        }
        .back-link {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="book-detail">
        <img src="images/<?= htmlspecialchars($book['image']) ?>" 
             alt="<?= htmlspecialchars($book['name']) ?>">
        <h1 class="book-title"><?= htmlspecialchars($book['name']) ?></h1>
        <p class="book-price"><?= htmlspecialchars($book['price']) ?></p>
        <p class="book-desc"><?= nl2br(htmlspecialchars($book['description'])) ?></p>
        <a href="books.php" class="back-link">← Back to all books</a>
    </div>
</body>
</html>
