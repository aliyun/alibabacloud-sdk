<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetProjectDetailResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description gmtModified
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description maxFlowNode
     *
     * @var int
     */
    public $maxFlowNode;

    /**
     * @description defaultDiResourceGroupIdentifier
     *
     * @var string
     */
    public $defaultDiResourceGroupIdentifier;

    /**
     * @description destination
     *
     * @var int
     */
    public $destination;

    /**
     * @description isAllowDownload
     *
     * @var int
     */
    public $isAllowDownload;

    /**
     * @description prodStorageQuota
     *
     * @var string
     */
    public $prodStorageQuota;

    /**
     * @description schedulerRetryInterval
     *
     * @var int
     */
    public $schedulerRetryInterval;

    /**
     * @description residentArea
     *
     * @var string
     */
    public $residentArea;

    /**
     * @description tablePrivacyMode
     *
     * @var int
     */
    public $tablePrivacyMode;

    /**
     * @description projectOwnerBaseId
     *
     * @var string
     */
    public $projectOwnerBaseId;

    /**
     * @description useProxyOdpsAccount
     *
     * @var bool
     */
    public $useProxyOdpsAccount;

    /**
     * @description disableDevelopment
     *
     * @var bool
     */
    public $disableDevelopment;

    /**
     * @description projectMode
     *
     * @var int
     */
    public $projectMode;

    /**
     * @description gmtCreate
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description devStorageQuota
     *
     * @var string
     */
    public $devStorageQuota;

    /**
     * @description isDefault
     *
     * @var int
     */
    public $isDefault;

    /**
     * @description protectedMode
     *
     * @var int
     */
    public $protectedMode;

    /**
     * @description baseProject
     *
     * @var bool
     */
    public $baseProject;

    /**
     * @description tenantId
     *
     * @var int
     */
    public $tenantId;

    /**
     * @description projectDesc
     *
     * @var string
     */
    public $projectDescription;

    /**
     * @description appkey
     *
     * @var string
     */
    public $appkey;

    /**
     * @description schedulerMaxRetryTimes
     *
     * @var int
     */
    public $schedulerMaxRetryTimes;

    /**
     * @description projectName
     *
     * @var string
     */
    public $projectName;

    /**
     * @description projectIdentifier
     *
     * @var string
     */
    public $projectIdentifier;

    /**
     * @description projectId
     *
     * @var int
     */
    public $projectId;

    /**
     * @description status
     *
     * @var int
     */
    public $status;

    /**
     * @description developmentType
     *
     * @var int
     */
    public $developmentType;

    /**
     * @description envTypes
     *
     * @var array
     */
    public $envTypes;
    protected $_name = [
        'gmtModified'                      => 'GmtModified',
        'maxFlowNode'                      => 'MaxFlowNode',
        'defaultDiResourceGroupIdentifier' => 'DefaultDiResourceGroupIdentifier',
        'destination'                      => 'Destination',
        'isAllowDownload'                  => 'IsAllowDownload',
        'prodStorageQuota'                 => 'ProdStorageQuota',
        'schedulerRetryInterval'           => 'SchedulerRetryInterval',
        'residentArea'                     => 'ResidentArea',
        'tablePrivacyMode'                 => 'TablePrivacyMode',
        'projectOwnerBaseId'               => 'ProjectOwnerBaseId',
        'useProxyOdpsAccount'              => 'UseProxyOdpsAccount',
        'disableDevelopment'               => 'DisableDevelopment',
        'projectMode'                      => 'ProjectMode',
        'gmtCreate'                        => 'GmtCreate',
        'devStorageQuota'                  => 'DevStorageQuota',
        'isDefault'                        => 'IsDefault',
        'protectedMode'                    => 'ProtectedMode',
        'baseProject'                      => 'BaseProject',
        'tenantId'                         => 'TenantId',
        'projectDescription'               => 'ProjectDescription',
        'appkey'                           => 'Appkey',
        'schedulerMaxRetryTimes'           => 'SchedulerMaxRetryTimes',
        'projectName'                      => 'ProjectName',
        'projectIdentifier'                => 'ProjectIdentifier',
        'projectId'                        => 'ProjectId',
        'status'                           => 'Status',
        'developmentType'                  => 'DevelopmentType',
        'envTypes'                         => 'EnvTypes',
    ];

    public function validate()
    {
        Model::validateRequired('gmtModified', $this->gmtModified, true);
        Model::validateRequired('maxFlowNode', $this->maxFlowNode, true);
        Model::validateRequired('defaultDiResourceGroupIdentifier', $this->defaultDiResourceGroupIdentifier, true);
        Model::validateRequired('destination', $this->destination, true);
        Model::validateRequired('isAllowDownload', $this->isAllowDownload, true);
        Model::validateRequired('prodStorageQuota', $this->prodStorageQuota, true);
        Model::validateRequired('schedulerRetryInterval', $this->schedulerRetryInterval, true);
        Model::validateRequired('residentArea', $this->residentArea, true);
        Model::validateRequired('tablePrivacyMode', $this->tablePrivacyMode, true);
        Model::validateRequired('projectOwnerBaseId', $this->projectOwnerBaseId, true);
        Model::validateRequired('useProxyOdpsAccount', $this->useProxyOdpsAccount, true);
        Model::validateRequired('disableDevelopment', $this->disableDevelopment, true);
        Model::validateRequired('projectMode', $this->projectMode, true);
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('devStorageQuota', $this->devStorageQuota, true);
        Model::validateRequired('isDefault', $this->isDefault, true);
        Model::validateRequired('protectedMode', $this->protectedMode, true);
        Model::validateRequired('baseProject', $this->baseProject, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
        Model::validateRequired('projectDescription', $this->projectDescription, true);
        Model::validateRequired('appkey', $this->appkey, true);
        Model::validateRequired('schedulerMaxRetryTimes', $this->schedulerMaxRetryTimes, true);
        Model::validateRequired('projectName', $this->projectName, true);
        Model::validateRequired('projectIdentifier', $this->projectIdentifier, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('developmentType', $this->developmentType, true);
        Model::validateRequired('envTypes', $this->envTypes, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->maxFlowNode) {
            $res['MaxFlowNode'] = $this->maxFlowNode;
        }
        if (null !== $this->defaultDiResourceGroupIdentifier) {
            $res['DefaultDiResourceGroupIdentifier'] = $this->defaultDiResourceGroupIdentifier;
        }
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }
        if (null !== $this->isAllowDownload) {
            $res['IsAllowDownload'] = $this->isAllowDownload;
        }
        if (null !== $this->prodStorageQuota) {
            $res['ProdStorageQuota'] = $this->prodStorageQuota;
        }
        if (null !== $this->schedulerRetryInterval) {
            $res['SchedulerRetryInterval'] = $this->schedulerRetryInterval;
        }
        if (null !== $this->residentArea) {
            $res['ResidentArea'] = $this->residentArea;
        }
        if (null !== $this->tablePrivacyMode) {
            $res['TablePrivacyMode'] = $this->tablePrivacyMode;
        }
        if (null !== $this->projectOwnerBaseId) {
            $res['ProjectOwnerBaseId'] = $this->projectOwnerBaseId;
        }
        if (null !== $this->useProxyOdpsAccount) {
            $res['UseProxyOdpsAccount'] = $this->useProxyOdpsAccount;
        }
        if (null !== $this->disableDevelopment) {
            $res['DisableDevelopment'] = $this->disableDevelopment;
        }
        if (null !== $this->projectMode) {
            $res['ProjectMode'] = $this->projectMode;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->devStorageQuota) {
            $res['DevStorageQuota'] = $this->devStorageQuota;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->protectedMode) {
            $res['ProtectedMode'] = $this->protectedMode;
        }
        if (null !== $this->baseProject) {
            $res['BaseProject'] = $this->baseProject;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->projectDescription) {
            $res['ProjectDescription'] = $this->projectDescription;
        }
        if (null !== $this->appkey) {
            $res['Appkey'] = $this->appkey;
        }
        if (null !== $this->schedulerMaxRetryTimes) {
            $res['SchedulerMaxRetryTimes'] = $this->schedulerMaxRetryTimes;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->developmentType) {
            $res['DevelopmentType'] = $this->developmentType;
        }
        if (null !== $this->envTypes) {
            $res['EnvTypes'] = [];
            if (null !== $this->envTypes) {
                $res['EnvTypes'] = $this->envTypes;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['MaxFlowNode'])) {
            $model->maxFlowNode = $map['MaxFlowNode'];
        }
        if (isset($map['DefaultDiResourceGroupIdentifier'])) {
            $model->defaultDiResourceGroupIdentifier = $map['DefaultDiResourceGroupIdentifier'];
        }
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }
        if (isset($map['IsAllowDownload'])) {
            $model->isAllowDownload = $map['IsAllowDownload'];
        }
        if (isset($map['ProdStorageQuota'])) {
            $model->prodStorageQuota = $map['ProdStorageQuota'];
        }
        if (isset($map['SchedulerRetryInterval'])) {
            $model->schedulerRetryInterval = $map['SchedulerRetryInterval'];
        }
        if (isset($map['ResidentArea'])) {
            $model->residentArea = $map['ResidentArea'];
        }
        if (isset($map['TablePrivacyMode'])) {
            $model->tablePrivacyMode = $map['TablePrivacyMode'];
        }
        if (isset($map['ProjectOwnerBaseId'])) {
            $model->projectOwnerBaseId = $map['ProjectOwnerBaseId'];
        }
        if (isset($map['UseProxyOdpsAccount'])) {
            $model->useProxyOdpsAccount = $map['UseProxyOdpsAccount'];
        }
        if (isset($map['DisableDevelopment'])) {
            $model->disableDevelopment = $map['DisableDevelopment'];
        }
        if (isset($map['ProjectMode'])) {
            $model->projectMode = $map['ProjectMode'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['DevStorageQuota'])) {
            $model->devStorageQuota = $map['DevStorageQuota'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['ProtectedMode'])) {
            $model->protectedMode = $map['ProtectedMode'];
        }
        if (isset($map['BaseProject'])) {
            $model->baseProject = $map['BaseProject'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['ProjectDescription'])) {
            $model->projectDescription = $map['ProjectDescription'];
        }
        if (isset($map['Appkey'])) {
            $model->appkey = $map['Appkey'];
        }
        if (isset($map['SchedulerMaxRetryTimes'])) {
            $model->schedulerMaxRetryTimes = $map['SchedulerMaxRetryTimes'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DevelopmentType'])) {
            $model->developmentType = $map['DevelopmentType'];
        }
        if (isset($map['EnvTypes'])) {
            if (!empty($map['EnvTypes'])) {
                $model->envTypes = [];
                $model->envTypes = $map['EnvTypes'];
            }
        }

        return $model;
    }
}
