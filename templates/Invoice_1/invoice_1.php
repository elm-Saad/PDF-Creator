<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>invoice template</title>
    <style>

        *,*::before,*::after {
            box-sizing: border-box
        }
        body {
            margin: 0;
            color: #697a8d;
            font-family:sans-serif;            
            background-color: white;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(67,89,113,0)
        }

        hr {
            margin: 1rem 0;
            color: #d9dee3;
            border: 0;
            border-top: 1px solid;
            opacity: 1
        }

        h6,.h6,h5,.h5,h4,.h4,h3,.h3,h2,.h2,h1,.h1 {
            margin-top: 0;
            margin-bottom: 1rem;
            font-weight: 500;
            line-height: 1.1;
            color: #566a7f
        }

        h1,.h1 {
            font-size: calc(1.3625rem + 1.35vw)
        }

        @media(min-width: 1200px) {
            h1,.h1 {
                font-size:2.375rem
            }
        }

        h2,.h2 {
            font-size: calc(1.325rem + 0.9vw)
        }

        @media(min-width: 1200px) {
            h2,.h2 {
                font-size:2rem
            }
        }

        h3,.h3 {
            font-size: calc(1.2875rem + 0.45vw)
        }

        @media(min-width: 1200px) {
            h3,.h3 {
                font-size:1.625rem
            }
        }

        h4,.h4 {
            font-size: calc(1.2625rem + 0.15vw)
        }

        @media(min-width: 1200px) {
            h4,.h4 {
                font-size:1.375rem
            }
        }
        h6,.h6 {
            font-size: 0.9375rem
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem
        }
        /*container*/
        .container{
            margin-left: auto;
            margin-right: auto;
            margin-top: 5px;
            padding-left: 24px;
            padding-right: 24px;
            width:90%;
            height:100%
            min-width: min-content;
        }
        @media (max-width:500px) {
            .container{
                padding: 5px;
            } 
        }
        /* Invoice */
        .Invoice{
            background-color: rgb(255, 255, 255);
            /* max-width: 60rem; */
            margin-top: 2rem;
            margin-bottom: 2rem;
            padding: 3rem 2rem;
        }
        .card-body {
            min-height:120px;
            overflow: auto;
            width:100%;
            margin-top:1.2rem;
            margin-bottom:0;
            box-sizing:border-box;
        }
        .card-head-container {
            float: left;
            box-sizing: border-box;
        }

        .card-head-container.extreme-right {
            text-align: end;
            float: right;
        }

        @media (max-width: 467px) {
            .card-head-container {
                float: none;
                width: 100%;
            }
            
            .card-head-container.extreme-right {
                float: none; /* Remove float for extreme right div on smaller screens */
                width: 100%;
            }
        }


        @media (max-width:467px) {
            .card-head-container:first-child{
                margin-bottom: 3rem;
            }
            
        }
        .app-brand {
            overflow: auto;
            margin-bottom:0.2rem;
        }

        .app-brand-content {
            float: left;
            text-align: center;
            box-sizing: border-box;
        }

        .app-brand-logo {
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
            width: 2.3rem;
            height: 2.3rem;
        }
        .app-brand-logo img{
            width: 100%;
            height: 100%;
        }
        .app-brand-text {
            font-size: 1rem;
            font-weight: bold;
        }
        @media (max-width: 467px) {
            .app-brand-content {
                float: none;
                width: 100%;
                text-align: left;
                padding: 0;
            }

            .app-brand-logo {
                display: block;
                vertical-align: top;
                margin-right: 0;
            }
        } 
        .address{
            max-width:200px
        }
        /* Default styles for larger screens (flex-like layout) */
        .row {
            overflow: auto;
            min-height:200px;
            margin-bottom:1rem;
            width:100%;
            margin-top:1.2rem;
            margin-bottom:0;
            box-sizing:border-box;
        }

        .Invoice-to{
            float: left;
            box-sizing: border-box;
        }
        .Invoice-to p{
            margin:5px 0;
        }
        .Bill-to {
            float: right;

        }

        /* Media query for smaller screens (switch to column layout) */
        @media (max-width: 467px) {
            .Invoice-to,
            .Bill-to {
                float: none;
                width: 100%;
            }
        }

        /*table*/

        table {
            border-collapse: collapse;
            background:white;
        }
        
        table td {
            padding: 0 1rem;
            padding-left: 0;
        }
        
        table tr:nth-child(odd) {
            background-color: transparent;
        }
        
        table tr:nth-child(even) {
            background-color: transparent;
        }
        
        table td:first-child {
            font-weight: bold;
        }
        

        /* Styles for the responsive-table */
        .responsive-table {
            width: 100%;
        }
        .table-wrapper {
            overflow-x: auto;

        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 0;
        }
        
        .table th,
        .table td {
            border: 1px solid #e0e0e0;
            padding: 10px;
            text-align: left;
        }
        
        .table th {
            background-color:#f1f1f1cc ;
            /* opacity: 0.5; */
        }

        /* Table Header Styles */
        .table thead th {
            font-weight: bold;
        }
        
        /* Table Body Styles */
        .table tbody td {
            border-top: 1px solid #e0e0e0;
        }
        
        /* Additional Styles for Specific Columns */
        .table tbody td:nth-child(3),
        .table tbody td:nth-child(5) {
            text-align: right;
        }
        
        /* Styles for the Last Row */
        .table tbody tr:last-child {
            background-color: white;
        }
        
        /* Styles for the Last Row Cells */
        .table tbody tr:last-child td {
            /* border-top: none; */
        }
        
        /* Subtotal and Total Cell Styles */
        .table tbody td.colspan {
            padding: 20px;
            vertical-align: top;
        }
        
        /* Salesperson and Total Amount Styles */
        .table tbody td.text-end {
            text-align: right;
        }
        
        /* Salesperson Name Styles */
        .table tbody td.align-top span:first-child {
            font-weight: medium;
            margin-right: 5px;
        }
        
        /* Total Amount Styles */
        .table tbody td.px-4 span {
            font-weight: medium;
            margin-bottom: 10px;
        }

    </style>
</head>
<body class="relative min-h-screen">
    <!-- -->
        <div class="Invoice container">
            <div class="card">
                <div class="card-body">
                        <div class="card-head-container">
                                <div class="app-brand">
                                    <span class="app-brand-logo">
                                        <img src=<?php echo $logoPath; ?> alt="Logo">
                                    </span>
                                    <span class="app-brand-text"><?php echo $company_name; ?></span>
                                    
                                </div>
                                <p class='address'><?php echo $company_address; ?></p>
                        </div>
                        <div class="card-head-container extreme-right">
                            <h4>Invoice #<?php echo $invoice_number; ?></h4>
                            <div>
                            <span>Date Issues:</span>
                            <span><?php echo $date_issued; ?></span>
                            </div>
                            <div>
                            <span>Date Due:</span>
                            <span><?php echo $date_due; ?></span>
                            </div>
                        </div>
                </div>
                <hr class="my-0">
                <div class="row">
                    <div class="Invoice-to">
                        <h6>Invoice To:</h6>
                        <p><?php echo $customer_name; ?></p>
                        <p class='address'><?php echo $customer_address; ?></p>
                        <p><?php echo $customer_phone; ?></p>
                        <p><?php echo $customer_email; ?></p>
                    </div>
                    <div class="Bill-to">
                        <h6 class="pb-2">Bill To:</h6>
                        <p>Total Due:$<?php echo $total; ?></p>
                    </div>
                </div>
                <div class="table-wrapper">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Description</th>
                                <th>Cost</th>
                                <th>Qty</th>
                                <th>Price</th>
                            </tr>
                            <?php foreach($sanitizedItems as $item): ?>
                                <tr>
                                    <td><?php echo $item['item']; ?></td>
                                    <td><?php echo $item['description']; ?></td>
                                    <td><?php echo $item['cost']; ?></td>
                                    <td><?php echo $item['quantity']; ?></td>
                                    <td><?php echo $item['price']; ?></td>
                                </tr>
                            <?php endforeach;?>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="3">
                                <p>
                                    <span>Salesperson:</span>
                                    <span><?php echo $customer_name; ?></span>
                                </p>
                                <span>Thanks for your business</span>
                                </td>
                                <td>
                                    <p>Subtotal:</p>
                                    <p>Discount:</p>
                                    <p>Tax:</p>
                                    <p>Total:</p>
                                </td>
                                <td>
                                    <p>$<?php echo $subtotal; ?></p>
                                    <p>$<?php echo $discount; ?></p>
                                    <p>$<?php echo $tax; ?></p>
                                    <p>$<?php echo $total; ?></p>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- -->
</body>
</html>