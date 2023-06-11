<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Square</title>

    <style>
        .color {
            background-color: cyan;
            border-style: solid;
            border-width: 2px;
        }
    </style>

</head>

<body>
    <table cellpadding="15" cellspacing="0">
        <?php for ($i = 10; $i >= 1; $i--) : ?>
            <tr>
                <?php for ($j = 1; $j <= $i; $j++) : ?>
                <td class="color"><?php echo "$j"; ?></td>
                <?php endfor ?>
            </tr> 
        <?php endfor ?>
            
    </table>
</body>

</html>