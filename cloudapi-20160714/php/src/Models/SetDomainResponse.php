<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class SetDomainResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description data.domainName
     *
     * @var string
     */
    public $domainName;

    /**
     * @description data.subDomain
     *
     * @var string
     */
    public $subDomain;

    /**
     * @description data.bindStatus
     *
     * @var string
     */
    public $domainBindingStatus;

    /**
     * @description data.domainLegalStatus
     *
     * @var string
     */
    public $domainLegalStatus;

    /**
     * @description data.domainWebSocketStatus
     *
     * @var string
     */
    public $domainWebSocketStatus;

    /**
     * @description data.remark
     *
     * @var string
     */
    public $domainRemark;
    protected $_name = [
        'requestId'             => 'RequestId',
        'groupId'               => 'GroupId',
        'domainName'            => 'DomainName',
        'subDomain'             => 'SubDomain',
        'domainBindingStatus'   => 'DomainBindingStatus',
        'domainLegalStatus'     => 'DomainLegalStatus',
        'domainWebSocketStatus' => 'DomainWebSocketStatus',
        'domainRemark'          => 'DomainRemark',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('subDomain', $this->subDomain, true);
        Model::validateRequired('domainBindingStatus', $this->domainBindingStatus, true);
        Model::validateRequired('domainLegalStatus', $this->domainLegalStatus, true);
        Model::validateRequired('domainWebSocketStatus', $this->domainWebSocketStatus, true);
        Model::validateRequired('domainRemark', $this->domainRemark, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }
        if (null !== $this->domainBindingStatus) {
            $res['DomainBindingStatus'] = $this->domainBindingStatus;
        }
        if (null !== $this->domainLegalStatus) {
            $res['DomainLegalStatus'] = $this->domainLegalStatus;
        }
        if (null !== $this->domainWebSocketStatus) {
            $res['DomainWebSocketStatus'] = $this->domainWebSocketStatus;
        }
        if (null !== $this->domainRemark) {
            $res['DomainRemark'] = $this->domainRemark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDomainResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }
        if (isset($map['DomainBindingStatus'])) {
            $model->domainBindingStatus = $map['DomainBindingStatus'];
        }
        if (isset($map['DomainLegalStatus'])) {
            $model->domainLegalStatus = $map['DomainLegalStatus'];
        }
        if (isset($map['DomainWebSocketStatus'])) {
            $model->domainWebSocketStatus = $map['DomainWebSocketStatus'];
        }
        if (isset($map['DomainRemark'])) {
            $model->domainRemark = $map['DomainRemark'];
        }

        return $model;
    }
}
