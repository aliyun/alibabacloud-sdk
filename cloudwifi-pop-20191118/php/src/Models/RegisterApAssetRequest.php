<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Tea\Model;

class RegisterApAssetRequest extends Model
{
    /**
     * @description appKey
     *
     * @var string
     */
    public $appName;

    /**
     * @description appSecret
     *
     * @var string
     */
    public $appCode;

    /**
     * @description id
     *
     * @var int
     */
    public $id;

    /**
     * @description mac
     *
     * @var string
     */
    public $mac;

    /**
     * @description apgroupId
     *
     * @var string
     */
    public $apGroupUUId;

    /**
     * @description serialNo
     *
     * @var string
     */
    public $serialNo;
    protected $_name = [
        'appName'     => 'AppName',
        'appCode'     => 'AppCode',
        'id'          => 'Id',
        'mac'         => 'Mac',
        'apGroupUUId' => 'ApGroupUUId',
        'serialNo'    => 'SerialNo',
    ];

    public function validate()
    {
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('appCode', $this->appCode, true);
        Model::validateRequired('mac', $this->mac, true);
        Model::validateRequired('apGroupUUId', $this->apGroupUUId, true);
        Model::validateRequired('serialNo', $this->serialNo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }
        if (null !== $this->apGroupUUId) {
            $res['ApGroupUUId'] = $this->apGroupUUId;
        }
        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterApAssetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }
        if (isset($map['ApGroupUUId'])) {
            $model->apGroupUUId = $map['ApGroupUUId'];
        }
        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }

        return $model;
    }
}
