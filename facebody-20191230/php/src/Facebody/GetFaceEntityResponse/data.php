<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\GetFaceEntityResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description dbName
     *
     * @var string
     */
    public $dbName;
    /**
     * @description entityId
     *
     * @var string
     */
    public $entityId;
    /**
     * @description labels
     *
     * @var string
     */
    public $labels;
    /**
     * @description faces
     *
     * @var array
     */
    public $faces;
    protected $_name = [
        'dbName'   => 'DbName',
        'entityId' => 'EntityId',
        'labels'   => 'Labels',
        'faces'    => 'Faces',
    ];

    public function validate()
    {
        Model::validateRequired('dbName', $this->dbName, true);
        Model::validateRequired('entityId', $this->entityId, true);
        Model::validateRequired('labels', $this->labels, true);
        Model::validateRequired('faces', $this->faces, true);
    }

    public function toMap()
    {
        $res             = [];
        $res['DbName']   = $this->dbName;
        $res['EntityId'] = $this->entityId;
        $res['Labels']   = $this->labels;
        $res['Faces']    = [];
        if (null !== $this->faces && \is_array($this->faces)) {
            $n = 0;
            foreach ($this->faces as $item) {
                $res['Faces'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['Faces'])) {
            if (!empty($map['Faces'])) {
                $model->faces = [];
                $n            = 0;
                foreach ($map['Faces'] as $item) {
                    $model->faces[$n++] = null !== $item ? GetFaceEntityResponse\data\faces::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
