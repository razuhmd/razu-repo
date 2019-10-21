<?php
/**
* @package janitor.itemtypes
* This file contains itemtype functionality
*/

class TypePartner extends Itemtype {

	/**
	* Init, set varnames, validation rules
	*/
	function __construct() {

		// construct ItemType before adding to model
		parent::__construct(get_class());


		// itemtype database
		$this->db = SITE_DB.".item_partner";


		$this->addToModel("name", array(
			"type" => "string",
			"label" => "Company Name:",
			"required" => true,
			"hint_message" => "Type string",
			"error_message" => "String must be string"
		));

		$this->addToModel("address", array(
			"type" => "text",
			"label" => "Address:",
			"required" => true,
			"hint_message" => "Type address",
			"error_message" => "Address must be proper text"
        ));
        
        $this->addToModel("email", array(
			"type" => "email",
			"label" => "Email:",
			"required" => true,
			"hint_message" => "Type email address",
			"error_message" => "Email must be a valid email address"
		));

		$this->addToModel("telephone", array(
			"type" => "string",
			"label" => "Telephone/Mobile:",
			"required" => true,
			"hint_message" => "Type your telephone or mobile number",
			"error_message" => "Telephone number must be a valid telephone or mobile number"
		));

		$this->addToModel("activity", array(
			"type" => "text",
			"label" => "Basic Activity:",
			"required" => true,
			"hint_message" => "Type the basic activity/industry of the company",
			"error_message" => "Activities must be valid industry in texts "
		));

		/*$this->addToModel("v_html", array(
			"type" => "html",
			"label" => "HTML",
			"allowed_tags" => "p,h1,h2,h3,h4,h5,h6,code,ul,ol,download,png,jpg,vimeo,youtube", //",mp4",
			"required" => true,
			"hint_message" => "Type html",
			"error_message" => "HTML must be HTML"
		));*/

	}

}

?>