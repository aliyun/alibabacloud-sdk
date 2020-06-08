<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourceUsageResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'DBInstanceId' => 'DBInstanceId',
        'engine' => 'Engine',
        'diskUsed' => 'DiskUsed',
        'dataSize' => 'DataSize',
        'logSize' => 'LogSize',
        'backupSize' => 'BackupSize',
        'backupOssDataSize' => 'BackupOssDataSize',
        'backupOssLogSize' => 'BackupOssLogSize',
        'SQLSize' => 'SQLSize',
        'coldBackupSize' => 'ColdBackupSize',
        'backupDataSize' => 'BackupDataSize',
        'backupLogSize' => 'BackupLogSize',
        'paidBackupSize' => 'PaidBackupSize',
        'archiveBackupSize' => 'ArchiveBackupSize',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('diskUsed', $this->diskUsed, true);
        Model::validateRequired('dataSize', $this->dataSize, true);
        Model::validateRequired('logSize', $this->logSize, true);
        Model::validateRequired('backupSize', $this->backupSize, true);
        Model::validateRequired('backupOssDataSize', $this->backupOssDataSize, true);
        Model::validateRequired('backupOssLogSize', $this->backupOssLogSize, true);
        Model::validateRequired('SQLSize', $this->SQLSize, true);
        Model::validateRequired('coldBackupSize', $this->coldBackupSize, true);
        Model::validateRequired('backupDataSize', $this->backupDataSize, true);
        Model::validateRequired('backupLogSize', $this->backupLogSize, true);
        Model::validateRequired('paidBackupSize', $this->paidBackupSize, true);
        Model::validateRequired('archiveBackupSize', $this->archiveBackupSize, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['Engine'] = $this->engine;
        $res['DiskUsed'] = $this->diskUsed;
        $res['DataSize'] = $this->dataSize;
        $res['LogSize'] = $this->logSize;
        $res['BackupSize'] = $this->backupSize;
        $res['BackupOssDataSize'] = $this->backupOssDataSize;
        $res['BackupOssLogSize'] = $this->backupOssLogSize;
        $res['SQLSize'] = $this->SQLSize;
        $res['ColdBackupSize'] = $this->coldBackupSize;
        $res['BackupDataSize'] = $this->backupDataSize;
        $res['BackupLogSize'] = $this->backupLogSize;
        $res['PaidBackupSize'] = $this->paidBackupSize;
        $res['ArchiveBackupSize'] = $this->archiveBackupSize;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeResourceUsageResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['Engine'])){
            $model->engine = $map['Engine'];
        }
        if(isset($map['DiskUsed'])){
            $model->diskUsed = $map['DiskUsed'];
        }
        if(isset($map['DataSize'])){
            $model->dataSize = $map['DataSize'];
        }
        if(isset($map['LogSize'])){
            $model->logSize = $map['LogSize'];
        }
        if(isset($map['BackupSize'])){
            $model->backupSize = $map['BackupSize'];
        }
        if(isset($map['BackupOssDataSize'])){
            $model->backupOssDataSize = $map['BackupOssDataSize'];
        }
        if(isset($map['BackupOssLogSize'])){
            $model->backupOssLogSize = $map['BackupOssLogSize'];
        }
        if(isset($map['SQLSize'])){
            $model->SQLSize = $map['SQLSize'];
        }
        if(isset($map['ColdBackupSize'])){
            $model->coldBackupSize = $map['ColdBackupSize'];
        }
        if(isset($map['BackupDataSize'])){
            $model->backupDataSize = $map['BackupDataSize'];
        }
        if(isset($map['BackupLogSize'])){
            $model->backupLogSize = $map['BackupLogSize'];
        }
        if(isset($map['PaidBackupSize'])){
            $model->paidBackupSize = $map['PaidBackupSize'];
        }
        if(isset($map['ArchiveBackupSize'])){
            $model->archiveBackupSize = $map['ArchiveBackupSize'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.dbInstanceName
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description data.engine
     * @var string
     */
    public $engine;

    /**
     * @description data.diskUsed
     * @var integer
     */
    public $diskUsed;

    /**
     * @description data.dataSize
     * @var integer
     */
    public $dataSize;

    /**
     * @description data.logSize
     * @var integer
     */
    public $logSize;

    /**
     * @description data.backupSize
     * @var integer
     */
    public $backupSize;

    /**
     * @description data.backupOssSize
     * @var integer
     */
    public $backupOssDataSize;

    /**
     * @description data.logOssSize
     * @var integer
     */
    public $backupOssLogSize;

    /**
     * @description data.sqlSize
     * @var integer
     */
    public $SQLSize;

    /**
     * @description data.coldBackupSize
     * @var integer
     */
    public $coldBackupSize;

    /**
     * @description data.backupDataSize
     * @var integer
     */
    public $backupDataSize;

    /**
     * @description data.backupLogSize
     * @var integer
     */
    public $backupLogSize;

    /**
     * @description data.paidBackupSize
     * @var integer
     */
    public $paidBackupSize;

    /**
     * @description data.archiveBackupSize
     * @var integer
     */
    public $archiveBackupSize;

}
