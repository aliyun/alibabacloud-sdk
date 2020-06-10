<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\UpdateWatermarkResponse;

use AlibabaCloud\Tea\Model;

class watermarkInfo extends Model
{
    /**
     * @description creationTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description isDefault
     *
     * @var string
     */
    public $isDefault;

    /**
     * @description watermarkId
     *
     * @var string
     */
    public $watermarkId;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description fileUrl
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @description watermarkConfig
     *
     * @var string
     */
    public $watermarkConfig;
    protected $_name = [
        'creationTime'    => 'CreationTime',
        'type'            => 'Type',
        'isDefault'       => 'IsDefault',
        'watermarkId'     => 'WatermarkId',
        'name'            => 'Name',
        'fileUrl'         => 'FileUrl',
        'watermarkConfig' => 'WatermarkConfig',
    ];

    public function validate()
    {
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('isDefault', $this->isDefault, true);
        Model::validateRequired('watermarkId', $this->watermarkId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('fileUrl', $this->fileUrl, true);
        Model::validateRequired('watermarkConfig', $this->watermarkConfig, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->watermarkId) {
            $res['WatermarkId'] = $this->watermarkId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->watermarkConfig) {
            $res['WatermarkConfig'] = $this->watermarkConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return watermarkInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['WatermarkId'])) {
            $model->watermarkId = $map['WatermarkId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['WatermarkConfig'])) {
            $model->watermarkConfig = $map['WatermarkConfig'];
        }

        return $model;
    }
}
