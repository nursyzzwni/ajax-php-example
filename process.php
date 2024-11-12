<?php
// process.php
if (isset($_POST['action']) && $_POST['action'] == 'get_data') {
    // Here you can call any function or perform any operation you want in PHP
    $data = [
        'message' => 'Hello from PHP! Data loaded successfully.' // Sample response data
    ];
    
    // Return the response as JSON
    echo json_encode($data);
}
?>
