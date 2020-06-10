<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateGtmAddressPoolRequest\addr;
use AlibabaCloud\Tea\Model;

class UpdateGtmAddressPoolRequest extends Model
{
    /**
     * @description lang
     *
     * @var string
     */
    public $lang;

    /**
     * @description addrPoolId
     *
     * @var string
     */
    public $addrPoolId;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description minAvailableAddrNum
     *
     * @var int
     */
    public $minAvailableAddrNum;

    /**
     * @description poolAddrList
     *
     * @var array
     */
    public $addr;
    protected $_name = [
        'lang'                => 'Lang',
        'addrPoolId'          => 'AddrPoolId',
        'name'                => 'Name',
        'type'                => 'Type',
        'minAvailableAddrNum' => 'MinAvailableAddrNum',
        'addr'                => 'Addr',
    ];

    public function validate()
    {
        Model::validateRequired('addrPoolId', $this->addrPoolId, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('addr', $this->addr, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->addrPoolId) {
            $res['AddrPoolId'] = $this->addrPoolId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->minAvailableAddrNum) {
            $res['MinAvailableAddrNum'] = $this->minAvailableAddrNum;
        }
        if (null !== $this->addr) {
            $res['Addr'] = [];
            if (null !== $this->addr && \is_array($this->addr)) {
                $n = 0;
                foreach ($this->addr as $item) {
                    $res['Addr'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGtmAddressPoolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['AddrPoolId'])) {
            $model->addrPoolId = $map['AddrPoolId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['MinAvailableAddrNum'])) {
            $model->minAvailableAddrNum = $map['MinAvailableAddrNum'];
        }
        if (isset($map['Addr'])) {
            if (!empty($map['Addr'])) {
                $model->addr = [];
                $n           = 0;
                foreach ($map['Addr'] as $item) {
                    $model->addr[$n++] = null !== $item ? addr::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
