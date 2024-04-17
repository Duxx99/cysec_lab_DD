<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if (isset($_FILES['uploaded_file'])) {
			$errors = array();
			$file_name = $_FILES['uploaded_file']['name'];
			$file_size = $_FILES['uploaded_file']['size'];
			$file_tmp = $_FILES['uploaded_file']['tmp_name'];
			$file_type = $_FILES['uploaded_file']['type'];
			$file_ext = strtolower(end(explode('.', $_FILES['uploaded_file']['name'])));

			$extensions = array("xml");

			if (in_array($file_ext, $extensions) === false) {
				$errors[] = "Extension not allowed, please choose an XML file.";
			}

			if (empty($errors) == true) {
				libxml_disable_entity_loader(false);
				$xmlfile = file_get_contents($file_tmp);
				$dom = new DOMDocument();
				$dom->loadXML($xmlfile, LIBXML_NOENT | LIBXML_DTDLOAD);
				$creds = simplexml_import_dom($dom);
				$user = $creds->user;
				$password = $creds->password;
			} else {
				print_r($errors);
			}
		}
	}
?>
