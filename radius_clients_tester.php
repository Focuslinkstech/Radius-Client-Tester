<?php
register_menu("Radius Client Tester", true, "radius_client_tester", 'RADIUS', '');

function radius_client_tester()
{
    global $ui;
    _admin();
    $ui->assign('_title', 'Radius Client Tester');
    $ui->assign('_system_menu', 'settings');
    $admin = Admin::_info();
    $ui->assign('_admin', $admin);

    // Define variables to store form data
    $username = $password = $address = $port = $secret = "";
    $output = "";

    // Define variables to store form validation errors
    $username_error = $password_error = $address_error = $port_error = $secret_error = "";

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Validate username
        if (empty($_POST["username"])) {
            $username_error = "Username field is required";
        } else {
            $username = $_POST["username"];
        }

        // Validate password
        if (empty($_POST["password"])) {
            $password_error = "Password field is required";
        } else {
            $password = $_POST["password"];
        }

        // Validate address
        if (empty($_POST["address"])) {
            $address_error = "IP Address is required";
        } else {
            $address = $_POST["address"];
        }
		
		// Validate address
        if (empty($_POST["port"])) {
            $port_error = "Nas Port is required";
        } else {
            $port = $_POST["port"];
        }

        // Validate secret
        if (empty($_POST["secret"])) {
            $secret_error = "Secret key is required";
        } else {
            $secret = $_POST["secret"];
        }

        // If there are no validation errors, perform the radius test action
        if (empty($username_error) && empty($password_error) && empty($address_error) && empty($secret_error)) {
            // Execute shell command
            $command = "radtest $username $password $address $port $secret";
            $result = shell_exec($command);
            $output = "$result";
        }
    }

    $ui->assign('username', $username);
    $ui->assign('password', $password);
    $ui->assign('address', $address);
    $ui->assign('port', $port);
    $ui->assign('secret', $secret);
    $ui->assign('username_error', $username_error);
    $ui->assign('password_error', $password_error);
    $ui->assign('address_error', $address_error);
	$ui->assign('port_error', $port_error);
    $ui->assign('secret_error', $secret_error);
    $ui->assign('output', $output);

    $ui->display('radius_client_tester.tpl');
}