<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterAddonUpgradeStatusResponseBody\addonInfo;
use AlibabaCloud\Tea\Model;

class DescribeClusterAddonUpgradeStatusResponseBody extends Model
{
    /**
     * @description template
     *
     * @var string
     */
    public $template;

    /**
     * @description can_upgrade
     *
     * @var bool
     */
    public $canUpgrade;

    /**
     * @description addon_info
     *
     * @var addonInfo
     */
    public $addonInfo;
    protected $_name = [
        'template'   => 'template',
        'canUpgrade' => 'can_upgrade',
        'addonInfo'  => 'addon_info',
    ];

    public function validate()
    {
        Model::validateRequired('template', $this->template, true);
        Model::validateRequired('canUpgrade', $this->canUpgrade, true);
        Model::validateRequired('addonInfo', $this->addonInfo, true);
    }

    public function toMap()
    {
        $res                = [];
        $res['template']    = $this->template;
        $res['can_upgrade'] = $this->canUpgrade;
        $res['addon_info']  = null !== $this->addonInfo ? $this->addonInfo->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterAddonUpgradeStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['template'])) {
            $model->template = $map['template'];
        }
        if (isset($map['can_upgrade'])) {
            $model->canUpgrade = $map['can_upgrade'];
        }
        if (isset($map['addon_info'])) {
            $model->addonInfo = addonInfo::fromMap($map['addon_info']);
        }

        return $model;
    }
}
