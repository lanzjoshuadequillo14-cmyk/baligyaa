
document.querySelectorAll('.buy-btn').forEach(button => {
    button.addEventListener('click', (e) => {
        const product = e.target.closest('.product');
        const productId = product.getAttribute('data-id');
        const productName = e.target.getAttribute('data-name');
        const productPrice = e.target.getAttribute('data-price');
        const quantity = product.querySelector('.quantity-input').value;

        fetch('add_to_cart.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `product_id=${productId}&product_name=${productName}&product_price=${productPrice}&quantity=${quantity}`
        })
        .then(response => response.text())
        .then(data => {
            alert(data);
            window.location.href = 'cart.php'; // Redirect to cart page
        })
        .catch(error => console.error('Error:', error));
    });
});
