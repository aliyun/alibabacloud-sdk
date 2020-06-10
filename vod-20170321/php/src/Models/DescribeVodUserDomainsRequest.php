<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodUserDomainsRequest extends Model
{
    /**
     * @description ownerId
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description securityToken
     *
     * @var string
     */
    public $securityToken;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description pageNumber
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description domainName
     *
     * @var string
     */
    public $domainName;

    /**
     * @description domainStatus
     *
     * @var string
     */
    public $domainStatus;

    /**
     * @description domainSearchType
     *
     * @var string
     */
    public $domainSearchType;

    /**
     * @description webSiteType
     *
     * @var string
     */
    public $cdnType;

    /**
     * @description checkDomainShow
     *
     * @var bool
     */
    public $checkDomainShow;

    /**
     * @description funcId
     *
     * @var string
     */
    public $funcId;

    /**
     * @description funcFilter
     *
     * @var string
     */
    public $funcFilter;
    protected $_name = [
        'ownerId'          => 'OwnerId',
        'securityToken'    => 'SecurityToken',
        'pageSize'         => 'PageSize',
        'pageNumber'       => 'PageNumber',
        'domainName'       => 'DomainName',
        'domainStatus'     => 'DomainStatus',
        'domainSearchType' => 'DomainSearchType',
        'cdnType'          => 'CdnType',
        'checkDomainShow'  => 'CheckDomainShow',
        'funcId'           => 'FuncId',
        'funcFilter'       => 'FuncFilter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainStatus) {
            $res['DomainStatus'] = $this->domainStatus;
        }
        if (null !== $this->domainSearchType) {
            $res['DomainSearchType'] = $this->domainSearchType;
        }
        if (null !== $this->cdnType) {
            $res['CdnType'] = $this->cdnType;
        }
        if (null !== $this->checkDomainShow) {
            $res['CheckDomainShow'] = $this->checkDomainShow;
        }
        if (null !== $this->funcId) {
            $res['FuncId'] = $this->funcId;
        }
        if (null !== $this->funcFilter) {
            $res['FuncFilter'] = $this->funcFilter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodUserDomainsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainStatus'])) {
            $model->domainStatus = $map['DomainStatus'];
        }
        if (isset($map['DomainSearchType'])) {
            $model->domainSearchType = $map['DomainSearchType'];
        }
        if (isset($map['CdnType'])) {
            $model->cdnType = $map['CdnType'];
        }
        if (isset($map['CheckDomainShow'])) {
            $model->checkDomainShow = $map['CheckDomainShow'];
        }
        if (isset($map['FuncId'])) {
            $model->funcId = $map['FuncId'];
        }
        if (isset($map['FuncFilter'])) {
            $model->funcFilter = $map['FuncFilter'];
        }

        return $model;
    }
}
