<?php
session_start();
include('components/header.php');
include('php/query.php');

if (isset($_GET['product_id'])) {
    $id = intval($_GET['product_id']);
    $quantity = intval($_GET['quantity'] ?? 1);

    $stmt = $pdo->prepare("SELECT * FROM product WHERE product_id = ?");
    $stmt->execute([$id]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($product) {
        $cartItem = [
            'product_id' => $product['product_id'],
            'name' => $product['productname'],
            'price' => $product['price'],
            'quantity' => $quantity,
            'image' => $product['image']
        ];
        $_SESSION['cart'][] = $cartItem;
    }
}

$cart = $_SESSION['cart'] ?? [];
?>

<div class="container py-4">
    <h2>Your Cart</h2>
    <?php if (empty($cart)): ?>
        <p>No items in cart.</p>
    <?php else: ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cart as $item): ?>
                    <tr>
                        <td><img src="dashboard/images/<?php echo $item['image']; ?>" width="50"></td>
                        <td><?php echo $item['name']; ?></td>
                        <td>Rs <?php echo $item['price']; ?></td>
                        <td><?php echo $item['quantity']; ?></td>
                        <td>Rs <?php echo $item['price'] * $item['quantity']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>

<?php include('components/footer.php'); ?>
