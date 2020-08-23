<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponse;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponse\fileSystems\fileSystem;
use AlibabaCloud\Tea\Model;

class fileSystems extends Model
{
    /**
     * @var array
     */
    public $fileSystem;
    protected $_name = [
        'fileSystem' => 'FileSystem',
    ];

    public function validate()
    {
        Model::validateRequired('fileSystem', $this->fileSystem, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystem) {
            $res['FileSystem'] = [];
            if (null !== $this->fileSystem && \is_array($this->fileSystem)) {
                $n = 0;
                foreach ($this->fileSystem as $item) {
                    $res['FileSystem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileSystems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystem'])) {
            if (!empty($map['FileSystem'])) {
                $model->fileSystem = [];
                $n                 = 0;
                foreach ($map['FileSystem'] as $item) {
                    $model->fileSystem[$n++] = null !== $item ? fileSystem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
