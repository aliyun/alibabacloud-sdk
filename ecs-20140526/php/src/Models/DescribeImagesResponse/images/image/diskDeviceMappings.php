<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesResponse\images\image;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesResponse\images\image\diskDeviceMappings\diskDeviceMapping;
use AlibabaCloud\Tea\Model;

class diskDeviceMappings extends Model
{
    /**
     * @var array
     */
    public $diskDeviceMapping;
    protected $_name = [
        'diskDeviceMapping' => 'DiskDeviceMapping',
    ];

    public function validate()
    {
        Model::validateRequired('diskDeviceMapping', $this->diskDeviceMapping, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskDeviceMapping) {
            $res['DiskDeviceMapping'] = [];
            if (null !== $this->diskDeviceMapping && \is_array($this->diskDeviceMapping)) {
                $n = 0;
                foreach ($this->diskDeviceMapping as $item) {
                    $res['DiskDeviceMapping'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskDeviceMappings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskDeviceMapping'])) {
            if (!empty($map['DiskDeviceMapping'])) {
                $model->diskDeviceMapping = [];
                $n                        = 0;
                foreach ($map['DiskDeviceMapping'] as $item) {
                    $model->diskDeviceMapping[$n++] = null !== $item ? diskDeviceMapping::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
