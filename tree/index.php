<?php
    function __autoload($className) {
        require_once $className.'.php';
    }

    $tree = new Tree();
    $items = $tree->getDirectories();
    $masters = $items['masters'];
    $childrens = $items['childrens'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Test</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h3 class="heading text-center">Treee</h3>
                    <ul style="list-style: none;">
                        <?php foreach ($masters as $master):?>
                            <li style="margin-bottom: .75rem;">
                                <i class="glyphicon glyphicon-folder-open" style="padding-right: 10px;"></i>
                                <a href="#" data-status="<?= $master['have_childrens'] ?>">
                                    <?= $master['label'] ?>
                                    <?php if ($master['have_childrens']): ?>
                                        <i class="glyphicon glyphicon-minus-sign"></i>
                                    <?php else: ?>
                                        <i class="glyphicon glyphicon-plus-sign"></i>
                                    <?php endif ?>

                                </a>
                                <?= $tree->nested($childrens, $master['id']); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>

        <!--START SCRIPTS-->
        <script  src="https://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="  crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
