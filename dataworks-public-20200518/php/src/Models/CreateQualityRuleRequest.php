<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateQualityRuleRequest extends Model
{
    /**
     * @description blockType
     *
     * @var int
     */
    public $blockType;

    /**
     * @description entityId
     *
     * @var int
     */
    public $entityId;

    /**
     * @description comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description checker
     *
     * @var int
     */
    public $checker;

    /**
     * @description expectValue
     *
     * @var string
     */
    public $expectValue;

    /**
     * @description trend
     *
     * @var string
     */
    public $trend;

    /**
     * @description methodName
     *
     * @var string
     */
    public $methodName;

    /**
     * @description operator
     *
     * @var string
     */
    public $operator;

    /**
     * @description projectName
     *
     * @var string
     */
    public $projectName;

    /**
     * @description property
     *
     * @var string
     */
    public $property;

    /**
     * @description propertyType
     *
     * @var string
     */
    public $propertyType;

    /**
     * @description ruleType
     *
     * @var int
     */
    public $ruleType;

    /**
     * @description whereCondition
     *
     * @var string
     */
    public $whereCondition;

    /**
     * @description criticalThreshold
     *
     * @var string
     */
    public $criticalThreshold;

    /**
     * @description warningThreshold
     *
     * @var string
     */
    public $warningThreshold;

    /**
     * @description templateId
     *
     * @var int
     */
    public $templateId;

    /**
     * @description ruleName
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description predictType
     *
     * @var int
     */
    public $predictType;
    protected $_name = [
        'blockType'         => 'BlockType',
        'entityId'          => 'EntityId',
        'comment'           => 'Comment',
        'checker'           => 'Checker',
        'expectValue'       => 'ExpectValue',
        'trend'             => 'Trend',
        'methodName'        => 'MethodName',
        'operator'          => 'Operator',
        'projectName'       => 'ProjectName',
        'property'          => 'Property',
        'propertyType'      => 'PropertyType',
        'ruleType'          => 'RuleType',
        'whereCondition'    => 'WhereCondition',
        'criticalThreshold' => 'CriticalThreshold',
        'warningThreshold'  => 'WarningThreshold',
        'templateId'        => 'TemplateId',
        'ruleName'          => 'RuleName',
        'predictType'       => 'PredictType',
    ];

    public function validate()
    {
        Model::validateRequired('blockType', $this->blockType, true);
        Model::validateRequired('entityId', $this->entityId, true);
        Model::validateRequired('projectName', $this->projectName, true);
        Model::validateRequired('ruleType', $this->ruleType, true);
        Model::validateRequired('ruleName', $this->ruleName, true);
        Model::validateRequired('predictType', $this->predictType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockType) {
            $res['BlockType'] = $this->blockType;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->checker) {
            $res['Checker'] = $this->checker;
        }
        if (null !== $this->expectValue) {
            $res['ExpectValue'] = $this->expectValue;
        }
        if (null !== $this->trend) {
            $res['Trend'] = $this->trend;
        }
        if (null !== $this->methodName) {
            $res['MethodName'] = $this->methodName;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->property) {
            $res['Property'] = $this->property;
        }
        if (null !== $this->propertyType) {
            $res['PropertyType'] = $this->propertyType;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->whereCondition) {
            $res['WhereCondition'] = $this->whereCondition;
        }
        if (null !== $this->criticalThreshold) {
            $res['CriticalThreshold'] = $this->criticalThreshold;
        }
        if (null !== $this->warningThreshold) {
            $res['WarningThreshold'] = $this->warningThreshold;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->predictType) {
            $res['PredictType'] = $this->predictType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateQualityRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockType'])) {
            $model->blockType = $map['BlockType'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Checker'])) {
            $model->checker = $map['Checker'];
        }
        if (isset($map['ExpectValue'])) {
            $model->expectValue = $map['ExpectValue'];
        }
        if (isset($map['Trend'])) {
            $model->trend = $map['Trend'];
        }
        if (isset($map['MethodName'])) {
            $model->methodName = $map['MethodName'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Property'])) {
            $model->property = $map['Property'];
        }
        if (isset($map['PropertyType'])) {
            $model->propertyType = $map['PropertyType'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['WhereCondition'])) {
            $model->whereCondition = $map['WhereCondition'];
        }
        if (isset($map['CriticalThreshold'])) {
            $model->criticalThreshold = $map['CriticalThreshold'];
        }
        if (isset($map['WarningThreshold'])) {
            $model->warningThreshold = $map['WarningThreshold'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['PredictType'])) {
            $model->predictType = $map['PredictType'];
        }

        return $model;
    }
}
