<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class SearchAlertContactGroupRequest extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $contactGroupName;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description proxyUserId
     *
     * @var string
     */
    public $proxyUserId;

    /**
     * @description contactName
     *
     * @var string
     */
    public $contactName;

    /**
     * @description contactId
     *
     * @var int
     */
    public $contactId;
    protected $_name = [
        'contactGroupName' => 'ContactGroupName',
        'regionId'         => 'RegionId',
        'proxyUserId'      => 'ProxyUserId',
        'contactName'      => 'ContactName',
        'contactId'        => 'ContactId',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroupName) {
            $res['ContactGroupName'] = $this->contactGroupName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->proxyUserId) {
            $res['ProxyUserId'] = $this->proxyUserId;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchAlertContactGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroupName'])) {
            $model->contactGroupName = $map['ContactGroupName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ProxyUserId'])) {
            $model->proxyUserId = $map['ProxyUserId'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }

        return $model;
    }
}
