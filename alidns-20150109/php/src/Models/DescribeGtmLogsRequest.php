<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeGtmLogsRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'instanceId' => 'InstanceId',
        'keyword' => 'Keyword',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'startTimestamp' => 'StartTimestamp',
        'endTimestamp' => 'EndTimestamp',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['InstanceId'] = $this->instanceId;
        $res['Keyword'] = $this->keyword;
        $res['PageNumber'] = $this->pageNumber;
        $res['PageSize'] = $this->pageSize;
        $res['StartTimestamp'] = $this->startTimestamp;
        $res['EndTimestamp'] = $this->endTimestamp;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeGtmLogsRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['InstanceId'])){
            $model->instanceId = $map['InstanceId'];
        }
        if(isset($map['Keyword'])){
            $model->keyword = $map['Keyword'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['StartTimestamp'])){
            $model->startTimestamp = $map['StartTimestamp'];
        }
        if(isset($map['EndTimestamp'])){
            $model->endTimestamp = $map['EndTimestamp'];
        }
        return $model;
    }
    /**
     * @description lang
     * @var string
     */
    public $lang;

    /**
     * @description instanceId
     * @var string
     */
    public $instanceId;

    /**
     * @description keyword
     * @var string
     */
    public $keyword;

    /**
     * @description pageNumber
     * @var integer
     */
    public $pageNumber;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description startTime
     * @var integer
     */
    public $startTimestamp;

    /**
     * @description endTime
     * @var integer
     */
    public $endTimestamp;

}
