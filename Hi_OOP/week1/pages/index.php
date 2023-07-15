<?php
// التحقق من الإجراء الذي يقوم به المستخدم
if ($_GET['action'] == 'login') {
$page = new LoginPage();
} elseif ($_GET['action'] == 'register') {
$page = new RegisterPage();
} elseif ($_GET['action'] == 'forgot-password') {
$page = new ForgotPasswordPage();
} elseif ($_GET['action'] == 'welcome') {
$page = new WelcomePage();
}


$page->render();

$users = array(
    array('email' => 'user1@example.com', 'password' => 'password1'),
    array('email' => 'user2@example.com', 'password' => 'password2'),
    array('email' => 'user3@example.com', 'password' => 'password3')
);

$email = $_POST['email'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'البريد الإلكتروني الذي أدخلته غير صالح.';
}

$email = $_POST['email'];
$password = $_POST['password'];

// التحقق من أن البريد الإلكتروني ليس بالفعل موجودًا في مصفوفة المستخدمين
foreach ($users as $user) {
    if ($user['email'] == $email) {
        echo 'this mail is already found';
        return;
    }
}