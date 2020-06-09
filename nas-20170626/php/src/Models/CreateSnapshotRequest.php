<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateSnapshotRequest extends Model {
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'snapshotName' => 'SnapshotName',
        'description' => 'Description',
        'retentionDays' => 'RetentionDays',
    ];
    public function validate() {
        Model::validateRequired('fileSystemId', $this->fileSystemId, true);
    }
    public function toMap() {
        $res = [];
        $res['FileSystemId'] = $this->fileSystemId;
        $res['SnapshotName'] = $this->snapshotName;
        $res['Description'] = $this->description;
        $res['RetentionDays'] = $this->retentionDays;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateSnapshotRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['FileSystemId'])){
            $model->fileSystemId = $map['FileSystemId'];
        }
        if(isset($map['SnapshotName'])){
            $model->snapshotName = $map['SnapshotName'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['RetentionDays'])){
            $model->retentionDays = $map['RetentionDays'];
        }
        return $model;
    }
    /**
     * @description volume
     * @var string
     */
    public $fileSystemId;

    /**
     * @description snapshotName
     * @var string
     */
    public $snapshotName;

    /**
     * @description description
     * @var string
     */
    public $description;

    /**
     * @description retentionDays
     * @var integer
     */
    public $retentionDays;

}
