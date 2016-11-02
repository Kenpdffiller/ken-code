<?php
$json =<<<CONFIG
  IMAGE_SIGNATURE_BACK: "Back",
  IMAGE_SIGNATURE_UPLOADER_BTN: "Browse Your Images",
  IMAGE_SIGNATURE_TITLE_UPLOADER: "Drag and Drop Your Image Here",
  IMAGE_SIGNATURE_DESC_UPLOADER: "Use the button below to upload your signature to the Signature Wizard. PDFfiller supports <b>JPG</b>, <b>GIF</b> and <b>PNG</b> formats. Just so you know, Max file size: 15 Mb.",
  IMAGE_SIGNATURE_BTN_NEXT: "Next",
  IMAGE_SIGNATURE_BTN_RETAKE_SHAPSHOT: "Retake",
  IMAGE_SIGNATURE_BTN_TAKE_SNAPSHOT: "Take",
  IMAGE_SIGNATURE_INITIAL_IMAGE_HEADER_TITLE: "Your Saved Images",
  IMAGE_SIGNATURE_UPLOADER_HEADER_TITLE: "Upload Your Image",
  IMAGE_SIGNATURE_CAPTURE_HEADER_TITLE: "Capture Your Image",
  IMAGE_SIGNATURE_CAPTURE_TEXT: "The program identifies your computer’s camera, and you can see a live preview of the image that you can use, and decide when to capture an image.",
  IMAGE_SIGNATURE_UPLOADER_TEXT: "Uploading an Image",
  IMAGE_SIGNATURE_BIG_FOOTER_BTN_UPLOADER_TITLE: "Upload Your Image",
  IMAGE_SIGNATURE_BIG_FOOTER_BTN_UPLOADER_DESC: "Use this option to upload an image from your computer.",
  IMAGE_SIGNATURE_BIG_FOOTER_BTN_CAPTURE_TITLE: "Capture Your Image",
  IMAGE_SIGNATURE_BIG_FOOTER_BTN_CAPTURE_DESC: "Easily capture a high quality image using your webcam.",
  IMAGE_SIGNATURE_INITIAL_TITLE: "You do not have any saved Images",
  IMAGE_SIGNATURE_INITIAL_TEXT: "To add your image, please use the options below",
  IMAGE_SIGNATURE_BTN_SAVE: "Save",
  IMAGE_SIGNATURE_BTN_DONE: "Done",
  IMAGE_SIGNATURE_BTN_OK: "OK",
  IMAGE_SIGNATURE_BTN_SEND: "Send",
  IMAGE_SIGNATURE_BTN_CLEAN: "Clean",
  IMAGE_SIGNATURE_BTN_CANCEL: "Cancel",
  IMAGE_SIGNATURE_BTN_RESEND: "Resend",
  IMAGE_SIGNATURE_BTN_ADD_ONE_MORE: "Add one more",
  IMAGE_SIGNATURE_BTN_SAVE_AND_USE: "Save and Use",
  IMAGE_SIGNATURE_BTN_ADD_NEW_SING: "Add New Signature",
  IMAGE_SIGNATURE_TYPE_PREVIEW_TITLE: "type",
  IMAGE_SIGNATURE_TYPE_PREVIEW_TEXT: "<b>Type</b> your full name below, and click <b>Sign</b> to proceed. Your signature will appear in a handwritten font style and ready for use.",
  IMAGE_SIGNATURE_TYPE_LIST_DRAW_TITLE: "<b>Draw</b>",
  IMAGE_SIGNATURE_TYPE_LIST_DRAW_DESCRIPTION: "Easily draw your signature using the mouse or trackpad",
  IMAGE_SIGNATURE_TYPE_LIST_QR_TITLE: "<b>Scan a QR Code</b>",
  IMAGE_SIGNATURE_TYPE_LIST_QR_DESCRIPTION: "Scan a QR Code to draw your signature on your mobile device.",
  IMAGE_SIGNATURE_TYPE_LIST_SMS_TITLE: "<b>Use Mobile via SMS</b>",
  IMAGE_SIGNATURE_TYPE_LIST_SMS_DESCRIPTION: "Get a link via SMS and easily draw a signature right on your mobile device.",
  IMAGE_SIGNATURE_TYPE_LIST_EMAIL_TITLE: "<b>Use Mobile via Email</b>",
  IMAGE_SIGNATURE_TYPE_LIST_EMAIL_DESCRIPTION: "Get a link via Email and easily draw a signature right on your mobile device.",
  IMAGE_SIGNATURE_TYPE_LIST_UPLOAD_TITLE: "<b>Upload</b>",
  IMAGE_SIGNATURE_TYPE_LIST_UPLOAD_DESCRIPTION: "Upload the image of your signature from a computer.",
  IMAGE_SIGNATURE_TYPE_LIST_CAMERA_TITLE: "<b>Capture</b>",
  IMAGE_SIGNATURE_TYPE_LIST_CAMERA_DESCRIPTION: "Allow the access to your camera and take a photo of your signature.",
  IMAGE_SIGNATURE_INITIAL_SIGNATURE_HEADER_TITLE: "Signature Wizard",
  IMAGE_SIGNATURE_TYPE_BTN_SELECT_STYLE: "Select a Style",
  IMAGE_SIGNATURE_GALLERY_HEADER_TITLE: "Signature Wizard",
  IMAGE_SIGNATURE_QR_HEADER_TITLE: "Scan a QR Code <span>via mobile</span>",
  IMAGE_SIGNATURE_EMAIL_HEADER_TITLE: "Use Mobile via Email",
  IMAGE_SIGNATURE_SMS_HEADER_TITLE: "Use Mobile via SMS",
  IMAGE_SIGNATURE_DRAW_HEADER_TITLE: "Draw Your Signature",
  IMAGE_SIGNATURE_QR_CONTENT_TEXT: "Scanning this QR Code will open a new screen on your mobile device where you can easily draw your signature.",
  IMAGE_SIGNATURE_CONTENT_TITLE_LIST: "USAGE:",
  IMAGE_SIGNATURE_QR_CONTENT_LIST_ONE: "Scan a QR Code.",
  IMAGE_SIGNATURE_QR_CONTENT_LIST_TWO: "Draw the signature or type your initials from any mobile device.",
  IMAGE_SIGNATURE_QR_CONTENT_LIST_THREE: "Click Done to save your signature.",
  IMAGE_SIGNATURE_QR_CONTENT_LIST_FOUR: "Find your signature in the Signature Wizard.",
  IMAGE_SIGNATURE_EMAIL_CONTENT_TEXT: "Using Mobile Via Email allows you to get a link via Email on your mobile device and easily draw your signature right there.",
  IMAGE_SIGNATURE_EMAIL_CONTENT_LIST_ONE: "Enter your email address.",
  IMAGE_SIGNATURE_EMAIL_CONTENT_LIST_TWO: "Find an email from PDFfiller on your mobile device.",
  IMAGE_SIGNATURE_EMAIL_CONTENT_LIST_THREE: "Draw the signature or type your initials from any mobile device.",
  IMAGE_SIGNATURE_EMAIL_CONTENT_LIST_FOUR: "Find your signature in the Signature Wizard.",
  IMAGE_SIGNATURE_SMS_CONTENT_TEXT: "Using Mobile Via SMS allows you to get a link via SMS and easily draw a signature right on your mobile device.",
  IMAGE_SIGNATURE_SMS_CONTENT_LIST_ONE: "Enter your phone number.",
  IMAGE_SIGNATURE_SMS_CONTENT_LIST_TWO: "Find a text message from PDFfiller on your mobile device.",
  IMAGE_SIGNATURE_SMS_CONTENT_LIST_THREE: "Draw the signature or type your initials from any mobile device.",
  IMAGE_SIGNATURE_SMS_CONTENT_LIST_FOUR: "Find your signature in the Signature Wizard.",
  IMAGE_SIGNATURE_ROTATE_PHONE: "Please Rotate Your Phone",
  IMAGE_SIGNATURE_WEBCAM_TEXT: "Sign the paper and show to the camera, so your signature fits inside the white box and click Take. Your signature will appear in the Signature Wizard and ready for use.",
  IMAGE_SIGNATURE_MOBILE_DRAW_WELCOME_CONTENT_TITLE: "Welcome to PDFfiller Mobile Signature.",
  IMAGE_SIGNATURE_MOBILE_DRAW_WELCOME_CONTENT_TEXT: "Sign the screen with your finger on the next page, and click Done to save your signature to the Signature Wizard.",
  IMAGE_SIGNATURE_LOADER_SIGN: "Awaiting Signature...",
  IMAGE_SIGNATURE_MOBILE_DRAW_PHONE_PLACEHOLDER: "Phone number",
  IMAGE_SIGNATURE_MOBILE_DRAW_EMAIL_PLACEHOLDER: "Email",
  IMAGE_SIGNATURE_CONGRATULATIONS_TITLE: "Congratulations!",
  IMAGE_SIGNATURE_CONGRATULATIONS_DESCRIPTION: "Your signature has been successfully saved to your account.",
  IMAGE_SIGNATURE_DRAW_CONTENT_TEXT: "Draw your signature below, use the toolbar to make any desired changes, then click Save and Use to continue.",
CONFIG;
$arr = explode("\",\n", $json);
$consts = [];
foreach ( $arr as $v ) {
  $row = explode(': "', $v);
  if ( !empty($v) ) {
    $consts[] = ['uid' => trim($row[0]), 'text' => trim($row[1])];
  }
}
Header("Content-type: text/plain;charset=utf8");
$res = var_export($consts,true );
$res = preg_replace("/[0-9]+\s=>\s\n/ims", "", $res);
$res = preg_replace("/array\s\(/ims", "[", $res);
$res = preg_replace("/\)\,/ims", "],", $res);
$res = preg_replace("/\)$/ims", "];", $res);
echo  "\$migrationsConstants = " . $res;
