<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeLogBackupFilesResponse;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeLogBackupFilesResponse\items\binLogFile;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description BinLogFile
     *
     * @var array
     */
    public $binLogFile;
    protected $_name = [
        'binLogFile' => 'BinLogFile',
    ];

    public function validate()
    {
        Model::validateRequired('binLogFile', $this->binLogFile, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->binLogFile) {
            $res['BinLogFile'] = [];
            if (null !== $this->binLogFile && \is_array($this->binLogFile)) {
                $n = 0;
                foreach ($this->binLogFile as $item) {
                    $res['BinLogFile'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['BinLogFile'])) {
            if (!empty($map['BinLogFile'])) {
                $model->binLogFile = [];
                $n                 = 0;
                foreach ($map['BinLogFile'] as $item) {
                    $model->binLogFile[$n++] = null !== $item ? binLogFile::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
