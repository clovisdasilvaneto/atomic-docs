<?php

/**
 * Created by PhpStorm.
 * User: michael
 * Date: 6/17/16
 * Time: 2:07 PM
 */
require_once 'File.php';

class FileCategory extends File {

	public function __construct() {
		parent::__construct();
	}

	/**
	 * Create a PHP component file and add starter content
	 * @param        $filename
	 * @param        $directory
	 * @param string $content
	 */
	public function create($category) {
		$fullPath = $this->config['componentDirectory'] . '/' . $category;

		$create = parent::create($fullPath);

		return $create;
	}

	public function mkdir($category) {
		$fullPath = $this->config['componentDirectory'] . '/' . $category;

		$create = parent::mkdir($fullPath);

		if( !$create['status'] ){
			$create['message'] = 'Failed to create directory';
		}

		return $create;
	}


	public function open($component, $category){
		$path = $this->pathPhp($component, $category);
		return parent::open($path);
	}

	public function remove($filename, $directory){
		$fullPath = $this->config['preCssDir'] . '/' . $directory;
		$filename .= '.'. $this->config['preCssExt'];

		parent::remove($fullPath.'/'.$filename);
	}

}