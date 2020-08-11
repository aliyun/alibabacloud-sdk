<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnConnectionAttributeResponse;

use AlibabaCloud\Tea\Model;

class ipsecConfig extends Model
{
    /**
     * @var string
     */
    public $ipsecEncAlg;

    /**
     * @var string
     */
    public $ipsecAuthAlg;

    /**
     * @var string
     */
    public $ipsecPfs;

    /**
     * @var int
     */
    public $ipsecLifetime;
    protected $_name = [
        'ipsecEncAlg'   => 'IpsecEncAlg',
        'ipsecAuthAlg'  => 'IpsecAuthAlg',
        'ipsecPfs'      => 'IpsecPfs',
        'ipsecLifetime' => 'IpsecLifetime',
    ];

    public function validate()
    {
        Model::validateRequired('ipsecEncAlg', $this->ipsecEncAlg, true);
        Model::validateRequired('ipsecAuthAlg', $this->ipsecAuthAlg, true);
        Model::validateRequired('ipsecPfs', $this->ipsecPfs, true);
        Model::validateRequired('ipsecLifetime', $this->ipsecLifetime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipsecEncAlg) {
            $res['IpsecEncAlg'] = $this->ipsecEncAlg;
        }
        if (null !== $this->ipsecAuthAlg) {
            $res['IpsecAuthAlg'] = $this->ipsecAuthAlg;
        }
        if (null !== $this->ipsecPfs) {
            $res['IpsecPfs'] = $this->ipsecPfs;
        }
        if (null !== $this->ipsecLifetime) {
            $res['IpsecLifetime'] = $this->ipsecLifetime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipsecConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpsecEncAlg'])) {
            $model->ipsecEncAlg = $map['IpsecEncAlg'];
        }
        if (isset($map['IpsecAuthAlg'])) {
            $model->ipsecAuthAlg = $map['IpsecAuthAlg'];
        }
        if (isset($map['IpsecPfs'])) {
            $model->ipsecPfs = $map['IpsecPfs'];
        }
        if (isset($map['IpsecLifetime'])) {
            $model->ipsecLifetime = $map['IpsecLifetime'];
        }

        return $model;
    }
}
