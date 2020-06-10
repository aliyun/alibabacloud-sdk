<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotLinksResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotLinksResponse\snapshotLinks\snapshotLink;
use AlibabaCloud\Tea\Model;

class snapshotLinks extends Model
{
    /**
     * @description SnapshotLink
     *
     * @var array
     */
    public $snapshotLink;
    protected $_name = [
        'snapshotLink' => 'SnapshotLink',
    ];

    public function validate()
    {
        Model::validateRequired('snapshotLink', $this->snapshotLink, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->snapshotLink) {
            $res['SnapshotLink'] = [];
            if (null !== $this->snapshotLink && \is_array($this->snapshotLink)) {
                $n = 0;
                foreach ($this->snapshotLink as $item) {
                    $res['SnapshotLink'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snapshotLinks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SnapshotLink'])) {
            if (!empty($map['SnapshotLink'])) {
                $model->snapshotLink = [];
                $n                   = 0;
                foreach ($map['SnapshotLink'] as $item) {
                    $model->snapshotLink[$n++] = null !== $item ? snapshotLink::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
