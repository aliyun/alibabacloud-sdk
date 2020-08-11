<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionResponse;

use AlibabaCloud\Tea\Model;

class vpnBgpConfig extends Model
{
    /**
     * @var string
     */
    public $enableBgp;

    /**
     * @var string
     */
    public $tunnelCidr;

    /**
     * @var string
     */
    public $localBgpIp;

    /**
     * @var string
     */
    public $peerBgpIp;

    /**
     * @var string
     */
    public $localAsn;

    /**
     * @var string
     */
    public $peerAsn;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'enableBgp'  => 'EnableBgp',
        'tunnelCidr' => 'TunnelCidr',
        'localBgpIp' => 'LocalBgpIp',
        'peerBgpIp'  => 'PeerBgpIp',
        'localAsn'   => 'LocalAsn',
        'peerAsn'    => 'PeerAsn',
        'status'     => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('enableBgp', $this->enableBgp, true);
        Model::validateRequired('tunnelCidr', $this->tunnelCidr, true);
        Model::validateRequired('localBgpIp', $this->localBgpIp, true);
        Model::validateRequired('peerBgpIp', $this->peerBgpIp, true);
        Model::validateRequired('localAsn', $this->localAsn, true);
        Model::validateRequired('peerAsn', $this->peerAsn, true);
        Model::validateRequired('status', $this->status, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableBgp) {
            $res['EnableBgp'] = $this->enableBgp;
        }
        if (null !== $this->tunnelCidr) {
            $res['TunnelCidr'] = $this->tunnelCidr;
        }
        if (null !== $this->localBgpIp) {
            $res['LocalBgpIp'] = $this->localBgpIp;
        }
        if (null !== $this->peerBgpIp) {
            $res['PeerBgpIp'] = $this->peerBgpIp;
        }
        if (null !== $this->localAsn) {
            $res['LocalAsn'] = $this->localAsn;
        }
        if (null !== $this->peerAsn) {
            $res['PeerAsn'] = $this->peerAsn;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpnBgpConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableBgp'])) {
            $model->enableBgp = $map['EnableBgp'];
        }
        if (isset($map['TunnelCidr'])) {
            $model->tunnelCidr = $map['TunnelCidr'];
        }
        if (isset($map['LocalBgpIp'])) {
            $model->localBgpIp = $map['LocalBgpIp'];
        }
        if (isset($map['PeerBgpIp'])) {
            $model->peerBgpIp = $map['PeerBgpIp'];
        }
        if (isset($map['LocalAsn'])) {
            $model->localAsn = $map['LocalAsn'];
        }
        if (isset($map['PeerAsn'])) {
            $model->peerAsn = $map['PeerAsn'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
