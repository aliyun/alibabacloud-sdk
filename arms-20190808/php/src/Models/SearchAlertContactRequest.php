<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class SearchAlertContactRequest extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $contactName;

    /**
     * @description phone
     *
     * @var string
     */
    public $phone;

    /**
     * @description email
     *
     * @var string
     */
    public $email;

    /**
     * @description currentPage
     *
     * @var string
     */
    public $currentPage;

    /**
     * @description pageSize
     *
     * @var string
     */
    public $pageSize;

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
    protected $_name = [
        'contactName' => 'ContactName',
        'phone'       => 'Phone',
        'email'       => 'Email',
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'regionId'    => 'RegionId',
        'proxyUserId' => 'ProxyUserId',
    ];

    public function validate()
    {
        Model::validateRequired('currentPage', $this->currentPage, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->proxyUserId) {
            $res['ProxyUserId'] = $this->proxyUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchAlertContactRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ProxyUserId'])) {
            $model->proxyUserId = $map['ProxyUserId'];
        }

        return $model;
    }
}
