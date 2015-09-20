<?php

/**
 * Description of sms
 * send sms related to task for given mobile number 
 */

namespace app\components;

use Yii;
use yii\base\Component;

class SMS extends Component {

    private $username = 'shashank';
    private $password = 'Shashank3699';
    private $mask = 'SHASHA';

    public function sendAlert($allMspPhones, $allMspEmails, $msgForSms, $msgForPushNotification, $gcm_reg_ids=array()) {
        $phones = implode(',', $allMspPhones);
//        $emails = implode(',', $allMspEmails);
        
        $this->sendEmails($allMspEmails, $msgForPushNotification);
        
        $this->sendSms($phones, $msgForSms);
        
        if(count($gcm_reg_ids)>0)
        {     
            $this->sendPushNotification($gcm_reg_ids, $msgForPushNotification);
        }
    }
     public  function sendEmails($emails, $msg) {
        Yii::$app->mailer->compose('requestNotifiaction', ['msg' => $msg])
                ->setFrom(Yii::$app->params['fromEmail'])
                ->setTo($emails)
                ->setReplyTo('do-not-reply@test.com')
                ->setSubject(Yii::$app->name . ' request notification')
                ->send();
    }

    public function sendSms($allPhones, $msgForSms) {
        $message = urlencode($msgForSms);
        $url = "http://www.smsgatewaycenter.com/library/send_sms_2.php?UserName=".$this->username."&Password=".$this->password."&Type=Bulk&To=$allPhones&Mask=".$this->mask."&Message=$message";
        // create curl resource 
        $ch = curl_init();

        // set url 
        curl_setopt($ch, CURLOPT_URL, $url);

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string 
        $output = curl_exec($ch);
        // print_r($output);die;
        // log to track
        file_put_contents(Yii::$app->basePath.'/smsLog.txt',date('d-m-Y H:i:s').'== for mobiles: '.$allPhones.' =='.$output. "\n", FILE_APPEND);
        // close curl resource to free up system resources 
        curl_close($ch);
    }

    public function send($mobile, $msg) {
        $message = urlencode($msg);
        $url = "http://www.smsgatewaycenter.com/library/send_sms_2.php?UserName=".$this->username."&Password=".$this->password."&Type=Individual&To=$mobile&Mask=".$this->mask."&Message=$message";
        // create curl resource 
        $ch = curl_init();

        // set url 
        curl_setopt($ch, CURLOPT_URL, $url);

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        // $output contains the output string 
        $output = curl_exec($ch);
        // log to track
        file_put_contents(Yii::$app->basePath.'/smsLog.txt',date('d-m-Y H:i:s').'== for mobile: '.$mobile.' =='.$output. "\n", FILE_APPEND);
        // close curl resource to free up system resources 
        curl_close($ch);
    }

    /**
     * Sending Push Notification
     */
    public function sendPushNotification($gcm_reg_ids, $msgForPushNotification) {
        // Set POST variables
        $url = 'https://android.googleapis.com/gcm/send';

        $fields = array(
            'registration_ids' => $gcm_reg_ids,
//            'time_to_live' => \app\models\Settings::getRequestExpiredTime(),
            'data' => array(
                "message" => $msgForPushNotification,
                'title' => Yii::$app->name,
                'soundname' => 'beep.wav',
                'time' => date('h:i A'),
                'date' => date('D, dM Y'),
                'page' => 'notification',
            ),
        );

        $headers = array(
            'Authorization: key=' . Yii::$app->params['GOOGLE_API_KEY'],
            'Content-Type: application/json'
        );
        // Open connection
        $ch = curl_init();

        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

        // Execute post
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }

        // Close connection
        curl_close($ch);
        // echo $result;
    }

}

?>
