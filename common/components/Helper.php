<?php

/**
 * Description of sms
 * send sms related to task for given mobile number 
 */

namespace common\components;

use yii\base\Component;

class Helper extends Component {
    /*
     * calculate distance through latitude and longitude
     */

    public function findDistance($lat1, $lon1, $lat2, $lon2) {
        if ($lat1 == $lat2 && $lon1 == $lon2)
            return 0;
        $unit = 'K'; // miles please!
        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);


        if ($unit == "K") {
            return ($miles * 1.609344);
        } else if ($unit == "N") {
            return ($miles * 0.8684);
        } else {
            return $miles;
        }
    }

    public function dateTimeToLocal($date) {
        return date("d M Y H:i A", strtotime($date));
    }

    public function dateToLocal($date) {
        return date("d-m-Y", strtotime($date));
    }

}
?>
