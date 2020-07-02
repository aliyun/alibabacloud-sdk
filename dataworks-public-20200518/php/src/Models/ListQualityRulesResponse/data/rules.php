<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityRulesResponse\data;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description projectName
     *
     * @var string
     */
    public $projectName;

    /**
     * @description tableName
     *
     * @var string
     */
    public $tableName;

    /**
     * @description id
     *
     * @var int
     */
    public $id;

    /**
     * @description entityId
     *
     * @var int
     */
    public $entityId;

    /**
     * @description property
     *
     * @var string
     */
    public $property;

    /**
     * @description methodId
     *
     * @var int
     */
    public $methodId;

    /**
     * @description methodName
     *
     * @var string
     */
    public $methodName;

    /**
     * @description onDuty
     *
     * @var string
     */
    public $onDuty;

    /**
     * @description ruleType
     *
     * @var int
     */
    public $ruleType;

    /**
     * @description blockType
     *
     * @var int
     */
    public $blockType;

    /**
     * @description templateId
     *
     * @var int
     */
    public $templateId;

    /**
     * @description templateName
     *
     * @var string
     */
    public $templateName;

    /**
     * @description ruleCheckerRelationId
     *
     * @var int
     */
    public $ruleCheckerRelationId;

    /**
     * @description checkerId
     *
     * @var int
     */
    public $checkerId;

    /**
     * @description fixCheck
     *
     * @var bool
     */
    public $fixCheck;

    /**
     * @description trend
     *
     * @var string
     */
    public $trend;

    /**
     * @description warningThreshold
     *
     * @var string
     */
    public $warningThreshold;

    /**
     * @description criticalThreshold
     *
     * @var string
     */
    public $criticalThreshold;

    /**
     * @description historyWarningThreshold
     *
     * @var string
     */
    public $historyWarningThreshold;

    /**
     * @description historyCriticalThreshold
     *
     * @var string
     */
    public $historyCriticalThreshold;

    /**
     * @description propertyKey
     *
     * @var string
     */
    public $propertyKey;

    /**
     * @description matchExpression
     *
     * @var string
     */
    public $matchExpression;

    /**
     * @description comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description expectValue
     *
     * @var string
     */
    public $expectValue;
    protected $_name = [
        'projectName'              => 'ProjectName',
        'tableName'                => 'TableName',
        'id'                       => 'Id',
        'entityId'                 => 'EntityId',
        'property'                 => 'Property',
        'methodId'                 => 'MethodId',
        'methodName'               => 'MethodName',
        'onDuty'                   => 'OnDuty',
        'ruleType'                 => 'RuleType',
        'blockType'                => 'BlockType',
        'templateId'               => 'TemplateId',
        'templateName'             => 'TemplateName',
        'ruleCheckerRelationId'    => 'RuleCheckerRelationId',
        'checkerId'                => 'CheckerId',
        'fixCheck'                 => 'FixCheck',
        'trend'                    => 'Trend',
        'warningThreshold'         => 'WarningThreshold',
        'criticalThreshold'        => 'CriticalThreshold',
        'historyWarningThreshold'  => 'HistoryWarningThreshold',
        'historyCriticalThreshold' => 'HistoryCriticalThreshold',
        'propertyKey'              => 'PropertyKey',
        'matchExpression'          => 'MatchExpression',
        'comment'                  => 'Comment',
        'expectValue'              => 'ExpectValue',
    ];

    public function validate()
    {
        Model::validateRequired('projectName', $this->projectName, true);
        Model::validateRequired('tableName', $this->tableName, true);
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('entityId', $this->entityId, true);
        Model::validateRequired('property', $this->property, true);
        Model::validateRequired('methodId', $this->methodId, true);
        Model::validateRequired('methodName', $this->methodName, true);
        Model::validateRequired('onDuty', $this->onDuty, true);
        Model::validateRequired('ruleType', $this->ruleType, true);
        Model::validateRequired('blockType', $this->blockType, true);
        Model::validateRequired('templateId', $this->templateId, true);
        Model::validateRequired('templateName', $this->templateName, true);
        Model::validateRequired('ruleCheckerRelationId', $this->ruleCheckerRelationId, true);
        Model::validateRequired('checkerId', $this->checkerId, true);
        Model::validateRequired('fixCheck', $this->fixCheck, true);
        Model::validateRequired('trend', $this->trend, true);
        Model::validateRequired('warningThreshold', $this->warningThreshold, true);
        Model::validateRequired('criticalThreshold', $this->criticalThreshold, true);
        Model::validateRequired('historyWarningThreshold', $this->historyWarningThreshold, true);
        Model::validateRequired('historyCriticalThreshold', $this->historyCriticalThreshold, true);
        Model::validateRequired('propertyKey', $this->propertyKey, true);
        Model::validateRequired('matchExpression', $this->matchExpression, true);
        Model::validateRequired('comment', $this->comment, true);
        Model::validateRequired('expectValue', $this->expectValue, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->property) {
            $res['Property'] = $this->property;
        }
        if (null !== $this->methodId) {
            $res['MethodId'] = $this->methodId;
        }
        if (null !== $this->methodName) {
            $res['MethodName'] = $this->methodName;
        }
        if (null !== $this->onDuty) {
            $res['OnDuty'] = $this->onDuty;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->blockType) {
            $res['BlockType'] = $this->blockType;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->ruleCheckerRelationId) {
            $res['RuleCheckerRelationId'] = $this->ruleCheckerRelationId;
        }
        if (null !== $this->checkerId) {
            $res['CheckerId'] = $this->checkerId;
        }
        if (null !== $this->fixCheck) {
            $res['FixCheck'] = $this->fixCheck;
        }
        if (null !== $this->trend) {
            $res['Trend'] = $this->trend;
        }
        if (null !== $this->warningThreshold) {
            $res['WarningThreshold'] = $this->warningThreshold;
        }
        if (null !== $this->criticalThreshold) {
            $res['CriticalThreshold'] = $this->criticalThreshold;
        }
        if (null !== $this->historyWarningThreshold) {
            $res['HistoryWarningThreshold'] = $this->historyWarningThreshold;
        }
        if (null !== $this->historyCriticalThreshold) {
            $res['HistoryCriticalThreshold'] = $this->historyCriticalThreshold;
        }
        if (null !== $this->propertyKey) {
            $res['PropertyKey'] = $this->propertyKey;
        }
        if (null !== $this->matchExpression) {
            $res['MatchExpression'] = $this->matchExpression;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->expectValue) {
            $res['ExpectValue'] = $this->expectValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['Property'])) {
            $model->property = $map['Property'];
        }
        if (isset($map['MethodId'])) {
            $model->methodId = $map['MethodId'];
        }
        if (isset($map['MethodName'])) {
            $model->methodName = $map['MethodName'];
        }
        if (isset($map['OnDuty'])) {
            $model->onDuty = $map['OnDuty'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['BlockType'])) {
            $model->blockType = $map['BlockType'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['RuleCheckerRelationId'])) {
            $model->ruleCheckerRelationId = $map['RuleCheckerRelationId'];
        }
        if (isset($map['CheckerId'])) {
            $model->checkerId = $map['CheckerId'];
        }
        if (isset($map['FixCheck'])) {
            $model->fixCheck = $map['FixCheck'];
        }
        if (isset($map['Trend'])) {
            $model->trend = $map['Trend'];
        }
        if (isset($map['WarningThreshold'])) {
            $model->warningThreshold = $map['WarningThreshold'];
        }
        if (isset($map['CriticalThreshold'])) {
            $model->criticalThreshold = $map['CriticalThreshold'];
        }
        if (isset($map['HistoryWarningThreshold'])) {
            $model->historyWarningThreshold = $map['HistoryWarningThreshold'];
        }
        if (isset($map['HistoryCriticalThreshold'])) {
            $model->historyCriticalThreshold = $map['HistoryCriticalThreshold'];
        }
        if (isset($map['PropertyKey'])) {
            $model->propertyKey = $map['PropertyKey'];
        }
        if (isset($map['MatchExpression'])) {
            $model->matchExpression = $map['MatchExpression'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['ExpectValue'])) {
            $model->expectValue = $map['ExpectValue'];
        }

        return $model;
    }
}
