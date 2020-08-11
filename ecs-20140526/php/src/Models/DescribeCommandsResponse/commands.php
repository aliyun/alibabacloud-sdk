<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCommandsResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCommandsResponse\commands\command;
use AlibabaCloud\Tea\Model;

class commands extends Model
{
    /**
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
        $res = [];
        if (null !== $this->command) {
            $res['Command'] = [];
            if (null !== $this->command && \is_array($this->command)) {
                $n = 0;
                foreach ($this->command as $item) {
                    $res['Command'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commands
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Command'])) {
            if (!empty($map['Command'])) {
                $model->command = [];
                $n              = 0;
                foreach ($map['Command'] as $item) {
                    $model->command[$n++] = null !== $item ? command::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
