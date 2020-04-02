<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\SearchFaceResponse\data;

use AlibabaCloud\SDK\Facebody\V20191230\Facebody\matchList\location;
use AlibabaCloud\Tea\Model;

class matchList extends Model
{
    /**
     * @description faceItems
     *
     * @var array
     */
    public $faceItems;
    /**
     * @description location
     *
     * @var matchList.location
     */
    public $location;
    protected $_name = [
        'faceItems' => 'FaceItems',
        'location'  => 'Location',
    ];

    public function validate()
    {
        Model::validateRequired('faceItems', $this->faceItems, true);
        Model::validateRequired('location', $this->location, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['FaceItems'] = [];
        if (null !== $this->faceItems && \is_array($this->faceItems)) {
            $n = 0;
            foreach ($this->faceItems as $item) {
                $res['FaceItems'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['Location'] = null !== $this->location ? $this->location->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return matchList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceItems'])) {
            if (!empty($map['FaceItems'])) {
                $model->faceItems = [];
                $n                = 0;
                foreach ($map['FaceItems'] as $item) {
                    $model->faceItems[$n++] = null !== $item ? SearchFaceResponse\data\matchList\faceItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Location'])) {
            $model->location = matchList\location::fromMap($map['Location']);
        }

        return $model;
    }
}
