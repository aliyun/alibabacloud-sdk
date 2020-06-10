<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemStatisticsResponse;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemStatisticsResponse\fileSystemStatistics\fileSystemStatistic;
use AlibabaCloud\Tea\Model;

class fileSystemStatistics extends Model
{
    /**
     * @description FileSystemStatistic
     *
     * @var array
     */
    public $fileSystemStatistic;
    protected $_name = [
        'fileSystemStatistic' => 'FileSystemStatistic',
    ];

    public function validate()
    {
        Model::validateRequired('fileSystemStatistic', $this->fileSystemStatistic, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemStatistic) {
            $res['FileSystemStatistic'] = [];
            if (null !== $this->fileSystemStatistic && \is_array($this->fileSystemStatistic)) {
                $n = 0;
                foreach ($this->fileSystemStatistic as $item) {
                    $res['FileSystemStatistic'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileSystemStatistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemStatistic'])) {
            if (!empty($map['FileSystemStatistic'])) {
                $model->fileSystemStatistic = [];
                $n                          = 0;
                foreach ($map['FileSystemStatistic'] as $item) {
                    $model->fileSystemStatistic[$n++] = null !== $item ? fileSystemStatistic::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
