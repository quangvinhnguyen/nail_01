<?php

namespace App;

require('UploadHandler.php');

class CustomUploadHandler extends UploadHandler {
    protected function get_user_id() {
        @session_start();
        return session_id();
    }
}

$upload_handler = new CustomUploadHandler(array(
    'server/images' => true
));
