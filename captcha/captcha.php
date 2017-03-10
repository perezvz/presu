<?php
session_start( );
// Set to whatever size you want, or randomize for more security
$captchaTextSize = 5;
do {
	$md5Hash = md5( microtime( ) * mktime( ) ); // Generate a random string and encrypt it with md5
    preg_replace( '([maestro])', "", $md5Hash ); // Remove any hard to distinguish characters from our hash
} while( strlen( $md5Hash ) < $captchaTextSize ); // we need only 7 characters for this captcha
	$key = substr( $md5Hash, 0, $captchaTextSize ); // Add the newly generated key to the session. Note, it is encrypted.
	$_SESSION['key'] = md5( $key ); // grab the base image from our pre-generated captcha image background
	$captchaImage = imagecreatefrompng( "images/ima2.png" );

	/* Select a color for the text. Since our background is an aqua/greenish color, we choose a text color that will stand out, but not completely. A slightly darker green in our case. */ 
	$textColor = imagecolorallocate( $captchaImage, 61, 138, 27 );

	/* Select a color for the random lines we want to draw on top of the image, in this case, we are going to use another shade of green/blue */
	$lineColor = imagecolorallocate( $captchaImage, 5, 73, 113 );
	$imageInfo = getimagesize( "images/ima2.png" ); // get the size parameters of our image
	$linesToDraw = 14; // decide how many lines you want to draw

	// Add the lines randomly to the image
	for( $i = 0; $i < $linesToDraw; $i++ )  {
	    $xStart = mt_rand( 0, $imageInfo[ 0 ] ); // generate random start spots and end spots
    	$xEnd = mt_rand( 0, $imageInfo[ 0 ] ); // Draw the line to the captcha
    	imageline( $captchaImage, $xStart, 0, $xEnd, $imageInfo[1], $lineColor );
    }

	/* Draw our randomly generated string to our captcha using the given true type font. In this case, I am using BitStream Vera Sans Bold, but you could modify it to any other font you wanted to use. */
	//imagettftext( $captchaImage, 35, -3, 40, 40, $textColor, "fonts/VeraBd.ttf", $key );
	imagettftext( $captchaImage, 35, -3, 40, 40, $textColor, "fonts/Raleway-BoldItalic.ttf", $key );
	header ( "Content-type: image/png" ); // Output the image to the browser, header settings prevent caching
	header("Cache-Control: no-cache, must-revalidate");
	header("Expires: Fri, 19 Jan 1994 05:00:00 GMT");
	header("Pragma: no-cache");
	imagepng( $captchaImage );

?>