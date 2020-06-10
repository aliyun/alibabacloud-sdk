<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetVodTemplateResponse;

use AlibabaCloud\Tea\Model;

class vodTemplateInfo extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description vodTemplateId
     *
     * @var string
     */
    public $vodTemplateId;

    /**
     * @description templateType
     *
     * @var string
     */
    public $templateType;

    /**
     * @description subTemplateType
     *
     * @var string
     */
    public $subTemplateType;

    /**
     * @description source
     *
     * @var string
     */
    public $source;

    /**
     * @description isDefault
     *
     * @var string
     */
    public $isDefault;

    /**
     * @description templateConfig
     *
     * @var string
     */
    public $templateConfig;

    /**
     * @description creationTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description modifyTime
     *
     * @var string
     */
    public $modifyTime;
    protected $_name = [
        'name'            => 'Name',
        'vodTemplateId'   => 'VodTemplateId',
        'templateType'    => 'TemplateType',
        'subTemplateType' => 'SubTemplateType',
        'source'          => 'Source',
        'isDefault'       => 'IsDefault',
        'templateConfig'  => 'TemplateConfig',
        'creationTime'    => 'CreationTime',
        'modifyTime'      => 'ModifyTime',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('vodTemplateId', $this->vodTemplateId, true);
        Model::validateRequired('templateType', $this->templateType, true);
        Model::validateRequired('subTemplateType', $this->subTemplateType, true);
        Model::validateRequired('source', $this->source, true);
        Model::validateRequired('isDefault', $this->isDefault, true);
        Model::validateRequired('templateConfig', $this->templateConfig, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('modifyTime', $this->modifyTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->vodTemplateId) {
            $res['VodTemplateId'] = $this->vodTemplateId;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->subTemplateType) {
            $res['SubTemplateType'] = $this->subTemplateType;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = $this->templateConfig;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vodTemplateInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['VodTemplateId'])) {
            $model->vodTemplateId = $map['VodTemplateId'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['SubTemplateType'])) {
            $model->subTemplateType = $map['SubTemplateType'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = $map['TemplateConfig'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        return $model;
    }
}
