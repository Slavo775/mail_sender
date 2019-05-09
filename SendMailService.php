<?php
/**
 * Created by PhpStorm.
 * User: slavomir.sedlak
 * Date: 2019-05-06
 * Time: 16:15
 */

namespace Mail_sender;


use Mail_sender\Exceptions\MailIsNotValidException;

class SendMailService
{
    /**
     * @param string $mail
     * @param string $head
     * @param string $mailContent
     * @throws MailIsNotValidException
     * @return string
     */
    public function send(string $mail, string $head, string $mailContent): string
    {
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            throw new MailIsNotValidException('Mail is not in valid format');
        }
        //mail($mail, $head,$mailContent);
        return true;
    }
}