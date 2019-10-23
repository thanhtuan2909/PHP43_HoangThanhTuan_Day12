<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
?>

<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>Tên khóa học</th>
    </tr>
    <?php foreach ($arrs as $key => $value): ?>
        <tr>
            <td><?php echo $value; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
