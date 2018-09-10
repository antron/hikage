<?php

namespace humhub\modules\hikage\libs;

use humhub\modules\file\libs\ImageConverter;

class Reduce {

    public static function Resize($uploadedFile) {

	    $filepath = $uploadedFile->tempName;

	    $options = [
	        'width' => 400,
	        'height' => 400,
	        'mode' => 'max',
	    ];

	    ImageConverter::Resize($filepath, $filepath, $options);

	    $uploadedFile->size = filesize($filepath);

	    return $uploadedFile;
	}

}