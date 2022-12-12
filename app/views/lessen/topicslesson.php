<?php require(APPROOT . '/views/includes/header.php'); ?>

<?= $data['title']; ?>
<h5><?= 'Datum: ' . $data['date'] . ' Tijd: ' . $data['time']; ?></h5>

<table border='1'>
    <thead>
        <th>
            Onderwerp
        </th>
        <tbody>
            <?= $data['rows']; ?>
        </tbody>
    </thead>
</table>
<br>
<a href="<?= URLROOT; ?>/lessen/addTopic/<?= $data['lesId'];?>"><input type="button" value="Onderwerp toevoegen"></a>

<?php require(APPROOT . '/views/includes/footer.php'); ?>