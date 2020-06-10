<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Tea\Model;

class SetApNameRequest extends Model
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
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description apMac
     *
     * @var string
     */
    public $apMac;
    protected $_name = [
        'appName' => 'AppName',
        'appCode' => 'AppCode',
        'name'    => 'Name',
        'apMac'   => 'ApMac',
    ];

    public function validate()
    {
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('appCode', $this->appCode, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('apMac', $this->apMac, true);
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->apMac) {
            $res['ApMac'] = $this->apMac;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetApNameRequest
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ApMac'])) {
            $model->apMac = $map['ApMac'];
        }

        return $model;
    }
}
