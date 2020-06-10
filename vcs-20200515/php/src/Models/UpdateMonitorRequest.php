<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class UpdateMonitorRequest extends Model
{
    /**
     * @description corpId
     *
     * @var string
     */
    public $corpId;

    /**
     * @description taskId
     *
     * @var string
     */
    public $taskId;

    /**
     * @description ruleName
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description cameraOperType
     *
     * @var string
     */
    public $deviceOperateType;

    /**
     * @description cameraIdList
     *
     * @var string
     */
    public $deviceList;

    /**
     * @description picOperType
     *
     * @var string
     */
    public $picOperateType;

    /**
     * @description picList
     *
     * @var string
     */
    public $picList;

    /**
     * @description attrOperType
     *
     * @var string
     */
    public $attributeOperateType;

    /**
     * @description attrName
     *
     * @var string
     */
    public $attributeName;

    /**
     * @description attrValueList
     *
     * @var string
     */
    public $attributeValueList;

    /**
     * @description remark
     *
     * @var string
     */
    public $description;

    /**
     * @description rawExpression
     *
     * @var string
     */
    public $ruleExpression;
    protected $_name = [
        'corpId'               => 'CorpId',
        'taskId'               => 'TaskId',
        'ruleName'             => 'RuleName',
        'deviceOperateType'    => 'DeviceOperateType',
        'deviceList'           => 'DeviceList',
        'picOperateType'       => 'PicOperateType',
        'picList'              => 'PicList',
        'attributeOperateType' => 'AttributeOperateType',
        'attributeName'        => 'AttributeName',
        'attributeValueList'   => 'AttributeValueList',
        'description'          => 'Description',
        'ruleExpression'       => 'RuleExpression',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->deviceOperateType) {
            $res['DeviceOperateType'] = $this->deviceOperateType;
        }
        if (null !== $this->deviceList) {
            $res['DeviceList'] = $this->deviceList;
        }
        if (null !== $this->picOperateType) {
            $res['PicOperateType'] = $this->picOperateType;
        }
        if (null !== $this->picList) {
            $res['PicList'] = $this->picList;
        }
        if (null !== $this->attributeOperateType) {
            $res['AttributeOperateType'] = $this->attributeOperateType;
        }
        if (null !== $this->attributeName) {
            $res['AttributeName'] = $this->attributeName;
        }
        if (null !== $this->attributeValueList) {
            $res['AttributeValueList'] = $this->attributeValueList;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ruleExpression) {
            $res['RuleExpression'] = $this->ruleExpression;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['DeviceOperateType'])) {
            $model->deviceOperateType = $map['DeviceOperateType'];
        }
        if (isset($map['DeviceList'])) {
            $model->deviceList = $map['DeviceList'];
        }
        if (isset($map['PicOperateType'])) {
            $model->picOperateType = $map['PicOperateType'];
        }
        if (isset($map['PicList'])) {
            $model->picList = $map['PicList'];
        }
        if (isset($map['AttributeOperateType'])) {
            $model->attributeOperateType = $map['AttributeOperateType'];
        }
        if (isset($map['AttributeName'])) {
            $model->attributeName = $map['AttributeName'];
        }
        if (isset($map['AttributeValueList'])) {
            $model->attributeValueList = $map['AttributeValueList'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RuleExpression'])) {
            $model->ruleExpression = $map['RuleExpression'];
        }

        return $model;
    }
}
