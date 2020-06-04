<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class UpdateMonitorRequest extends Model {
    protected $_name = [
        'corpId' => 'CorpId',
        'taskId' => 'TaskId',
        'ruleName' => 'RuleName',
        'deviceOperateType' => 'DeviceOperateType',
        'deviceList' => 'DeviceList',
        'picOperateType' => 'PicOperateType',
        'picList' => 'PicList',
        'attributeOperateType' => 'AttributeOperateType',
        'attributeName' => 'AttributeName',
        'attributeValueList' => 'AttributeValueList',
        'description' => 'Description',
        'ruleExpression' => 'RuleExpression',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['CorpId'] = $this->corpId;
        $res['TaskId'] = $this->taskId;
        $res['RuleName'] = $this->ruleName;
        $res['DeviceOperateType'] = $this->deviceOperateType;
        $res['DeviceList'] = $this->deviceList;
        $res['PicOperateType'] = $this->picOperateType;
        $res['PicList'] = $this->picList;
        $res['AttributeOperateType'] = $this->attributeOperateType;
        $res['AttributeName'] = $this->attributeName;
        $res['AttributeValueList'] = $this->attributeValueList;
        $res['Description'] = $this->description;
        $res['RuleExpression'] = $this->ruleExpression;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateMonitorRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['CorpId'])){
            $model->corpId = $map['CorpId'];
        }
        if(isset($map['TaskId'])){
            $model->taskId = $map['TaskId'];
        }
        if(isset($map['RuleName'])){
            $model->ruleName = $map['RuleName'];
        }
        if(isset($map['DeviceOperateType'])){
            $model->deviceOperateType = $map['DeviceOperateType'];
        }
        if(isset($map['DeviceList'])){
            $model->deviceList = $map['DeviceList'];
        }
        if(isset($map['PicOperateType'])){
            $model->picOperateType = $map['PicOperateType'];
        }
        if(isset($map['PicList'])){
            $model->picList = $map['PicList'];
        }
        if(isset($map['AttributeOperateType'])){
            $model->attributeOperateType = $map['AttributeOperateType'];
        }
        if(isset($map['AttributeName'])){
            $model->attributeName = $map['AttributeName'];
        }
        if(isset($map['AttributeValueList'])){
            $model->attributeValueList = $map['AttributeValueList'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['RuleExpression'])){
            $model->ruleExpression = $map['RuleExpression'];
        }
        return $model;
    }
    /**
     * @description corpId
     * @var string
     */
    public $corpId;

    /**
     * @description taskId
     * @var string
     */
    public $taskId;

    /**
     * @description ruleName
     * @var string
     */
    public $ruleName;

    /**
     * @description cameraOperType
     * @var string
     */
    public $deviceOperateType;

    /**
     * @description cameraIdList
     * @var string
     */
    public $deviceList;

    /**
     * @description picOperType
     * @var string
     */
    public $picOperateType;

    /**
     * @description picList
     * @var string
     */
    public $picList;

    /**
     * @description attrOperType
     * @var string
     */
    public $attributeOperateType;

    /**
     * @description attrName
     * @var string
     */
    public $attributeName;

    /**
     * @description attrValueList
     * @var string
     */
    public $attributeValueList;

    /**
     * @description remark
     * @var string
     */
    public $description;

    /**
     * @description rawExpression
     * @var string
     */
    public $ruleExpression;

}
