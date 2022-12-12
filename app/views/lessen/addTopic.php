<?php require(APPROOT . '/views/includes/header.php'); ?>

<?= $data['title']; ?>

<form action="<?= URLROOT ?>/lessen/addTopic" method="post">
    <label for="topic">Onderwerp</label><br>
    <input type="text" name="topic" id="topic">
    <div class="topicError"><?= $data['topicError'];?></div>
    <br>
    <input type="hidden" name="lesId" value="<?= $data['lesId']; ?>">
    <input type="submit" value="Toevoegen"><br>
    <a href="<?= URLROOT; ?>/lessen/index"><input type="button" value="Terug"></a>
</form>

<?php require(APPROOT . '/views/includes/footer.php'); ?>