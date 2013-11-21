<?php
/*  ------------------------------------------------------------------------------------ --- -- -
	FVAL PHP Framework for Web Sites

	Copyright (c) 2007-2009 FVAL - Consultoria e Informática Ltda.
	Copyright (C) 2009 Fernando Val

	http://www.fval.com.br

	Developer team:
		Fernando Val  - fernando.val@gmail.com

	Framework version:
		1.0.0

	Script version:
		0.1.0

	This script:
		Script de logout da área de administração do CMS
	------------------------------------------------------------------------------------ --- -- - */

class Logout_Controller {
	function __construct() {
		if (!CMS::logged_in_user()) {
			URI::redirect('/'.URI::relative_path_page().'/login');
			return false;
		}

		if (CMS::logout_user()) {
			URI::redirect('/'.URI::relative_path_page().'/login');
			return true;
		}

		Errors::display_error(500, 'Can not logout');
	}
}
?>