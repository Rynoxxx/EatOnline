<?php

require 'phpmailer/class.phpmailer.php';
require 'phpmailer/class.smtp.php';

date_default_timezone_set('Etc/UTC');

/**
 * @access public
 * @author Alessandro Verzicco
 * @package System
 */
class UEmail {

    private $_mail;

    public function __construct() {

        global $config;

        $this->_mail = new PHPMailer();
        $this->_mail->isSMTP(); // Setta PHPMailer per usare SMTP
        //$this->_mail->Host = $config['smtp']['host']; // Specifica l'host del server SMTP

        $this->_mail->Host = gethostbyname($config['smtp']['host']);
        $this->_mail->Port = $config['smtp']['port'];  // Specifica la porta del server SMTP
        $this->_mail->SMTPSecure = 'tls';
        $this->_mail->SMTPDebug = '2';
        
        /*
         * Queste due righe le ho aggiunte vedendo su:
         * https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting
         * inizialmente non le avevo messe
         *
        
        $this->_mail->SMTPAutoTLS = 'false';
        $this->_mail->SMTPOptions = array(
            'ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true)
        );
        
        */
          
         
        $this->_mail->SMTPAuth = $config['smtp']['smtpauth']; // Abilita/disabilita l'autenticazione SMTP
        $this->_mail->Username = $config['smtp']['username']; // SMTP username
        $this->_mail->Password = $config['smtp']['password']; // SMTP password
        $this->_mail->Charset = 'utf-8';
    }

    public function invia_email($email_destinatario, $nome_destinatario, $oggetto, $corpo_email, $corpo_email_testo_semplice = '', $html = false) {
        $this->_mail->AddAddress($email_destinatario, $nome_destinatario);
        $this->_mail->SetFrom('eatonline@gmail.com', 'EatOnline');
        $this->_mail->WordWrap = 50; // Setta il numero di parole oltre il quale torna a capo automaticamente
        $this->_mail->IsHTML($html); // Setta l'email in formato html
        $this->_mail->Subject = $oggetto;
        $this->_mail->Body = $corpo_email;
        $this->_mail->AltBody = $corpo_email_testo_semplice;

        if (!$this->_mail->Send()) {
            debug("L'email non pu&ograve; essere inviata");
            debug("Errore: " . $this->_mail->ErrorInfo);
            return false;
        }
        debug("L'email &egrave; stata inviata");
        return true;
    }

}

?>