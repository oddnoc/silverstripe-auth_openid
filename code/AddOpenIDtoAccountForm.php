<?php

/**
 * @author Markus Lanthaler <markus@silverstripe.com>
 * @package OpenID
 */

/**
 * Add OpenID to account form
 *
 * @author Markus Lanthaler <markus@silverstripe.com>
 * @package OpenID
 */
class AddOpenIDtoAccountForm extends Form {

	/**
	 * Constructor
	 *
	 * @param Controller $controller The parent controller, necessary to
	 *                               create the appropriate form action tag.
	 * @param string $name The method on the controller that will return this
	 *                     form object.
	 * @param FieldSet|FormField $fields All of the fields in the form - a
	 *                                   {@link FieldSet} of {@link FormField}
	 *                                   objects.
	 * @param FieldSet|FormAction $actions All of the action buttons in the
	 *                                     form - a {@link FieldSet} of
	 */
	function __construct($controller, $name, $fields = null, $actions = null) {
		if(!$fields) {

			$fields = new FieldSet(
				new HiddenField("OpenID", null, $_REQUEST['OpenID'], $this),
				new TextField("Email", _t('Member.EMAIL'),
					Session::get('SessionForms.MemberLoginForm.Email'), null, $this),
				new EncryptField("Password", _t('Member.PASSWORD'), null, $this)
			);
		}
		if(!$actions) {
			$actions = new FieldSet(
				new FormAction("addopenid", _t('Member.BUTTONADDOPENIDTOACCOUNT',
																			 "Add my OpenID to this account"))
			);
		}

		parent::__construct($controller, $name, $fields, $actions);
	}


	/**
	 * Change the password
	 *
	 * @param array $data The user submitted data
	 */
	function addopenid(array $data) {
		if($member = MemberAuthenticator::authenticate($data, $this)) {
			$member->IdentityURL = $data['OpenID'];
			$member->write();

			Session::set("Security.Message.message",
									 _t('Member.OPENIDADDEDTOACCOUNT',
											"Your OpenID was added to your account, you can use it now to log in."));
			Session::set("Security.Message.type", "good");

			if(isset($_REQUEST['BackURL']) && ($backURL = $_REQUEST['BackURL'])) {
				Session::set('BackURL', $backURL);
			}

			Director::redirect(Director::absoluteURL(Security::Link("login")));

		} else {
			Director::redirectBack();
		}
	}

}


?>