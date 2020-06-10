<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupTasksResponse;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupTasksResponse\items\backupJob;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description BackupJob
     *
     * @var array
     */
    public $backupJob;
    protected $_name = [
        'backupJob' => 'BackupJob',
    ];

    public function validate()
    {
        Model::validateRequired('backupJob', $this->backupJob, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupJob) {
            $res['BackupJob'] = [];
            if (null !== $this->backupJob && \is_array($this->backupJob)) {
                $n = 0;
                foreach ($this->backupJob as $item) {
                    $res['BackupJob'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupJob'])) {
            if (!empty($map['BackupJob'])) {
                $model->backupJob = [];
                $n                = 0;
                foreach ($map['BackupJob'] as $item) {
                    $model->backupJob[$n++] = null !== $item ? backupJob::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
