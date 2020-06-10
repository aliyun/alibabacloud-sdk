<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterOutputListResponse\datapoints;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterOutputListResponse\datapoints\datapoint\configJson;
use AlibabaCloud\Tea\Model;

class datapoint extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $destName;

    /**
     * @description type
     *
     * @var string
     */
    public $destType;

    /**
     * @description createTime
     *
     * @var int
     */
    public $createTime;

    /**
     * @description accessInfo
     *
     * @var configJson
     */
    public $configJson;
    protected $_name = [
        'destName'   => 'DestName',
        'destType'   => 'DestType',
        'createTime' => 'CreateTime',
        'configJson' => 'ConfigJson',
    ];

    public function validate()
    {
        Model::validateRequired('destName', $this->destName, true);
        Model::validateRequired('destType', $this->destType, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('configJson', $this->configJson, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destName) {
            $res['DestName'] = $this->destName;
        }
        if (null !== $this->destType) {
            $res['DestType'] = $this->destType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->configJson) {
            $res['ConfigJson'] = null !== $this->configJson ? $this->configJson->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return datapoint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestName'])) {
            $model->destName = $map['DestName'];
        }
        if (isset($map['DestType'])) {
            $model->destType = $map['DestType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ConfigJson'])) {
            $model->configJson = configJson::fromMap($map['ConfigJson']);
        }

        return $model;
    }
}
