<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

$userId = $_SESSION['user_id'];

// Create item
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['create'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];

    $stmt = $conn->prepare("INSERT INTO items (name, description) VALUES (:name, :description)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->execute();
}

// Read items
$stmt = $conn->prepare("SELECT * FROM items ORDER BY created_at DESC");
$stmt->execute();
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Update item
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];

    $stmt = $conn->prepare("UPDATE items SET name = :name, description = :description WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->execute();
}

// Delete item
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])) {
    $id = $_POST['id'];

    $stmt = $conn->prepare("DELETE FROM items WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome!</h2>
    <p><a href="logout.php">Logout</a></p>

    <h3>Create Item</h3>
    <form method="POST" action="">
        <input type="text" name="name" placeholder="Item Name" required>
        <textarea name="description" placeholder="Description"></textarea>
        <button type="submit" name="create">Create</button>
    </form>

    <h3>Items</h3>
    <ul>
        <?php foreach ($items as $item): ?>
        <li>
            <strong><?php echo htmlspecialchars($item['name']); ?></strong><br>
            <?php echo htmlspecialchars($item['description']); ?><br>
            <form method="POST" action="" style="display:inline;">
                <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                <input type="text" name="name" value="<?php echo htmlspecialchars($item['name']); ?>" required>
                <textarea name="description"><?php echo htmlspecialchars($item['description']); ?></textarea>
                <button type="submit" name="update">Update</button>
            </form>
            <form method="POST" action="" style="display:inline;">
                <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                <button type="submit" name="delete">Delete</button>
            </form>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
