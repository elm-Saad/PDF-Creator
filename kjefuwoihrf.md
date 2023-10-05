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