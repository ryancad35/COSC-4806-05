<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header">
        <!-- Display error if there is one -->
        <?php if ($error): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <h1>Edit Your Reminder</h1>
        <form action="/reminders/edit_reminder" method="post">
            <fieldset>
                <legend>Enter Your Reminder</legend>
                <textarea maxlength="255" name="message" id="message"><?php echo $reminder['subject']; ?></textarea><br>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="submit" name="action" value="Edit Reminder">
            </fieldset>
        </form>
        <br>
    </div>
</div>
<?php require_once 'app/views/templates/footer.php'?>
