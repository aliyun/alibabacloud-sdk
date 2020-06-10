<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Tea\Model;

class PutAppConfigAndSaveRequest extends Model
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
     * @description appName
     *
     * @var string
     */
    public $configureType;

    /**
     * @description data
     *
     * @var string
     */
    public $data;

    /**
     * @description apMac
     *
     * @var string
     */
    public $apMac;

    /**
     * @description timestamp
     *
     * @var int
     */
    public $currentTime;
    protected $_name = [
        'appName'       => 'AppName',
        'appCode'       => 'AppCode',
        'configureType' => 'ConfigureType',
        'data'          => 'Data',
        'apMac'         => 'ApMac',
        'currentTime'   => 'CurrentTime',
    ];

    public function validate()
    {
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('appCode', $this->appCode, true);
        Model::validateRequired('configureType', $this->configureType, true);
        Model::validateRequired('data', $this->data, true);
        Model::validateRequired('apMac', $this->apMac, true);
        Model::validateRequired('currentTime', $this->currentTime, true);
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
        if (null !== $this->configureType) {
            $res['ConfigureType'] = $this->configureType;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->apMac) {
            $res['ApMac'] = $this->apMac;
        }
        if (null !== $this->currentTime) {
            $res['CurrentTime'] = $this->currentTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutAppConfigAndSaveRequest
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
        if (isset($map['ConfigureType'])) {
            $model->configureType = $map['ConfigureType'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['ApMac'])) {
            $model->apMac = $map['ApMac'];
        }
        if (isset($map['CurrentTime'])) {
            $model->currentTime = $map['CurrentTime'];
        }

        return $model;
    }
}
