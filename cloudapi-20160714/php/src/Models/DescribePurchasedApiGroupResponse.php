<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApiGroupResponse\domains;
use AlibabaCloud\Tea\Model;

class DescribePurchasedApiGroupResponse extends Model
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
     * @description data.groupName
     *
     * @var string
     */
    public $groupName;

    /**
     * @description data.description
     *
     * @var string
     */
    public $description;

    /**
     * @description data.gmtCreate
     *
     * @var string
     */
    public $purchasedTime;

    /**
     * @description data.regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description data.status
     *
     * @var string
     */
    public $status;

    /**
     * @description data.customDomains
     *
     * @var domains
     */
    public $domains;
    protected $_name = [
        'requestId'     => 'RequestId',
        'groupId'       => 'GroupId',
        'groupName'     => 'GroupName',
        'description'   => 'Description',
        'purchasedTime' => 'PurchasedTime',
        'regionId'      => 'RegionId',
        'status'        => 'Status',
        'domains'       => 'Domains',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('groupName', $this->groupName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('purchasedTime', $this->purchasedTime, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('domains', $this->domains, true);
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
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->purchasedTime) {
            $res['PurchasedTime'] = $this->purchasedTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->domains) {
            $res['Domains'] = null !== $this->domains ? $this->domains->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePurchasedApiGroupResponse
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
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['PurchasedTime'])) {
            $model->purchasedTime = $map['PurchasedTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Domains'])) {
            $model->domains = domains::fromMap($map['Domains']);
        }

        return $model;
    }
}
