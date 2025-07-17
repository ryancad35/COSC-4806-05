<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header">
        <?php if ($error): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <h1>Create a Reminder</h1>
        <form action="/reminders/create_reminder" method="post">
            <fieldset>
                <legend>Enter Your Reminder</legend>
                <div class="form-group">
                    <textarea maxlength="255" name="message" id="message" class="form-control"></textarea>
                </div>
                <input type="submit" name="action" value="Submit Reminder" class="btn">
            </fieldset>
        </form>
    </div>
</div>
<?php require_once 'app/views/templates/footer.php'?>