<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\DetectCelebrityResponse\data;

use AlibabaCloud\Tea\Model;

class faceRecognizeResults extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var array
     */
    public $faceBoxes;
    protected $_name = [
        'name'      => 'Name',
        'faceBoxes' => 'FaceBoxes',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('faceBoxes', $this->faceBoxes, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->faceBoxes) {
            $res['FaceBoxes'] = $this->faceBoxes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceRecognizeResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['FaceBoxes'])) {
            if (!empty($map['FaceBoxes'])) {
                $model->faceBoxes = $map['FaceBoxes'];
            }
        }

        return $model;
    }
}
