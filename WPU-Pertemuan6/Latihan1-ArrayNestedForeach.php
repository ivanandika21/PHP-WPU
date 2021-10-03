<!DOCTYPE html>
<html>
<head>
    <title>ArrayAsosiatif</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: lightgreen;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php
        $tas = [
            [1,2,3,4,5,6,7,8,9],
            [21,22,23],
            [171]
        ];
    ?>

    <?php
        // echo $tas[0][8];
    ?>

    <?php foreach($tas as $kotakpensil) : ?>
        <?php foreach($kotakpensil as $pensil) : ?>
            <div class="kotak"><?php echo $pensil ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
</body>
</html>