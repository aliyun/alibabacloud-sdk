<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppAttributesResponse;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAppAttributesResponse\apps\appAttribute;
use AlibabaCloud\Tea\Model;

class apps extends Model
{
    /**
     * @description AppAttribute
     *
     * @var array
     */
    public $appAttribute;
    protected $_name = [
        'appAttribute' => 'AppAttribute',
    ];

    public function validate()
    {
        Model::validateRequired('appAttribute', $this->appAttribute, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appAttribute) {
            $res['AppAttribute'] = [];
            if (null !== $this->appAttribute && \is_array($this->appAttribute)) {
                $n = 0;
                foreach ($this->appAttribute as $item) {
                    $res['AppAttribute'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppAttribute'])) {
            if (!empty($map['AppAttribute'])) {
                $model->appAttribute = [];
                $n                   = 0;
                foreach ($map['AppAttribute'] as $item) {
                    $model->appAttribute[$n++] = null !== $item ? appAttribute::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
