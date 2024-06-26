<?php 
require('../config.php');

$method = strtolower($_SERVER['REQUEST_METHOD']); 

if($method === 'delete') {

    parse_str(file_get_contents('php://input'), $input);

    //$id = (!empty($input['id'])) ? input['id'] : null; 
    $id = $input['id'] ?? null;

    $id = filter_var($id, FILTER_VALIDATE_INT);


    if($id) {

        $sql = $pdo->prepare("SELECT * FROM notes WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0) {

            $sql = $pdo->prepare("DELETE FROM notes WHERE id = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();
            
        } else {
            $array['error'] = 'Invalid ID';
        }

    } else {
        $array['error'] = 'ID not sent';
    }

} else {
    $array['error'] = 'Invalid method (only DELETE)';
}

require('../return.php');