<?php
	function zoomify($Galleria, $estensione, $larghezza)
		{
	$filenames = leggiFile($Galleria, $estensione);
	foreach ($filenames as $fileCaricato)
		{
			 if ($fileCaricato != "." && $fileCaricato != "..") {
				//stampa html, modificare per personalizzare il template
				
				echo '<li class="polaroid"><a href="'.$Galleria.'/'.$fileCaricato.'" class="zoomBox"><img src="'.$Galleria.'/'.$fileCaricato.'" class="img-responsive" style="width:'.$larghezza.'px;"></a></li>'."\n";
				//Fine stampa Html
			}
		}
	}
	function leggiFile($urlGalleria, $filtro)
		{
			
			$percorso = '../';			
			$handle=opendir($urlGalleria);
			$files=array();			
			if ($filtro == "all")
				{
					while(false !== ($file = readdir($handle)))
						{
							$files[] = $file;
						}
					}
			if ($filtro != "all")
				{
					while(false !== ($file = readdir($handle)))
					{					
					$estensioneFile= substr(strrchr($file,'.'),1);
					$estensioneFile = strtolower($estensioneFile);
					//$system=explode(".",$file);
					if ($estensioneFile == $filtro)
						{
							$files[] = $file;
						}
					}
					closedir($handle);
				}
				return $files;
			}

?>