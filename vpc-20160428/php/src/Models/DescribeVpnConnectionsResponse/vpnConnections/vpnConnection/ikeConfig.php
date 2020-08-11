<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponse\vpnConnections\vpnConnection;

use AlibabaCloud\Tea\Model;

class ikeConfig extends Model
{
    /**
     * @var string
     */
    public $psk;

    /**
     * @var string
     */
    public $ikeVersion;

    /**
     * @var string
     */
    public $ikeMode;

    /**
     * @var string
     */
    public $ikeEncAlg;

    /**
     * @var string
     */
    public $ikeAuthAlg;

    /**
     * @var string
     */
    public $ikePfs;

    /**
     * @var int
     */
    public $ikeLifetime;

    /**
     * @var string
     */
    public $localId;

    /**
     * @var string
     */
    public $remoteId;
    protected $_name = [
        'psk'         => 'Psk',
        'ikeVersion'  => 'IkeVersion',
        'ikeMode'     => 'IkeMode',
        'ikeEncAlg'   => 'IkeEncAlg',
        'ikeAuthAlg'  => 'IkeAuthAlg',
        'ikePfs'      => 'IkePfs',
        'ikeLifetime' => 'IkeLifetime',
        'localId'     => 'LocalId',
        'remoteId'    => 'RemoteId',
    ];

    public function validate()
    {
        Model::validateRequired('psk', $this->psk, true);
        Model::validateRequired('ikeVersion', $this->ikeVersion, true);
        Model::validateRequired('ikeMode', $this->ikeMode, true);
        Model::validateRequired('ikeEncAlg', $this->ikeEncAlg, true);
        Model::validateRequired('ikeAuthAlg', $this->ikeAuthAlg, true);
        Model::validateRequired('ikePfs', $this->ikePfs, true);
        Model::validateRequired('ikeLifetime', $this->ikeLifetime, true);
        Model::validateRequired('localId', $this->localId, true);
        Model::validateRequired('remoteId', $this->remoteId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->psk) {
            $res['Psk'] = $this->psk;
        }
        if (null !== $this->ikeVersion) {
            $res['IkeVersion'] = $this->ikeVersion;
        }
        if (null !== $this->ikeMode) {
            $res['IkeMode'] = $this->ikeMode;
        }
        if (null !== $this->ikeEncAlg) {
            $res['IkeEncAlg'] = $this->ikeEncAlg;
        }
        if (null !== $this->ikeAuthAlg) {
            $res['IkeAuthAlg'] = $this->ikeAuthAlg;
        }
        if (null !== $this->ikePfs) {
            $res['IkePfs'] = $this->ikePfs;
        }
        if (null !== $this->ikeLifetime) {
            $res['IkeLifetime'] = $this->ikeLifetime;
        }
        if (null !== $this->localId) {
            $res['LocalId'] = $this->localId;
        }
        if (null !== $this->remoteId) {
            $res['RemoteId'] = $this->remoteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ikeConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Psk'])) {
            $model->psk = $map['Psk'];
        }
        if (isset($map['IkeVersion'])) {
            $model->ikeVersion = $map['IkeVersion'];
        }
        if (isset($map['IkeMode'])) {
            $model->ikeMode = $map['IkeMode'];
        }
        if (isset($map['IkeEncAlg'])) {
            $model->ikeEncAlg = $map['IkeEncAlg'];
        }
        if (isset($map['IkeAuthAlg'])) {
            $model->ikeAuthAlg = $map['IkeAuthAlg'];
        }
        if (isset($map['IkePfs'])) {
            $model->ikePfs = $map['IkePfs'];
        }
        if (isset($map['IkeLifetime'])) {
            $model->ikeLifetime = $map['IkeLifetime'];
        }
        if (isset($map['LocalId'])) {
            $model->localId = $map['LocalId'];
        }
        if (isset($map['RemoteId'])) {
            $model->remoteId = $map['RemoteId'];
        }

        return $model;
    }
}
