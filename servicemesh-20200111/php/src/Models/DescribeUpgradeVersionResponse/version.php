<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeUpgradeVersionResponse;

use AlibabaCloud\Tea\Model;

class version extends Model
{
    /**
     * @var string
     */
    public $istioVersion;

    /**
     * @var string
     */
    public $istioOperatorVersion;

    /**
     * @var string
     */
    public $kubernetesVersion;
    protected $_name = [
        'istioVersion'         => 'IstioVersion',
        'istioOperatorVersion' => 'IstioOperatorVersion',
        'kubernetesVersion'    => 'KubernetesVersion',
    ];

    public function validate()
    {
        Model::validateRequired('istioVersion', $this->istioVersion, true);
        Model::validateRequired('istioOperatorVersion', $this->istioOperatorVersion, true);
        Model::validateRequired('kubernetesVersion', $this->kubernetesVersion, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->istioVersion) {
            $res['IstioVersion'] = $this->istioVersion;
        }
        if (null !== $this->istioOperatorVersion) {
            $res['IstioOperatorVersion'] = $this->istioOperatorVersion;
        }
        if (null !== $this->kubernetesVersion) {
            $res['KubernetesVersion'] = $this->kubernetesVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return version
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IstioVersion'])) {
            $model->istioVersion = $map['IstioVersion'];
        }
        if (isset($map['IstioOperatorVersion'])) {
            $model->istioOperatorVersion = $map['IstioOperatorVersion'];
        }
        if (isset($map['KubernetesVersion'])) {
            $model->kubernetesVersion = $map['KubernetesVersion'];
        }

        return $model;
    }
}
