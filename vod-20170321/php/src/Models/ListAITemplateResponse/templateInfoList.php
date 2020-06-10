<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListAITemplateResponse;

use AlibabaCloud\Tea\Model;

class templateInfoList extends Model
{
    /**
     * @description templateId
     *
     * @var string
     */
    public $templateId;

    /**
     * @description templateType
     *
     * @var string
     */
    public $templateType;

    /**
     * @description templateName
     *
     * @var string
     */
    public $templateName;

    /**
     * @description templateConfig
     *
     * @var string
     */
    public $templateConfig;

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
        'templateId'     => 'TemplateId',
        'templateType'   => 'TemplateType',
        'templateName'   => 'TemplateName',
        'templateConfig' => 'TemplateConfig',
        'source'         => 'Source',
        'isDefault'      => 'IsDefault',
        'creationTime'   => 'CreationTime',
        'modifyTime'     => 'ModifyTime',
    ];

    public function validate()
    {
        Model::validateRequired('templateId', $this->templateId, true);
        Model::validateRequired('templateType', $this->templateType, true);
        Model::validateRequired('templateName', $this->templateName, true);
        Model::validateRequired('templateConfig', $this->templateConfig, true);
        Model::validateRequired('source', $this->source, true);
        Model::validateRequired('isDefault', $this->isDefault, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('modifyTime', $this->modifyTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = $this->templateConfig;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
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
     * @return templateInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = $map['TemplateConfig'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
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
