<?php
function slug($text){ 

  // replace non letter or digits by -
  $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

  // trim
  $text = trim($text, '-');

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // lowercase
  $text = strtolower($text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  if (empty($text))
  {
    return 'n-a';
  }

  return $text;
}

function redirect_to ($url) {
		//header("Location: {$url}");
		
		echo "<script>
					window.location='{$url}'
				</script>";	
	}
	
	
	function redirect($location=Null){
		if($location!=Null){
			echo "<script>
					window.location='{$location}'
				</script>";	
		}else{
			echo 'error location';
		}
		 
	}
	
	function getExtension($path) {
	$filebits = explode('.',$path);
	$r = array_pop($filebits);
	return $r;
    }
    function getMimeTypeFromExtenstion($ext) {
	
	$r = 'text/plain';
	switch (strtolower($ext)) {
		case 'css':
		case 'txt':
		case 'xml':
		case 'html':
		$r = 'text/' . strtolower($ext);
		break;
		
		case 'js':
		$r = 'application/x-javascript';
		break;
		
		case 'jpg':
		case 'jpeg':
		case 'png':
		case 'tif':
		case 'tiff':
		case 'gif':
		case 'JPG':
		case 'JPEG':
		case 'PNG':
		case 'GIF':
		//$r = 'image/' . strtolower($ext);
		$r = 'Image';
		break;
			
		// WEB FONTS
		case 'ttf':
		$r = 'application/x-font-ttf';
		break;
	
		case 'woff':
		//$r = 'application/x-font-woff';
		$r = 'Font';
		break;
	
		case 'eot':
		$r = 'application/vnd.ms-fontobject';
		break;		
	
	 }
	
	 return $r;
    }
?>