<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Tea\Model;

class GetApDetailStatusRequest extends Model
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
     * @description needRadioStatus
     *
     * @var bool
     */
    public $needRadioStatus;

    /**
     * @description mac
     *
     * @var string
     */
    public $mac;

    /**
     * @description needApgroupInfo
     *
     * @var bool
     */
    public $needApgroupInfo;
    protected $_name = [
        'appName'         => 'AppName',
        'appCode'         => 'AppCode',
        'needRadioStatus' => 'NeedRadioStatus',
        'mac'             => 'Mac',
        'needApgroupInfo' => 'NeedApgroupInfo',
    ];

    public function validate()
    {
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('appCode', $this->appCode, true);
        Model::validateRequired('needRadioStatus', $this->needRadioStatus, true);
        Model::validateRequired('mac', $this->mac, true);
        Model::validateRequired('needApgroupInfo', $this->needApgroupInfo, true);
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
        if (null !== $this->needRadioStatus) {
            $res['NeedRadioStatus'] = $this->needRadioStatus;
        }
        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }
        if (null !== $this->needApgroupInfo) {
            $res['NeedApgroupInfo'] = $this->needApgroupInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetApDetailStatusRequest
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
        if (isset($map['NeedRadioStatus'])) {
            $model->needRadioStatus = $map['NeedRadioStatus'];
        }
        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }
        if (isset($map['NeedApgroupInfo'])) {
            $model->needApgroupInfo = $map['NeedApgroupInfo'];
        }

        return $model;
    }
}
