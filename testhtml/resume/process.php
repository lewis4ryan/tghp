<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // have to file
    $errors = [];
        if (isset($_FILES['file']))
        {
        	$errors = [];

            // upload is finished and not error
            if ($_FILES['file']['error'] > 0)
            {
                $errors = array('return' => false, 'msg' => 'File Upload error', 'src' => '');
            }
            else{
                // Upload file
                move_uploaded_file($_FILES['file']['tmp_name'], './upload/'.$_FILES['file']['name']);
                $errors = array('return' => true, 'msg' => 'Success', 'src' =>  'upload/'.$_FILES['file']['name']);
            }
        }
        else{
        	$errors = array('return' => false, 'msg' => 'Select file upload', 'src' => '');
        }
    echo json_encode($errors);
}
