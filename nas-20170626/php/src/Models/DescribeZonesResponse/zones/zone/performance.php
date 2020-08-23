<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeZonesResponse\zones\zone;

use AlibabaCloud\Tea\Model;

class performance extends Model
{
    /**
     * @description Protocol
     *
     * @var array
     */
    public $protocol;
    protected $_name = [
        'protocol' => 'Protocol',
    ];

    public function validate()
    {
        Model::validateRequired('protocol', $this->protocol, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return performance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Protocol'])) {
            if (!empty($map['Protocol'])) {
                $model->protocol = $map['Protocol'];
            }
        }

        return $model;
    }
}
