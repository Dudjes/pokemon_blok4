<?

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "invalid request";
    exit;
}

require 'database_connection.php';

$firstname = $_POST['firstname'];
if (empty($firstname)) {
    echo "firstname is required ";
    exit;
}
if (strlen($firstname) > 20) {
    echo "user firstname is to long ";
}
if (!isset($_POST['firstname'])) {
    echo "firstname field required";
    exit;
}

$lastname = $_POST['lastname'];
if (empty($lastname)) {
    echo "lastname is required ";
    exit;
}
if (strlen($lastname) > 40) {
    echo "user lastname is to long ";
}
if (!isset($_POST['lastname'])) {
    echo "lastname field required";
    exit;
}

$email = $_POST['email'];
if (!isset($_POST['email'])) {
    echo "email field required";
    exit;
}
if (strlen($email) < 5) {
    echo "user email is to short ";
}

$password = $_POST['password'];
if (!isset($_POST['password'])) {
    echo "password field required";
    exit;
}
if (strlen($password) < 5) {
    echo "user password is to short ";
}

$role = $_POST['role'];
if (!isset($_POST['role'])) {
    echo "role field required";
    exit;
}

$address = $_POST['address'];
if (!isset($_POST['address'])) {
    echo "address field required";
    exit;
}

$city = $_POST['city'];
if (!isset($_POST['city'])) {
    echo "city field required";
    exit;
}

$zipcode = $_POST['zipcode'];
if (!isset($_POST['zipcode'])) {
    echo "zipcode field required";
    exit;
}
if (strlen($zipcode) != 6) {
    echo "user zipcode must be 6 characters long ";
}

$phonenumber = $_POST['phonenumber'];
if (!isset($_POST['phonenumber'])) {
    echo "phonenumber field required";
    exit;
}
if (strlen($phonenumber) != 11) {
    echo "user phonenumber must be 11 characters long ";
}

$sql = "INSERT INTO users (firstname, lastname, email, password, role, address, city, zipcode, phonenumber) 
VALUES ('$firstname', '$lastname', '$email', '$password', '$role', '$address', '$city', '$zipcode', '$phonenumber')";

if (mysqli_query($conn, $sql)) {
    echo 'user is toegevoegd';
}
