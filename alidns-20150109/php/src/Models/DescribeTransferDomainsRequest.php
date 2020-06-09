<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeTransferDomainsRequest extends Model {
    protected $_name = [
        'lang' => 'Lang',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'transferType' => 'TransferType',
        'domainName' => 'DomainName',
        'fromUserId' => 'FromUserId',
        'targetUserId' => 'TargetUserId',
    ];
    public function validate() {
        Model::validateRequired('transferType', $this->transferType, true);
    }
    public function toMap() {
        $res = [];
        $res['Lang'] = $this->lang;
        $res['PageNumber'] = $this->pageNumber;
        $res['PageSize'] = $this->pageSize;
        $res['TransferType'] = $this->transferType;
        $res['DomainName'] = $this->domainName;
        $res['FromUserId'] = $this->fromUserId;
        $res['TargetUserId'] = $this->targetUserId;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeTransferDomainsRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['TransferType'])){
            $model->transferType = $map['TransferType'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['FromUserId'])){
            $model->fromUserId = $map['FromUserId'];
        }
        if(isset($map['TargetUserId'])){
            $model->targetUserId = $map['TargetUserId'];
        }
        return $model;
    }
    /**
     * @description lang
     * @var string
     */
    public $lang;

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
     * @description transferType
     * @var string
     */
    public $transferType;

    /**
     * @description domainName
     * @var string
     */
    public $domainName;

    /**
     * @description fromUserId
     * @var integer
     */
    public $fromUserId;

    /**
     * @description targetUserId
     * @var integer
     */
    public $targetUserId;

}
