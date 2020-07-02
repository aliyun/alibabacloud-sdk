<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateFileRequest extends Model
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
     * @description FileType
     *
     * @var int
     */
    public $fileType;

    /**
     * @description Owner
     *
     * @var string
     */
    public $owner;

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
     * @description DependentCloudUuidList
     *
     * @var string
     */
    public $dependentCloudUuidList;

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
    protected $_name = [
        'fileFolderPath'          => 'FileFolderPath',
        'projectId'               => 'ProjectId',
        'fileName'                => 'FileName',
        'fileDescription'         => 'FileDescription',
        'fileType'                => 'FileType',
        'owner'                   => 'Owner',
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
        'dependentCloudUuidList'  => 'DependentCloudUuidList',
        'inputList'               => 'InputList',
        'projectIdentifier'       => 'ProjectIdentifier',
    ];

    public function validate()
    {
        Model::validateRequired('fileName', $this->fileName, true);
        Model::validateRequired('fileType', $this->fileType, true);
        Model::validateRequired('inputList', $this->inputList, true);
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
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
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
        if (null !== $this->dependentCloudUuidList) {
            $res['DependentCloudUuidList'] = $this->dependentCloudUuidList;
        }
        if (null !== $this->inputList) {
            $res['InputList'] = $this->inputList;
        }
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFileRequest
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
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
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
        if (isset($map['DependentCloudUuidList'])) {
            $model->dependentCloudUuidList = $map['DependentCloudUuidList'];
        }
        if (isset($map['InputList'])) {
            $model->inputList = $map['InputList'];
        }
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }

        return $model;
    }
}
