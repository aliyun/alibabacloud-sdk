<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainTrafficDataResponse\trafficDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model {
    protected $_name = [
        'timeStamp' => 'TimeStamp',
        'value' => 'Value',
        'domesticValue' => 'DomesticValue',
        'overseasValue' => 'OverseasValue',
        'httpsValue' => 'HttpsValue',
        'httpsDomesticValue' => 'HttpsDomesticValue',
        'httpsOverseasValue' => 'HttpsOverseasValue',
    ];
    public function validate() {
        Model::validateRequired('timeStamp', $this->timeStamp, true);
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('domesticValue', $this->domesticValue, true);
        Model::validateRequired('overseasValue', $this->overseasValue, true);
        Model::validateRequired('httpsValue', $this->httpsValue, true);
        Model::validateRequired('httpsDomesticValue', $this->httpsDomesticValue, true);
        Model::validateRequired('httpsOverseasValue', $this->httpsOverseasValue, true);
    }
    public function toMap() {
        $res = [];
        $res['TimeStamp'] = $this->timeStamp;
        $res['Value'] = $this->value;
        $res['DomesticValue'] = $this->domesticValue;
        $res['OverseasValue'] = $this->overseasValue;
        $res['HttpsValue'] = $this->httpsValue;
        $res['HttpsDomesticValue'] = $this->httpsDomesticValue;
        $res['HttpsOverseasValue'] = $this->httpsOverseasValue;
        return $res;
    }
    /**
     * @param array $map
     * @return dataModule
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['TimeStamp'])){
            $model->timeStamp = $map['TimeStamp'];
        }
        if(isset($map['Value'])){
            $model->value = $map['Value'];
        }
        if(isset($map['DomesticValue'])){
            $model->domesticValue = $map['DomesticValue'];
        }
        if(isset($map['OverseasValue'])){
            $model->overseasValue = $map['OverseasValue'];
        }
        if(isset($map['HttpsValue'])){
            $model->httpsValue = $map['HttpsValue'];
        }
        if(isset($map['HttpsDomesticValue'])){
            $model->httpsDomesticValue = $map['HttpsDomesticValue'];
        }
        if(isset($map['HttpsOverseasValue'])){
            $model->httpsOverseasValue = $map['HttpsOverseasValue'];
        }
        return $model;
    }
    /**
     * @description time_stp
     * @var string
     */
    public $timeStamp;

    /**
     * @description l1_vod_all_all_all_traf
     * @var string
     */
    public $value;

    /**
     * @description l1_vod_all_inner_all_traf
     * @var string
     */
    public $domesticValue;

    /**
     * @description l1_vod_all_out_all_traf
     * @var string
     */
    public $overseasValue;

    /**
     * @description l1_vod_all_all_https_traf
     * @var string
     */
    public $httpsValue;

    /**
     * @description l1_vod_all_inner_https_traf
     * @var string
     */
    public $httpsDomesticValue;

    /**
     * @description l1_vod_all_out_https_traf
     * @var string
     */
    public $httpsOverseasValue;

}
