<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainLogsRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'keyWord' => 'KeyWord',
        'groupId' => 'GroupId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'startDate' => 'StartDate',
        'endDate' => 'endDate',
        'type' => 'Type',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['KeyWord'] = $this->keyWord;
        $res['GroupId'] = $this->groupId;
        $res['PageNumber'] = $this->pageNumber;
        $res['PageSize'] = $this->pageSize;
        $res['StartDate'] = $this->startDate;
        $res['endDate'] = $this->endDate;
        $res['Type'] = $this->type;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDomainLogsRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['KeyWord'])){
            $model->keyWord = $map['KeyWord'];
        }
        if(isset($map['GroupId'])){
            $model->groupId = $map['GroupId'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['StartDate'])){
            $model->startDate = $map['StartDate'];
        }
        if(isset($map['endDate'])){
            $model->endDate = $map['endDate'];
        }
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        return $model;
    }
    /**
     * @description lang
     * @var string
     */
    public $lang;

    /**
     * @description keyword
     * @var string
     */
    public $keyWord;

    /**
     * @description groupId
     * @var string
     */
    public $groupId;

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
     * @description startDate
     * @var string
     */
    public $startDate;

    /**
     * @description endDate
     * @var string
     */
    public $endDate;

    /**
     * @description type
     * @var string
     */
    public $type;

}
