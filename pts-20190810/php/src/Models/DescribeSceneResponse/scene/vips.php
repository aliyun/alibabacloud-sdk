<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models\DescribeSceneResponse\scene;

use AlibabaCloud\Tea\Model;

class vips extends Model
{
    /**
     * @description domain
     *
     * @var string
     */
    public $domain;

    /**
     * @description enabled
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description ips
     *
     * @var array
     */
    public $ips;
    protected $_name = [
        'domain'  => 'Domain',
        'enabled' => 'Enabled',
        'ips'     => 'Ips',
    ];

    public function validate()
    {
        Model::validateRequired('domain', $this->domain, true);
        Model::validateRequired('enabled', $this->enabled, true);
        Model::validateRequired('ips', $this->ips, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->ips) {
            $res['Ips'] = [];
            if (null !== $this->ips) {
                $res['Ips'] = $this->ips;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vips
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Ips'])) {
            if (!empty($map['Ips'])) {
                $model->ips = [];
                $model->ips = $map['Ips'];
            }
        }

        return $model;
    }
}
