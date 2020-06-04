<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetWatermarkResponse;

use AlibabaCloud\Tea\Model;

class watermarkInfo extends Model {
    protected $_name = [
        'creationTime' => 'CreationTime',
        'type' => 'Type',
        'isDefault' => 'IsDefault',
        'watermarkId' => 'WatermarkId',
        'name' => 'Name',
        'fileUrl' => 'FileUrl',
        'watermarkConfig' => 'WatermarkConfig',
        'appId' => 'AppId',
    ];
    public function validate() {
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('isDefault', $this->isDefault, true);
        Model::validateRequired('watermarkId', $this->watermarkId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('fileUrl', $this->fileUrl, true);
        Model::validateRequired('watermarkConfig', $this->watermarkConfig, true);
        Model::validateRequired('appId', $this->appId, true);
    }
    public function toMap() {
        $res = [];
        $res['CreationTime'] = $this->creationTime;
        $res['Type'] = $this->type;
        $res['IsDefault'] = $this->isDefault;
        $res['WatermarkId'] = $this->watermarkId;
        $res['Name'] = $this->name;
        $res['FileUrl'] = $this->fileUrl;
        $res['WatermarkConfig'] = $this->watermarkConfig;
        $res['AppId'] = $this->appId;
        return $res;
    }
    /**
     * @param array $map
     * @return watermarkInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CreationTime'])){
            $model->creationTime = $map['CreationTime'];
        }
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        if(isset($map['IsDefault'])){
            $model->isDefault = $map['IsDefault'];
        }
        if(isset($map['WatermarkId'])){
            $model->watermarkId = $map['WatermarkId'];
        }
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['FileUrl'])){
            $model->fileUrl = $map['FileUrl'];
        }
        if(isset($map['WatermarkConfig'])){
            $model->watermarkConfig = $map['WatermarkConfig'];
        }
        if(isset($map['AppId'])){
            $model->appId = $map['AppId'];
        }
        return $model;
    }
    /**
     * @description creationTime
     * @var string
     */
    public $creationTime;

    /**
     * @description type
     * @var string
     */
    public $type;

    /**
     * @description isDefault
     * @var string
     */
    public $isDefault;

    /**
     * @description watermarkId
     * @var string
     */
    public $watermarkId;

    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description fileUrl
     * @var string
     */
    public $fileUrl;

    /**
     * @description watermarkConfig
     * @var string
     */
    public $watermarkConfig;

    /**
     * @description appId
     * @var string
     */
    public $appId;

}
