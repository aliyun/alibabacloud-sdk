<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodUserDomainsRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'securityToken' => 'SecurityToken',
        'pageSize' => 'PageSize',
        'pageNumber' => 'PageNumber',
        'domainName' => 'DomainName',
        'domainStatus' => 'DomainStatus',
        'domainSearchType' => 'DomainSearchType',
        'cdnType' => 'CdnType',
        'checkDomainShow' => 'CheckDomainShow',
        'funcId' => 'FuncId',
        'funcFilter' => 'FuncFilter',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['SecurityToken'] = $this->securityToken;
        $res['PageSize'] = $this->pageSize;
        $res['PageNumber'] = $this->pageNumber;
        $res['DomainName'] = $this->domainName;
        $res['DomainStatus'] = $this->domainStatus;
        $res['DomainSearchType'] = $this->domainSearchType;
        $res['CdnType'] = $this->cdnType;
        $res['CheckDomainShow'] = $this->checkDomainShow;
        $res['FuncId'] = $this->funcId;
        $res['FuncFilter'] = $this->funcFilter;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeVodUserDomainsRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['SecurityToken'])){
            $model->securityToken = $map['SecurityToken'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['DomainStatus'])){
            $model->domainStatus = $map['DomainStatus'];
        }
        if(isset($map['DomainSearchType'])){
            $model->domainSearchType = $map['DomainSearchType'];
        }
        if(isset($map['CdnType'])){
            $model->cdnType = $map['CdnType'];
        }
        if(isset($map['CheckDomainShow'])){
            $model->checkDomainShow = $map['CheckDomainShow'];
        }
        if(isset($map['FuncId'])){
            $model->funcId = $map['FuncId'];
        }
        if(isset($map['FuncFilter'])){
            $model->funcFilter = $map['FuncFilter'];
        }
        return $model;
    }
    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description securityToken
     * @var string
     */
    public $securityToken;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description pageNumber
     * @var integer
     */
    public $pageNumber;

    /**
     * @description domainName
     * @var string
     */
    public $domainName;

    /**
     * @description domainStatus
     * @var string
     */
    public $domainStatus;

    /**
     * @description domainSearchType
     * @var string
     */
    public $domainSearchType;

    /**
     * @description webSiteType
     * @var string
     */
    public $cdnType;

    /**
     * @description checkDomainShow
     * @var bool
     */
    public $checkDomainShow;

    /**
     * @description funcId
     * @var string
     */
    public $funcId;

    /**
     * @description funcFilter
     * @var string
     */
    public $funcFilter;

}
