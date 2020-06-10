<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponse\launchTemplateVersionSets\launchTemplateVersionSet\launchTemplateData;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponse\launchTemplateVersionSets\launchTemplateVersionSet\launchTemplateData\dataDisks\dataDisk;
use AlibabaCloud\Tea\Model;

class dataDisks extends Model
{
    /**
     * @description DataDisk
     *
     * @var array
     */
    public $dataDisk;
    protected $_name = [
        'dataDisk' => 'DataDisk',
    ];

    public function validate()
    {
        Model::validateRequired('dataDisk', $this->dataDisk, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataDisk) {
            $res['DataDisk'] = [];
            if (null !== $this->dataDisk && \is_array($this->dataDisk)) {
                $n = 0;
                foreach ($this->dataDisk as $item) {
                    $res['DataDisk'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataDisks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataDisk'])) {
            if (!empty($map['DataDisk'])) {
                $model->dataDisk = [];
                $n               = 0;
                foreach ($map['DataDisk'] as $item) {
                    $model->dataDisk[$n++] = null !== $item ? dataDisk::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
