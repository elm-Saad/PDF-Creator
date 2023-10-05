<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Generator</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/Invoice_form.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="../js/index.js" defer></script>


    <!-- JavaScript for item addition -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const addItemButton = document.getElementById('add-item');
            const itemContainer = document.querySelector('.form-items');
            let itemCount = 1; // Initial item count

            addItemButton.addEventListener('click', function () {
                itemCount++; // Increment the item count

                // Create a new table row with input fields
                const newItemRow = document.createElement('tr');
                newItemRow.innerHTML = `
                    <td>
                        <input type="text" name="item_${itemCount}" required />
                    </td>
                    <td>
                        <input type="text" name="description_${itemCount}" required />
                    </td>
                    <td>
                        <input type="number" name="cost_${itemCount}" required />
                    </td>
                    <td>
                        <input type="number" name="quantity_${itemCount}" required />
                    </td>
                    <td>
                        <input type="text" name="price_${itemCount}" required />
                    </td>
                `;

                // Append the new item row to the table body
                const tableBody = itemContainer.querySelector('tbody');
                tableBody.appendChild(newItemRow);
            });
        });
    </script>
</head>
<body class="relative min-h-screen">
    <!-- Header -->
    <?php include '../inc/cssNavbar.php' ?>

    <!-- form -->
    <div class="Invoice container">
        <form action="../generate-pdf.php" method="POST" class="invoice-form" enctype="multipart/form-data">
            <input type="hidden" name="template_name" value='invoice_1'>
            <div class="form-header">
                <div class="form-logo">
                    <label for="logo">Upload Logo:</label>
                    <input type="file" id="logo" name="logo" accept="image/*" />
                </div>
                <div class="form-brand">
                    <label for="brand-text">Company Name:</label>
                    <input type="text" id="brand-text" name="company_name" required />
                </div>
                <div class="form-address">
                    <label for="address">Company Address:</label>
                    <textarea id="address" name="company_address" required></textarea>
                </div>
            </div>
            <hr class="form-divider" />
            <div class="form-body">
                <div class="form-info">
                    <h4>Invoice:</h4>
                    <div class="form-invoice">
                        <label for="invoice-number">Invoice Number:</label>
                        <input type="text" id="invoice-number" name="invoice_number" required />
                    </div>
                    <div class="form-dates">
                        <div class="form-date-issued">
                        <label for="date-issued">Date Issued:</label>
                        <input type="date" id="date-issued" name="date_issued" required />
                        </div>
                        <div class="form-date-due">
                        <label for="date-due">Date Due:</label>
                        <input type="date" id="date-due" name="date_due" required />
                        </div>
                    </div>
                </div>
                <div class="form-customer">
                    <h4>Invoice To:</h4>
                    <label for="customer-name">Customer Name:</label>
                    <input type="text" id="customer-name" name="customer_name" required />
                    <label for="customer-address">Customer Address:</label>
                    <textarea id="customer-address" name="customer_address" required></textarea>
                    <label for="customer-phone">Customer Phone:</label>
                    <input type="tel" id="customer-phone" name="customer_phone" required />
                    <label for="customer-email">Customer Email:</label>
                    <input type="email" id="customer-email" name="customer_email" required />
                </div>
                <div class="form-items">
                    <table>
                        <thead>
                        <tr>
                            <th>Item</th>
                            <th>Description</th>
                            <th>Cost</th>
                            <th>Qty</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                            <input type="text" name="item_1" required />
                            </td>
                            <td>
                            <input type="text" name="description_1" required />
                            </td>
                            <td>
                            <input type="number" name="cost_1" required />
                            </td>
                            <td>
                            <input type="number" name="quantity_1" required />
                            </td>
                            <td>
                            <input type="text" name="price_1" required />
                            </td>
                        </tr>
                        
                        </tbody>
                    </table>
                    <div class="form-add-item">
                        <button type="button" id="add-item">Add Item</button>
                    </div>
                    <div class="form-total">
                        <label for="subtotal">Subtotal:</label>
                        <input type="text" id="subtotal" name="subtotal" required />
                        <label for="discount">Discount:</label>
                        <input type="text" id="discount" name="discount" required />
                        <label for="tax">Tax:</label>
                        <input type="text" id="tax" name="tax" required />
                        <label for="total">Total:</label>
                        <input type="text" id="total" name="total" required />
                    </div>
                </div>
            </div>
            <div class="form-submit">
                <button type="submit">Generate Invoice</button>
            </div>
        </form>
    </div>
    


</body>
</html>