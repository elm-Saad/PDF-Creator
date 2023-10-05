<?php
        $company_name = sanitizeInput($_POST['company_name']);
        $company_address = sanitizeInput($_POST['company_address']);
        $invoice_number = sanitizeInput($_POST['invoice_number']);
        $date_issued = date('Y-m-d', strtotime(sanitizeInput($_POST['date_issued'])));
        $date_due = date('Y-m-d', strtotime(sanitizeInput($_POST['date_due'])));
        $customer_name = sanitizeInput($_POST['customer_name']);
        $customer_address = sanitizeInput($_POST['customer_address']);
        $customer_phone = sanitizeInput($_POST['customer_phone']);
        $customer_email = filter_var(sanitizeInput($_POST['customer_email']), FILTER_SANITIZE_EMAIL);


        // Handle logo file upload
        if($_FILES['logo']['error'] == 0 && $_FILES['logo']['size'] <= MAX_FILE_SIZE) {

            $uploadedFile = $_FILES['logo'];
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
            $fileExtension = strtolower(pathinfo($uploadedFile['name'], PATHINFO_EXTENSION));

            if (in_array($fileExtension, $allowedExtensions)) {
                    
                $uploadDir = 'uploads/';
                $logoPath = $uploadDir . $uploadedFile['name'] .time();

                move_uploaded_file($uploadedFile['tmp_name'], $logoPath);

                // echo "<img src=$logoPath alt='Company Logo'> </br>";
            }else{
                $logoPath = defaultImagePath;
            }

        } else {
            $logoPath = defaultImagePath;
        }

        // handle the items 
        $itemCount = 1;
        $items = array();

        // Loop through the inputs until no more matching inputs are found
        while(isset($_POST["item_${itemCount}"])) {
            $item = $_POST["item_${itemCount}"];
            $description = $_POST["description_${itemCount}"];
            $cost = $_POST["cost_${itemCount}"];
            $quantity = $_POST["quantity_${itemCount}"];
            $price = $_POST["price_${itemCount}"];

            // Process or store the item data as needed
            // For example, you can add it to an array
            $items[] = array(
                'item' => $item,
                'description' => $description,
                'cost' => $cost,
                'quantity' => $quantity,
                'price' => $price
            );

            $itemCount++;
        }

        $sanitizedItems = array();

        foreach ($items as $item) {
            // Sanitize each field of the item
            $sanitizedItem = array(
                'item' => sanitizeInput($item['item']),
                'description' => sanitizeInput($item['description']),
                'cost' => sanitizeInput($item['cost']),
                'quantity' => sanitizeInput($item['quantity']),
                'price' => sanitizeInput($item['price'])
            );

            $sanitizedItems[] = $sanitizedItem;
        }

        // Sanitize the total data
        $subtotal = sanitizeInput($_POST['subtotal']);
        $discount = sanitizeInput($_POST['discount']);
        $tax = sanitizeInput($_POST['tax']);
        $total = sanitizeInput($_POST['total']);