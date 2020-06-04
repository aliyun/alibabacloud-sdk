<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodDomainTrafficDataRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'domainName' => 'DomainName',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
        'interval' => 'Interval',
        'ispNameEn' => 'IspNameEn',
        'locationNameEn' => 'LocationNameEn',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['DomainName'] = $this->domainName;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        $res['Interval'] = $this->interval;
        $res['IspNameEn'] = $this->ispNameEn;
        $res['LocationNameEn'] = $this->locationNameEn;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeVodDomainTrafficDataRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['EndTime'])){
            $model->endTime = $map['EndTime'];
        }
        if(isset($map['Interval'])){
            $model->interval = $map['Interval'];
        }
        if(isset($map['IspNameEn'])){
            $model->ispNameEn = $map['IspNameEn'];
        }
        if(isset($map['LocationNameEn'])){
            $model->locationNameEn = $map['LocationNameEn'];
        }
        return $model;
    }
    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description domainName
     * @var string
     */
    public $domainName;

    /**
     * @description startTime
     * @var string
     */
    public $startTime;

    /**
     * @description endTime
     * @var string
     */
    public $endTime;

    /**
     * @description interval
     * @var string
     */
    public $interval;

    /**
     * @description ispName
     * @var string
     */
    public $ispNameEn;

    /**
     * @description locName
     * @var string
     */
    public $locationNameEn;

}
