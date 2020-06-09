<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class CreateBackupResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'backupJobId' => 'BackupJobId',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('backupJobId', $this->backupJobId, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['BackupJobId'] = $this->backupJobId;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateBackupResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['BackupJobId'])){
            $model->backupJobId = $map['BackupJobId'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.backupjobId
     * @var string
     */
    public $backupJobId;

}
