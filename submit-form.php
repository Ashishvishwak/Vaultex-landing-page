<?php
/**
 * Vaultex Landing Page - Dealership Enquiry Mailer
 * Target Destination: sales@balajient.biz
 */

// Set JSON header for AJAX responses
header('Content-Type: application/json; charset=UTF-8');

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'Method Not Allowed. Only POST requests are supported.'
    ]);
    exit;
}

// Destination email address
$toEmail = 'sales@balajient.biz';
$emailSubject = 'New Dealership Enquiry - Vaultex Landing Page';

// Support both standard POST (FormData / application/x-www-form-urlencoded) and JSON body
$input = $_POST;
if (empty($input)) {
    $rawInput = file_get_contents('php://input');
    if (!empty($rawInput)) {
        $jsonData = json_decode($rawInput, true);
        if (is_array($jsonData)) {
            $input = $jsonData;
        }
    }
}

// Helper to sanitize input strings
function clean_field($data) {
    if (!isset($data)) return '';
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    // Prevent email header injection (carriage return / newline)
    return str_replace(["\r", "\n"], ' ', $data);
}

// Extract fields from either hero form or modal form
$fullName = clean_field($input['fullName'] ?? $input['modalFullName'] ?? '');
$businessName = clean_field($input['businessName'] ?? $input['modalBusinessName'] ?? '');
$mobileNumber = clean_field($input['mobileNumber'] ?? $input['modalMobileNumber'] ?? '');
$cityState = clean_field($input['cityState'] ?? $input['modalCityState'] ?? '');
$businessCategory = clean_field($input['businessCategory'] ?? $input['modalBusinessCategory'] ?? '');
$interestedModel = clean_field($input['modalInterestedModel'] ?? $input['interestedModel'] ?? 'Not specified / All Models');
$sourceForm = !empty($input['modalFullName']) ? 'Modal Enquiry Form' : 'Hero Section Form';

// Validate required fields
if (empty($fullName) || empty($businessName) || empty($mobileNumber) || empty($cityState)) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'Please fill in all required fields (Full Name, Business Name, Mobile Number, City & State).'
    ]);
    exit;
}

// Metadata
$clientIp = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
$submittedAt = date('d M Y, h:i A') . ' IST';

// Prepare HTML Email Body
$htmlBody = '
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>New Dealership Enquiry</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #F4F8FA; margin: 0; padding: 24px; color: #000115;">
  <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 16px; overflow: hidden; border: 1px solid #E5E7EB;">
    <!-- Header -->
    <tr>
      <td style="background-color: #000115; padding: 28px 32px; text-align: left;">
        <span style="font-size: 11px; font-weight: bold; letter-spacing: 2px; text-transform: uppercase; color: #00ADEF;">VAULTEX B2B PORTAL</span>
        <h1 style="color: #ffffff; margin: 8px 0 0 0; font-size: 22px; font-weight: 700;">New Dealership Enquiry</h1>
      </td>
    </tr>
    <!-- Content Table -->
    <tr>
      <td style="padding: 32px;">
        <p style="font-size: 14px; color: #475569; margin: 0 0 20px 0; line-height: 1.5;">
          A new business enquiry has been submitted through the <strong>Vaultex Footwear</strong> landing page. Below are the contact and business details:
        </p>

        <table width="100%" cellspacing="0" cellpadding="10" style="border-collapse: collapse; font-size: 14px;">
          <tr style="border-bottom: 1px solid #F1F5F9;">
            <td width="35%" style="color: #64748B; font-weight: 600;">Full Name:</td>
            <td style="color: #000115; font-weight: 700;">' . $fullName . '</td>
          </tr>
          <tr style="border-bottom: 1px solid #F1F5F9; background-color: #FAFAFA;">
            <td style="color: #64748B; font-weight: 600;">Business Name:</td>
            <td style="color: #000115; font-weight: 700;">' . $businessName . '</td>
          </tr>
          <tr style="border-bottom: 1px solid #F1F5F9;">
            <td style="color: #64748B; font-weight: 600;">Mobile Number:</td>
            <td style="color: #00ADEF; font-weight: 700;"><a href="tel:' . preg_replace('/[^0-9+]/', '', $mobileNumber) . '" style="color: #00ADEF; text-decoration: none;">' . $mobileNumber . '</a></td>
          </tr>
          <tr style="border-bottom: 1px solid #F1F5F9; background-color: #FAFAFA;">
            <td style="color: #64748B; font-weight: 600;">City & State:</td>
            <td style="color: #000115;">' . $cityState . '</td>
          </tr>
          <tr style="border-bottom: 1px solid #F1F5F9;">
            <td style="color: #64748B; font-weight: 600;">Business Category:</td>
            <td style="color: #000115;">' . (!empty($businessCategory) ? $businessCategory : 'Not specified') . '</td>
          </tr>
          <tr style="border-bottom: 1px solid #F1F5F9; background-color: #FAFAFA;">
            <td style="color: #64748B; font-weight: 600;">Interested Model:</td>
            <td style="color: #000115;">' . $interestedModel . '</td>
          </tr>
          <tr style="border-bottom: 1px solid #F1F5F9;">
            <td style="color: #64748B; font-weight: 600;">Submission Source:</td>
            <td style="color: #64748B;">' . $sourceForm . '</td>
          </tr>
          <tr>
            <td style="color: #64748B; font-weight: 600;">Submission Time:</td>
            <td style="color: #64748B;">' . $submittedAt . '</td>
          </tr>
        </table>
      </td>
    </tr>
    <!-- Footer -->
    <tr>
      <td style="background-color: #F8FAFC; padding: 16px 32px; font-size: 12px; color: #94A3B8; text-align: center; border-top: 1px solid #E2E8F0;">
        This email was automatically generated from the Vaultex Landing Page (IP: ' . $clientIp . ').
      </td>
    </tr>
  </table>
</body>
</html>';

// Plain text alternative
$plainTextBody = "NEW DEALERSHIP ENQUIRY - VAULTEX FOOTWEAR\n\n"
    . "Full Name: " . $fullName . "\n"
    . "Business Name: " . $businessName . "\n"
    . "Mobile Number: " . $mobileNumber . "\n"
    . "City & State: " . $cityState . "\n"
    . "Business Category: " . ($businessCategory ?: 'Not specified') . "\n"
    . "Interested Model: " . $interestedModel . "\n"
    . "Submission Source: " . $sourceForm . "\n"
    . "Submission Time: " . $submittedAt . "\n"
    . "Client IP: " . $clientIp . "\n";

// Email headers
$fromEmail = 'no-reply@' . ($_SERVER['HTTP_HOST'] ?? 'balajient.biz');
$headers = [];
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-Type: text/html; charset=UTF-8';
$headers[] = 'From: Vaultex Leads <' . $fromEmail . '>';
$headers[] = 'Reply-To: ' . $fullName . ' <' . $fromEmail . '>';
$headers[] = 'X-Mailer: PHP/' . phpversion();

// Send email
$mailSent = @mail($toEmail, $emailSubject, $htmlBody, implode("\r\n", $headers));

if ($mailSent) {
    http_response_code(200);
    echo json_encode([
        'success' => true,
        'message' => 'Thank you! Your dealership enquiry has been successfully submitted.'
    ]);
} else {
    // Return error if mail transport failed on server
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Unable to send email right now. Please try calling directly or try again later.'
    ]);
}
