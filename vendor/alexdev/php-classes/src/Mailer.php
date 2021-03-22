<?php 

namespace Alex;

use Rain\Tpl;
use Phpmailer\PHPMmailer;

	class Mailer {

		const USERNAME = "alex.rcp.dev@gmail.com";
		const PASSWORD = "*****************";
		const NAME_FROM = "Alexandre Desenvolvimentos";

		private $mail;

		public function __construct($toAddress, $toName, $subject, $tplName, $data = array())
		{

			$config = array(
				"tpl_dir"       => $_SERVER["DOCUMENT_ROOT"]."/views/email",
				"cache_dir"     => $_SERVER["DOCUMENT_ROOT"]."/views-cache/",
				"debug"         => false // set to false to improve the speed
			);

			Tpl::configure( $config );

			$tpl = new Tpl;

			foreach ($data as $key => $value) {
				$tpl->assign($key, $value);
			}

			$html = $tpl->draw($tplName, true);

			//Create a new PHPMailer instance
			$this->mail = new PHPMailer();

			//Tell PHPMailer to use SMTP
			$this->mail->isSMTP();

			$this->mail->SMTPDebug = SMTP::DEBUG_OFF;

			//Set the hostname of the mail server
			$this->mail->Host = 'smtp.gmail.com';

			$this->mail->Port = 587;

			//Set the encryption mechanism to use - STARTTLS or SMTPS
			$this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

			//Whether to use SMTP authentication
			$this->mail->SMTPAuth = true;

			//Username to use for SMTP authentication - use full email address for gmail
			$this->mail->Username = Mailer::USERNAME;

			//Password to use for SMTP authentication
			$this->mail->Password = Mailer::PASSWORD;

			//Set who the message is to be sent from
			$this->mail->setFrom(Mailer::USERNAME, Mailer::NAME_FROM);

			$this->mail->addAddress($toAddress, $toName);

			//Set the subject line
			$this->mail->Subject = $subject;

			$this->mail->msgHTML($html);

			//Replace the plain text body with one created manually
			$this->mail->AltBody = 'This is a plain-text message body';
			
		}
		public function send()
		{

			return $this->mail->send();
		}
	}
?>