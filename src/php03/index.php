<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>

<body>
    <main>
        <h1 class="title">九九表</h1>
        <table>
            <?php
            for ($i = 1; $i <= 9; $i++):
                echo '<tr>';
                for ($j = 1; $j <= 9; $j++):
                    echo '<td>' . ($i * $j) . '</td>';
                endfor;
                echo '</tr>';
            endfor;
            ?>
        </table>
    </main>
</body>

</html>