<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponse\fileSystems\fileSystem;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponse\fileSystems\fileSystem\packages\package;
use AlibabaCloud\Tea\Model;

class packages extends Model
{
    /**
     * @description Package
     *
     * @var array
     */
    public $package;
    protected $_name = [
        'package' => 'Package',
    ];

    public function validate()
    {
        Model::validateRequired('package', $this->package, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->package) {
            $res['Package'] = [];
            if (null !== $this->package && \is_array($this->package)) {
                $n = 0;
                foreach ($this->package as $item) {
                    $res['Package'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return packages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Package'])) {
            if (!empty($map['Package'])) {
                $model->package = [];
                $n              = 0;
                foreach ($map['Package'] as $item) {
                    $model->package[$n++] = null !== $item ? package::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
