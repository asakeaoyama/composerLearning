
<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <title><?= esc($title) ?></title>
    <style>
        table,
        td {
            border: 1px solid #333;
        }

        thead,
        tfoot {
            background-color: #333;
            color: #fff;
        }
    </style>
    </head>
    <body>
        <h1><?= esc($heading) ?></h1>

        <table>
            <thead>
                <tr>
                    <th>Time Used</th>
                    <th>Step</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($todo_list as $weeks => $values) : ?>
                    <tr>
                        <td><?=esc($weeks) ?></td>
                        <?php foreach($values as $things) : ?>
                            <td><?= esc($things) ?></td>
                            <?php endforeach ?>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>


    </body>
</html>