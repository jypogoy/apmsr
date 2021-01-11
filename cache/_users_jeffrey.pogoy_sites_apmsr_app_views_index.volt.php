<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Performance evaluation extraction utility.">
        <meta name="author" content="ADEC Innovations">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <?= $this->tag->getTitle() ?>
        
        <?= $this->tag->stylesheetLink('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css') ?>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->url->get('img/favicon.ico')?>"/>
    </head>
    <body>
        <div class="container">
            <?= $this->getContent() ?>
        </div>
        <?= $this->tag->javascriptInclude('https://code.jquery.com/jquery-3.3.1.slim.min.js') ?>
        <?= $this->tag->javascriptInclude('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js') ?>
        <?= $this->tag->javascriptInclude('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js') ?>
    </body>
</html>
