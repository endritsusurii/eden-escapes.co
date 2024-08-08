<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "endritsusuri008@gmail.com"; // Replace with the admin email address
    $subject = "New Form Submission";

    // Check if 'form_type' key exists in $_POST array
    if (isset($_POST['form_type'])) {
        $form_type = $_POST['form_type'];
        $body = '';

        if ($form_type == 'contact') {
            // Contact Us Form
            $name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            $message = $_POST['message'] ?? '';

            $body = "Contact Us Form Submission:\n\n";
            $body .= "Name: $name\n";
            $body .= "Email: $email\n";
            $body .= "Message: $message\n";
        } elseif ($form_type == 'trip') {
            // Make a Trip Form
            $trip_name = $_POST['trip-name'] ?? '';
            $phone = $_POST['phone'] ?? '';
            $trip_email = $_POST['trip-email'] ?? '';
            $planned_date = $_POST['planned-date'] ?? '';

            $body = "Make a Trip Form Submission:\n\n";
            $body .= "Full Name: $trip_name\n";
            $body .= "Phone: $phone\n";
            $body .= "Email: $trip_email\n";
            $body .= "Planned Date: $planned_date\n";
        }

        // Set the headers
        $headers = "From: no-reply@eden-escapes.co\r\n";
        $headers .= "Reply-To: no-reply@eden-escapes.co\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Send the email
        if (mail($to, $subject, $body, $headers)) {
            echo json_encode(['status' => 'success', 'message' => 'Email successfully sent!']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Email sending failed.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Form type not specified.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>
