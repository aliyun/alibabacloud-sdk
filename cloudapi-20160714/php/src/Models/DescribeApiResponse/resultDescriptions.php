<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponse;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponse\resultDescriptions\resultDescription;
use AlibabaCloud\Tea\Model;

class resultDescriptions extends Model
{
    /**
     * @description ResultDescription
     *
     * @var array
     */
    public $resultDescription;
    protected $_name = [
        'resultDescription' => 'ResultDescription',
    ];

    public function validate()
    {
        Model::validateRequired('resultDescription', $this->resultDescription, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resultDescription) {
            $res['ResultDescription'] = [];
            if (null !== $this->resultDescription && \is_array($this->resultDescription)) {
                $n = 0;
                foreach ($this->resultDescription as $item) {
                    $res['ResultDescription'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultDescriptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResultDescription'])) {
            if (!empty($map['ResultDescription'])) {
                $model->resultDescription = [];
                $n                        = 0;
                foreach ($map['ResultDescription'] as $item) {
                    $model->resultDescription[$n++] = null !== $item ? resultDescription::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
