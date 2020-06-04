<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListVodTemplateResponse;

use AlibabaCloud\Tea\Model;

class vodTemplateInfoList extends Model {
    protected $_name = [
        'name' => 'Name',
        'vodTemplateId' => 'VodTemplateId',
        'templateType' => 'TemplateType',
        'subTemplateType' => 'SubTemplateType',
        'source' => 'Source',
        'isDefault' => 'IsDefault',
        'templateConfig' => 'TemplateConfig',
        'creationTime' => 'CreationTime',
        'modifyTime' => 'ModifyTime',
        'appId' => 'AppId',
    ];
    public function validate() {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('vodTemplateId', $this->vodTemplateId, true);
        Model::validateRequired('templateType', $this->templateType, true);
        Model::validateRequired('subTemplateType', $this->subTemplateType, true);
        Model::validateRequired('source', $this->source, true);
        Model::validateRequired('isDefault', $this->isDefault, true);
        Model::validateRequired('templateConfig', $this->templateConfig, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('modifyTime', $this->modifyTime, true);
        Model::validateRequired('appId', $this->appId, true);
    }
    public function toMap() {
        $res = [];
        $res['Name'] = $this->name;
        $res['VodTemplateId'] = $this->vodTemplateId;
        $res['TemplateType'] = $this->templateType;
        $res['SubTemplateType'] = $this->subTemplateType;
        $res['Source'] = $this->source;
        $res['IsDefault'] = $this->isDefault;
        $res['TemplateConfig'] = $this->templateConfig;
        $res['CreationTime'] = $this->creationTime;
        $res['ModifyTime'] = $this->modifyTime;
        $res['AppId'] = $this->appId;
        return $res;
    }
    /**
     * @param array $map
     * @return vodTemplateInfoList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['VodTemplateId'])){
            $model->vodTemplateId = $map['VodTemplateId'];
        }
        if(isset($map['TemplateType'])){
            $model->templateType = $map['TemplateType'];
        }
        if(isset($map['SubTemplateType'])){
            $model->subTemplateType = $map['SubTemplateType'];
        }
        if(isset($map['Source'])){
            $model->source = $map['Source'];
        }
        if(isset($map['IsDefault'])){
            $model->isDefault = $map['IsDefault'];
        }
        if(isset($map['TemplateConfig'])){
            $model->templateConfig = $map['TemplateConfig'];
        }
        if(isset($map['CreationTime'])){
            $model->creationTime = $map['CreationTime'];
        }
        if(isset($map['ModifyTime'])){
            $model->modifyTime = $map['ModifyTime'];
        }
        if(isset($map['AppId'])){
            $model->appId = $map['AppId'];
        }
        return $model;
    }
    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description vodTemplateId
     * @var string
     */
    public $vodTemplateId;

    /**
     * @description templateType
     * @var string
     */
    public $templateType;

    /**
     * @description subTemplateType
     * @var string
     */
    public $subTemplateType;

    /**
     * @description source
     * @var string
     */
    public $source;

    /**
     * @description isDefault
     * @var string
     */
    public $isDefault;

    /**
     * @description templateConfig
     * @var string
     */
    public $templateConfig;

    /**
     * @description creationTime
     * @var string
     */
    public $creationTime;

    /**
     * @description modifyTime
     * @var string
     */
    public $modifyTime;

    /**
     * @description appId
     * @var string
     */
    public $appId;

}
