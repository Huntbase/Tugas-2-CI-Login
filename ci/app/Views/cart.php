<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0ba96f7342.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Keranjang Belanja</title>
    <link rel="stylesheet" href="/css/style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        .cart-container ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .cart-container ul li {
            display: flex;
            align-items: center;
            padding: 20px;
        }

        .cart-container ul li img {
            width: 100px;
            height: auto;
            margin-right: 10px;
        }

        .total-price {
            margin-top: 20px;
            font-weight: bold;
            font-size: 18px;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            margin-left: 10px;
        }

        .quantity-controls button {
            border: none;
            background: none;
            font-size: 16px;
            cursor: pointer;
            margin: 0 5px;
        }

        .quantity-controls span {
            margin: 0 5px;
            font-size: 16px;
        }

        .quantity-controls button:hover {
            color: #007bff;
        }
    </style>
</head>

<body>
    <div class="cart-container">
        <h1>Keranjang Belanja</h1>
        <?php if (empty($cartItems)) : ?>
            <p style='color: #000'>Keranjang belanja Anda kosong.</p>
        <?php else : ?>
            <ul>
                <li>
                    <input type="checkbox" id="select-all-checkbox"> <label class="select" for="select-all-checkbox">Select All</label>
                </li>
                <?php foreach ($cartItems as $item) : ?>
                    <li>
                        <input type="checkbox" class="item-checkbox" value="<?= $item['product']['id'] ?>">
                        <?php if (!empty($item['image'])) : ?>
                            <img src="<?= base_url('uploads/' . $item['image']) ?>" alt="<?= $item['product']['name'] ?>">
                        <?php else : ?>
                            <img src="<?= base_url('image/default_product_image.jpg') ?>" alt="Default Product Image">
                        <?php endif; ?>
                        <?php if (isset($item['product']['name'])) : ?>
                            <span><?= $item['product']['name'] ?> </span>

                            <span id="price_<?= $item['product']['id'] ?>">Rp. <?= number_format($item['product']['price'], 0, ',', '.') ?></span>
                            <div class="quantity-controls">
                                <button class="decrease-quantity" data-id="<?= $item['product']['id'] ?>"><i class="fas fa-minus"></i></button>
                                <span class="quantity" id="quantity_<?= $item['product']['id'] ?>"><?= $item['quantity'] ?></span>
                                <button class="increase-quantity" data-id="<?= $item['product']['id'] ?>"><i class="fas fa-plus"></i></button>
                            </div>
                        <?php else : ?>
                            <span>Produk tidak ditemukan</span>
                        <?php endif; ?>
                        <a href="<?= base_url('produk/removeFromCart/' . $item['product']['id']) ?>" class="fa-solid fa-trash-can remove-link"></a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="total-price" id="total-price">
                Total Harga: Rp. 0
            </div>

            <div>
                <a class="buy1" href="">Beli Sekarang</a>
                <a href="<?= base_url('ProdukController/index') ?>" class="lanjutkan">Lanjutkan Belanja</a>
            </div>
        <?php endif; ?>
    </div>

    <script>
        $(document).ready(function() {
            function calculateTotalPrice() {
                var totalPrice = 0;
                $('.item-checkbox:checked').each(function() {
                    var productId = $(this).val();
                    var itemPrice = parseInt($('#price_' + productId).text().replace(/[^\d]/g, ''));
                    var itemQuantity = parseInt($('#quantity_' + productId).text());
                    totalPrice += itemPrice * itemQuantity;
                });
                $('#total-price').text('Total Harga: Rp. ' + totalPrice.toLocaleString('id-ID'));
            }

            calculateTotalPrice();
            $('.item-checkbox').change(function() {
                calculateTotalPrice();
            });

            $('#select-all-checkbox').change(function() {
                var isChecked = $(this).prop('checked');
                $('.item-checkbox').prop('checked', isChecked);
                calculateTotalPrice();
            });

            $('.increase-quantity').click(function() {
                var productId = $(this).data('id');
                var quantityElement = $('#quantity_' + productId);
                var quantity = parseInt(quantityElement.text());
                quantity++;
                quantityElement.text(quantity);
                calculateTotalPrice();
            });

            $('.decrease-quantity').click(function() {
                var productId = $(this).data('id');
                var quantityElement = $('#quantity_' + productId);
                var quantity = parseInt(quantityElement.text());
                if (quantity > 1) {
                    quantity--;
                    quantityElement.text(quantity);
                }
                calculateTotalPrice();
            });
        });
    </script>
</body>
</html>