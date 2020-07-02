<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListFilesResponse\data;

use AlibabaCloud\Tea\Model;

class files extends Model
{
    /**
     * @description connName
     *
     * @var string
     */
    public $connectionName;

    /**
     * @description parentId
     *
     * @var int
     */
    public $parentId;

    /**
     * @description isOdps
     *
     * @var bool
     */
    public $isMaxCompute;

    /**
     * @description createTime
     *
     * @var int
     */
    public $createTime;

    /**
     * @description createUser
     *
     * @var string
     */
    public $createUser;

    /**
     * @description bizId
     *
     * @var int
     */
    public $bizId;

    /**
     * @description fileFolderId
     *
     * @var string
     */
    public $fileFolderId;

    /**
     * @description fileName
     *
     * @var string
     */
    public $fileName;

    /**
     * @description fileType
     *
     * @var int
     */
    public $fileType;

    /**
     * @description useType
     *
     * @var int
     */
    public $useType;

    /**
     * @description fileDesc
     *
     * @var string
     */
    public $fileDescription;

    /**
     * @description content
     *
     * @var string
     */
    public $content;

    /**
     * @description cloudUuid
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description currentVersion
     *
     * @var int
     */
    public $currentVersion;

    /**
     * @description owner
     *
     * @var string
     */
    public $owner;

    /**
     * @description lastEditUser
     *
     * @var string
     */
    public $lastEditUser;

    /**
     * @description lastEditTime
     *
     * @var int
     */
    public $lastEditTime;

    /**
     * @description commitStatus
     *
     * @var int
     */
    public $commitStatus;
    protected $_name = [
        'connectionName'  => 'ConnectionName',
        'parentId'        => 'ParentId',
        'isMaxCompute'    => 'IsMaxCompute',
        'createTime'      => 'CreateTime',
        'createUser'      => 'CreateUser',
        'bizId'           => 'BizId',
        'fileFolderId'    => 'FileFolderId',
        'fileName'        => 'FileName',
        'fileType'        => 'FileType',
        'useType'         => 'UseType',
        'fileDescription' => 'FileDescription',
        'content'         => 'Content',
        'nodeId'          => 'NodeId',
        'currentVersion'  => 'CurrentVersion',
        'owner'           => 'Owner',
        'lastEditUser'    => 'LastEditUser',
        'lastEditTime'    => 'LastEditTime',
        'commitStatus'    => 'CommitStatus',
    ];

    public function validate()
    {
        Model::validateRequired('connectionName', $this->connectionName, true);
        Model::validateRequired('parentId', $this->parentId, true);
        Model::validateRequired('isMaxCompute', $this->isMaxCompute, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('createUser', $this->createUser, true);
        Model::validateRequired('bizId', $this->bizId, true);
        Model::validateRequired('fileFolderId', $this->fileFolderId, true);
        Model::validateRequired('fileName', $this->fileName, true);
        Model::validateRequired('fileType', $this->fileType, true);
        Model::validateRequired('useType', $this->useType, true);
        Model::validateRequired('fileDescription', $this->fileDescription, true);
        Model::validateRequired('content', $this->content, true);
        Model::validateRequired('nodeId', $this->nodeId, true);
        Model::validateRequired('currentVersion', $this->currentVersion, true);
        Model::validateRequired('owner', $this->owner, true);
        Model::validateRequired('lastEditUser', $this->lastEditUser, true);
        Model::validateRequired('lastEditTime', $this->lastEditTime, true);
        Model::validateRequired('commitStatus', $this->commitStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionName) {
            $res['ConnectionName'] = $this->connectionName;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->isMaxCompute) {
            $res['IsMaxCompute'] = $this->isMaxCompute;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->fileFolderId) {
            $res['FileFolderId'] = $this->fileFolderId;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->useType) {
            $res['UseType'] = $this->useType;
        }
        if (null !== $this->fileDescription) {
            $res['FileDescription'] = $this->fileDescription;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->currentVersion) {
            $res['CurrentVersion'] = $this->currentVersion;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->lastEditUser) {
            $res['LastEditUser'] = $this->lastEditUser;
        }
        if (null !== $this->lastEditTime) {
            $res['LastEditTime'] = $this->lastEditTime;
        }
        if (null !== $this->commitStatus) {
            $res['CommitStatus'] = $this->commitStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return files
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionName'])) {
            $model->connectionName = $map['ConnectionName'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['IsMaxCompute'])) {
            $model->isMaxCompute = $map['IsMaxCompute'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['FileFolderId'])) {
            $model->fileFolderId = $map['FileFolderId'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['UseType'])) {
            $model->useType = $map['UseType'];
        }
        if (isset($map['FileDescription'])) {
            $model->fileDescription = $map['FileDescription'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['CurrentVersion'])) {
            $model->currentVersion = $map['CurrentVersion'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['LastEditUser'])) {
            $model->lastEditUser = $map['LastEditUser'];
        }
        if (isset($map['LastEditTime'])) {
            $model->lastEditTime = $map['LastEditTime'];
        }
        if (isset($map['CommitStatus'])) {
            $model->commitStatus = $map['CommitStatus'];
        }

        return $model;
    }
}
