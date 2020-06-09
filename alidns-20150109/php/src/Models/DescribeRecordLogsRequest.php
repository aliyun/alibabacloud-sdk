<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeRecordLogsRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'lang' => 'Lang',
        'userClientIp' => 'UserClientIp',
        'domainName' => 'DomainName',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'keyWord' => 'KeyWord',
        'startDate' => 'StartDate',
        'endDate' => 'endDate',
    ];
    public function validate() {
        Model::validateRequired('domainName', $this->domainName, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['Lang'] = $this->lang;
        $res['UserClientIp'] = $this->userClientIp;
        $res['DomainName'] = $this->domainName;
        $res['PageNumber'] = $this->pageNumber;
        $res['PageSize'] = $this->pageSize;
        $res['KeyWord'] = $this->keyWord;
        $res['StartDate'] = $this->startDate;
        $res['endDate'] = $this->endDate;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeRecordLogsRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['UserClientIp'])){
            $model->userClientIp = $map['UserClientIp'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['KeyWord'])){
            $model->keyWord = $map['KeyWord'];
        }
        if(isset($map['StartDate'])){
            $model->startDate = $map['StartDate'];
        }
        if(isset($map['endDate'])){
            $model->endDate = $map['endDate'];
        }
        return $model;
    }
    /**
     * @description accessKeyId
     * @var string
     */
    public $accessKeyId;

    /**
     * @description lang
     * @var string
     */
    public $lang;

    /**
     * @description userClientIp
     * @var string
     */
    public $userClientIp;

    /**
     * @description domainName
     * @var string
     */
    public $domainName;

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
     * @description keyword
     * @var string
     */
    public $keyWord;

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

}
