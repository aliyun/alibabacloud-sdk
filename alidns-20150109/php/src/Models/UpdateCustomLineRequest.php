<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCustomLineRequest\ipSegment;
use AlibabaCloud\Tea\Model;

class UpdateCustomLineRequest extends Model
{
    /**
     * @description lang
     *
     * @var string
     */
    public $lang;

    /**
     * @description lineName
     *
     * @var string
     */
    public $lineName;

    /**
     * @description ipSegments
     *
     * @var array
     */
    public $ipSegment;

    /**
     * @description lineId
     *
     * @var int
     */
    public $lineId;
    protected $_name = [
        'lang'      => 'Lang',
        'lineName'  => 'LineName',
        'ipSegment' => 'IpSegment',
        'lineId'    => 'LineId',
    ];

    public function validate()
    {
        Model::validateRequired('lineId', $this->lineId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->lineName) {
            $res['LineName'] = $this->lineName;
        }
        if (null !== $this->ipSegment) {
            $res['IpSegment'] = [];
            if (null !== $this->ipSegment && \is_array($this->ipSegment)) {
                $n = 0;
                foreach ($this->ipSegment as $item) {
                    $res['IpSegment'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lineId) {
            $res['LineId'] = $this->lineId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCustomLineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['LineName'])) {
            $model->lineName = $map['LineName'];
        }
        if (isset($map['IpSegment'])) {
            if (!empty($map['IpSegment'])) {
                $model->ipSegment = [];
                $n                = 0;
                foreach ($map['IpSegment'] as $item) {
                    $model->ipSegment[$n++] = null !== $item ? ipSegment::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LineId'])) {
            $model->lineId = $map['LineId'];
        }

        return $model;
    }
}
