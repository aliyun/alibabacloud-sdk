<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateFileRequest extends Model
{
    /**
     * @description FileFolderPath
     *
     * @var string
     */
    public $fileFolderPath;

    /**
     * @description ProjectId
     *
     * @var int
     */
    public $projectId;

    /**
     * @description FileName
     *
     * @var string
     */
    public $fileName;

    /**
     * @description FileDescription
     *
     * @var string
     */
    public $fileDescription;

    /**
     * @description Content
     *
     * @var string
     */
    public $content;

    /**
     * @description AutoRerunTimes
     *
     * @var int
     */
    public $autoRerunTimes;

    /**
     * @description AutoRerunIntervalMillis
     *
     * @var int
     */
    public $autoRerunIntervalMillis;

    /**
     * @description RerunMode
     *
     * @var string
     */
    public $rerunMode;

    /**
     * @description Stop
     *
     * @var bool
     */
    public $stop;

    /**
     * @description ParaValue
     *
     * @var string
     */
    public $paraValue;

    /**
     * @description StartEffectDate
     *
     * @var int
     */
    public $startEffectDate;

    /**
     * @description EndEffectDate
     *
     * @var int
     */
    public $endEffectDate;

    /**
     * @description CronExpress
     *
     * @var string
     */
    public $cronExpress;

    /**
     * @description CycleType
     *
     * @var string
     */
    public $cycleType;

    /**
     * @description DependentType
     *
     * @var string
     */
    public $dependentType;

    /**
     * @description DependentNodeIdList
     *
     * @var string
     */
    public $dependentNodeIdList;

    /**
     * @description InputList
     *
     * @var string
     */
    public $inputList;

    /**
     * @description ProjectIdentifier
     *
     * @var string
     */
    public $projectIdentifier;

    /**
     * @description FileId
     *
     * @var int
     */
    public $fileId;

    /**
     * @description OutputList
     *
     * @var string
     */
    public $outputList;
    protected $_name = [
        'fileFolderPath'          => 'FileFolderPath',
        'projectId'               => 'ProjectId',
        'fileName'                => 'FileName',
        'fileDescription'         => 'FileDescription',
        'content'                 => 'Content',
        'autoRerunTimes'          => 'AutoRerunTimes',
        'autoRerunIntervalMillis' => 'AutoRerunIntervalMillis',
        'rerunMode'               => 'RerunMode',
        'stop'                    => 'Stop',
        'paraValue'               => 'ParaValue',
        'startEffectDate'         => 'StartEffectDate',
        'endEffectDate'           => 'EndEffectDate',
        'cronExpress'             => 'CronExpress',
        'cycleType'               => 'CycleType',
        'dependentType'           => 'DependentType',
        'dependentNodeIdList'     => 'DependentNodeIdList',
        'inputList'               => 'InputList',
        'projectIdentifier'       => 'ProjectIdentifier',
        'fileId'                  => 'FileId',
        'outputList'              => 'OutputList',
    ];

    public function validate()
    {
        Model::validateRequired('fileId', $this->fileId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileFolderPath) {
            $res['FileFolderPath'] = $this->fileFolderPath;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileDescription) {
            $res['FileDescription'] = $this->fileDescription;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->autoRerunTimes) {
            $res['AutoRerunTimes'] = $this->autoRerunTimes;
        }
        if (null !== $this->autoRerunIntervalMillis) {
            $res['AutoRerunIntervalMillis'] = $this->autoRerunIntervalMillis;
        }
        if (null !== $this->rerunMode) {
            $res['RerunMode'] = $this->rerunMode;
        }
        if (null !== $this->stop) {
            $res['Stop'] = $this->stop;
        }
        if (null !== $this->paraValue) {
            $res['ParaValue'] = $this->paraValue;
        }
        if (null !== $this->startEffectDate) {
            $res['StartEffectDate'] = $this->startEffectDate;
        }
        if (null !== $this->endEffectDate) {
            $res['EndEffectDate'] = $this->endEffectDate;
        }
        if (null !== $this->cronExpress) {
            $res['CronExpress'] = $this->cronExpress;
        }
        if (null !== $this->cycleType) {
            $res['CycleType'] = $this->cycleType;
        }
        if (null !== $this->dependentType) {
            $res['DependentType'] = $this->dependentType;
        }
        if (null !== $this->dependentNodeIdList) {
            $res['DependentNodeIdList'] = $this->dependentNodeIdList;
        }
        if (null !== $this->inputList) {
            $res['InputList'] = $this->inputList;
        }
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->outputList) {
            $res['OutputList'] = $this->outputList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileFolderPath'])) {
            $model->fileFolderPath = $map['FileFolderPath'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileDescription'])) {
            $model->fileDescription = $map['FileDescription'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['AutoRerunTimes'])) {
            $model->autoRerunTimes = $map['AutoRerunTimes'];
        }
        if (isset($map['AutoRerunIntervalMillis'])) {
            $model->autoRerunIntervalMillis = $map['AutoRerunIntervalMillis'];
        }
        if (isset($map['RerunMode'])) {
            $model->rerunMode = $map['RerunMode'];
        }
        if (isset($map['Stop'])) {
            $model->stop = $map['Stop'];
        }
        if (isset($map['ParaValue'])) {
            $model->paraValue = $map['ParaValue'];
        }
        if (isset($map['StartEffectDate'])) {
            $model->startEffectDate = $map['StartEffectDate'];
        }
        if (isset($map['EndEffectDate'])) {
            $model->endEffectDate = $map['EndEffectDate'];
        }
        if (isset($map['CronExpress'])) {
            $model->cronExpress = $map['CronExpress'];
        }
        if (isset($map['CycleType'])) {
            $model->cycleType = $map['CycleType'];
        }
        if (isset($map['DependentType'])) {
            $model->dependentType = $map['DependentType'];
        }
        if (isset($map['DependentNodeIdList'])) {
            $model->dependentNodeIdList = $map['DependentNodeIdList'];
        }
        if (isset($map['InputList'])) {
            $model->inputList = $map['InputList'];
        }
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['OutputList'])) {
            $model->outputList = $map['OutputList'];
        }

        return $model;
    }
}
