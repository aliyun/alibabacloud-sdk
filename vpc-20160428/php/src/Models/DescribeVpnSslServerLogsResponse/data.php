<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnSslServerLogsResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var array
     */
    public $logs;
    protected $_name = [
        'logs' => 'Logs',
    ];

    public function validate()
    {
        Model::validateRequired('logs', $this->logs, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logs) {
            $res['Logs'] = $this->logs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Logs'])) {
            if (!empty($map['Logs'])) {
                $model->logs = $map['Logs'];
            }
        }

        return $model;
    }
}
