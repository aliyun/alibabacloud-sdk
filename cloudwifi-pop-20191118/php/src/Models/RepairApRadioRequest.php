<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Tea\Model;

class RepairApRadioRequest extends Model
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
     * @description apMac
     *
     * @var string
     */
    public $apMac;

    /**
     * @description radioIndex
     *
     * @var string
     */
    public $radioIndex;
    protected $_name = [
        'appName'    => 'AppName',
        'appCode'    => 'AppCode',
        'apMac'      => 'ApMac',
        'radioIndex' => 'RadioIndex',
    ];

    public function validate()
    {
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('appCode', $this->appCode, true);
        Model::validateRequired('apMac', $this->apMac, true);
        Model::validateRequired('radioIndex', $this->radioIndex, true);
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
        if (null !== $this->apMac) {
            $res['ApMac'] = $this->apMac;
        }
        if (null !== $this->radioIndex) {
            $res['RadioIndex'] = $this->radioIndex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RepairApRadioRequest
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
        if (isset($map['ApMac'])) {
            $model->apMac = $map['ApMac'];
        }
        if (isset($map['RadioIndex'])) {
            $model->radioIndex = $map['RadioIndex'];
        }

        return $model;
    }
}
