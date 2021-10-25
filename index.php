$msg = $_GET['msg'];
$hashed_msg = hash_hmac('sha256', $msg, 'test#lsq$8909');

$response = array("secret_token"=> $hashed_msg);
echo json_encode($response);
