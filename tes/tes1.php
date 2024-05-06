<!DOCTYPE html>
<html>
<head>
    <title>Add to Cart</title>
    <style>
        .container {
            margin: 50px auto;
            width: 300px;
        }
        .cart {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
        }
        .item {
            margin-bottom: 10px;
        }
        .btn {
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add to Cart</h2>
        <div class="cart">
            <div class="item">
                <span>Item 1</span>
                <button class="btn minus" data-id="1">-</button>
                <span id="item_1">0</span>
                <button class="btn plus" data-id="1">+</button>
            </div>
            <!-- Add more items here if needed -->
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const buttonsPlus = document.querySelectorAll('.plus');
            const buttonsMinus = document.querySelectorAll('.minus');

            buttonsPlus.forEach(button => {
                button.addEventListener('click', function () {
                    const itemId = button.getAttribute('data-id');
                    const itemElement = document.getElementById('item_' + itemId);
                    let quantity = parseInt(itemElement.textContent);
                    quantity++;
                    itemElement.textContent = quantity;
                });
            });

            buttonsMinus.forEach(button => {
                button.addEventListener('click', function () {
                    const itemId = button.getAttribute('data-id');
                    const itemElement = document.getElementById('item_' + itemId);
                    let quantity = parseInt(itemElement.textContent);
                    if (quantity > 0) {
                        quantity--;
                        itemElement.textContent = quantity;
                    }
                });
            });
        });
    </script>
</body>
</html>
