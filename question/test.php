<?php 
$_POST['fbid'] = '1290830540945468';
$dest = imagecreatefromjpeg('back1.jpg');
		$src = imagecreatefromjpeg('http://graph.facebook.com/'. $_POST['fbid'] .'/picture?type=large');
		
		imagealphablending($dest, false);
		imagesavealpha($dest, true);

		imagecopymerge($dest, $src, 50, 80, 0, 0, 528, 275, 100); //have to play with these numbers for it to work for you, etc.

		  //Set the Content Type
		//header('Content-type: image/jpeg');
		imagejpeg($dest, 'userimage/'. $_POST['fbid'].'.jpg', 100);

		imagedestroy($dest);
		imagedestroy($src);

		$dest = imagecreatefromjpeg('userimage/'. $_POST['fbid'].'.jpg');
		$src = imagecreatefrompng('temp1.png');

		imagealphablending($dest, true);
		imagesavealpha($dest, true);

		imagecopy($dest, $src, 0, 0, 0, 0,528, 275); //have to play with these numbers for it to work for you, etc.
		imagejpeg($dest, 'userimage/'. $_POST['fbid'].'.jpg', 100);
		imagedestroy($dest);
		imagedestroy($src);

		  header('Content-type: image/jpeg');

		  // Create Image From Existing File
		  $jpg_image = imagecreatefromjpeg('userimage/'. $_POST['fbid'].'.jpg');

		  // Allocate A Color For The Text
		  $white = imagecolorallocate($jpg_image, 206, 8, 155);

		  // Set Path to Font File
		  $font_path = 'fonts/BebasNeueRegular.ttf';

		  // Set Text to Be Printed On Image
		  $text = '66';

		  // Print Text On Image
		  imagettftext($jpg_image, 55, 0, 370, 150, $white, $font_path, $text);

		  // Send Image to Browser
		  imagejpeg($jpg_image);

		  // Clear Memory
		  imagedestroy($jpg_image);
		  
		  $shareImg = 'http://mq.cityofmusic.in/question/userimage/'. $_POST['fbid'].'.jpg';