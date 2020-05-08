<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\Models\UpdateContainerGroupRequest\container\livenessProbe;

use AlibabaCloud\Tea\Model;

class exec extends Model
{
    /**
     * @description livenessProbeExec
     *
     * @var array
     */
    public $command;
    protected $_name = [
        'command' => 'Command',
    ];

    public function validate()
    {
        Model::validateRequired('command', $this->command, true);
    }

    public function toMap()
    {
        $res            = [];
        $res['Command'] = [];
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return exec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Command'])) {
            if (!empty($map['Command'])) {
                $model->command = [];
                $model->command = $map['Command'];
            }
        }

        return $model;
    }
}
