<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileVersionResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description fileVersion
     *
     * @var int
     */
    public $fileVersion;

    /**
     * @description fileContent
     *
     * @var string
     */
    public $fileContent;

    /**
     * @description filePropertyContent
     *
     * @var string
     */
    public $filePropertyContent;

    /**
     * @description nodeContent
     *
     * @var string
     */
    public $nodeContent;

    /**
     * @description comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description cloudUuid
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description isCurrentProd
     *
     * @var bool
     */
    public $isCurrentProd;

    /**
     * @description changeType
     *
     * @var string
     */
    public $changeType;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description fileName
     *
     * @var string
     */
    public $fileName;

    /**
     * @description commitUser
     *
     * @var string
     */
    public $commitUser;

    /**
     * @description commitTime
     *
     * @var int
     */
    public $commitTime;

    /**
     * @description useType
     *
     * @var string
     */
    public $useType;
    protected $_name = [
        'fileVersion'         => 'FileVersion',
        'fileContent'         => 'FileContent',
        'filePropertyContent' => 'FilePropertyContent',
        'nodeContent'         => 'NodeContent',
        'comment'             => 'Comment',
        'nodeId'              => 'NodeId',
        'isCurrentProd'       => 'IsCurrentProd',
        'changeType'          => 'ChangeType',
        'status'              => 'Status',
        'fileName'            => 'FileName',
        'commitUser'          => 'CommitUser',
        'commitTime'          => 'CommitTime',
        'useType'             => 'UseType',
    ];

    public function validate()
    {
        Model::validateRequired('fileVersion', $this->fileVersion, true);
        Model::validateRequired('fileContent', $this->fileContent, true);
        Model::validateRequired('filePropertyContent', $this->filePropertyContent, true);
        Model::validateRequired('nodeContent', $this->nodeContent, true);
        Model::validateRequired('comment', $this->comment, true);
        Model::validateRequired('nodeId', $this->nodeId, true);
        Model::validateRequired('isCurrentProd', $this->isCurrentProd, true);
        Model::validateRequired('changeType', $this->changeType, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('fileName', $this->fileName, true);
        Model::validateRequired('commitUser', $this->commitUser, true);
        Model::validateRequired('commitTime', $this->commitTime, true);
        Model::validateRequired('useType', $this->useType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileVersion) {
            $res['FileVersion'] = $this->fileVersion;
        }
        if (null !== $this->fileContent) {
            $res['FileContent'] = $this->fileContent;
        }
        if (null !== $this->filePropertyContent) {
            $res['FilePropertyContent'] = $this->filePropertyContent;
        }
        if (null !== $this->nodeContent) {
            $res['NodeContent'] = $this->nodeContent;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->isCurrentProd) {
            $res['IsCurrentProd'] = $this->isCurrentProd;
        }
        if (null !== $this->changeType) {
            $res['ChangeType'] = $this->changeType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->commitUser) {
            $res['CommitUser'] = $this->commitUser;
        }
        if (null !== $this->commitTime) {
            $res['CommitTime'] = $this->commitTime;
        }
        if (null !== $this->useType) {
            $res['UseType'] = $this->useType;
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
        if (isset($map['FileVersion'])) {
            $model->fileVersion = $map['FileVersion'];
        }
        if (isset($map['FileContent'])) {
            $model->fileContent = $map['FileContent'];
        }
        if (isset($map['FilePropertyContent'])) {
            $model->filePropertyContent = $map['FilePropertyContent'];
        }
        if (isset($map['NodeContent'])) {
            $model->nodeContent = $map['NodeContent'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['IsCurrentProd'])) {
            $model->isCurrentProd = $map['IsCurrentProd'];
        }
        if (isset($map['ChangeType'])) {
            $model->changeType = $map['ChangeType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['CommitUser'])) {
            $model->commitUser = $map['CommitUser'];
        }
        if (isset($map['CommitTime'])) {
            $model->commitTime = $map['CommitTime'];
        }
        if (isset($map['UseType'])) {
            $model->useType = $map['UseType'];
        }

        return $model;
    }
}
