<?php

use App\Models\Vehicle;

require_once 'app/Views/partials/header.html';

?>

    <div class="container">

        <div class="input">
            <input class="time" name="time" type="datetime-local" value="<?= date("Y-m-d H:i:s") ?>">
            <button class="update">Show</button>
        </div>

        <table>
            <tr>
                <th>Vieta</th>
                <?php for ($i = 1; $i <= 12; $i++) : ?>

                    <th><?= $i ?></th>

                <?php endfor; ?>
            </tr>
            <?php for ($i = 1; $i <= 14; $i++) : ?>

                <tr>
                    <td><?= $i ?></td>
                    <?php for ($e = 1; $e <= 12; $e++) : ?>

                        <td>
                            <?php if ($vehicles[$e][$i - 1]): ?>

                                <p class="delete"><?= $vehicles[$e][$i - 1]->getRn() ?></p>

                            <?php endif ?>
                        </td>

                    <?php endfor; ?>
                </tr>

            <?php endfor; ?>


        </table>

    </div>
    <script type="text/javascript" src="app/Views/assets/js/form.js"></script>

<?php
require_once 'app/Views/partials/footer.html';
?>