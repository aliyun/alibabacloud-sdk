<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\AddCustomLineRequest\ipSegment;
use AlibabaCloud\Tea\Model;

class AddCustomLineRequest extends Model
{
    /**
     * @description lang
     *
     * @var string
     */
    public $lang;

    /**
     * @description domainName
     *
     * @var string
     */
    public $domainName;

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
    protected $_name = [
        'lang'       => 'Lang',
        'domainName' => 'DomainName',
        'lineName'   => 'LineName',
        'ipSegment'  => 'IpSegment',
    ];

    public function validate()
    {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('lineName', $this->lineName, true);
        Model::validateRequired('ipSegment', $this->ipSegment, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCustomLineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
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

        return $model;
    }
}
