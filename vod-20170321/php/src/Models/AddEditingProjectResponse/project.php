<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\AddEditingProjectResponse;

use AlibabaCloud\Tea\Model;

class project extends Model
{
    /**
     * @description projectId
     *
     * @var string
     */
    public $projectId;

    /**
     * @description utcCreate
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description utcModified
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description stateStr
     *
     * @var string
     */
    public $status;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description title
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'projectId'    => 'ProjectId',
        'creationTime' => 'CreationTime',
        'modifiedTime' => 'ModifiedTime',
        'status'       => 'Status',
        'description'  => 'Description',
        'title'        => 'Title',
    ];

    public function validate()
    {
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('title', $this->title, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return project
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
