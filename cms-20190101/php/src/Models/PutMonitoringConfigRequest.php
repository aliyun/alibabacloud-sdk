<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class PutMonitoringConfigRequest extends Model
{
    /**
     * @description autoInstall
     *
     * @var bool
     */
    public $autoInstall;

    /**
     * @description enableInstallAgentNewECS
     *
     * @var bool
     */
    public $enableInstallAgentNewECS;
    protected $_name = [
        'autoInstall'              => 'AutoInstall',
        'enableInstallAgentNewECS' => 'EnableInstallAgentNewECS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoInstall) {
            $res['AutoInstall'] = $this->autoInstall;
        }
        if (null !== $this->enableInstallAgentNewECS) {
            $res['EnableInstallAgentNewECS'] = $this->enableInstallAgentNewECS;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutMonitoringConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoInstall'])) {
            $model->autoInstall = $map['AutoInstall'];
        }
        if (isset($map['EnableInstallAgentNewECS'])) {
            $model->enableInstallAgentNewECS = $map['EnableInstallAgentNewECS'];
        }

        return $model;
    }
}
