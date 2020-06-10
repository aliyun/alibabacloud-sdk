<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDatabasesResponse;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDatabasesResponse\databases\database;
use AlibabaCloud\Tea\Model;

class databases extends Model
{
    /**
     * @description Database
     *
     * @var array
     */
    public $database;
    protected $_name = [
        'database' => 'Database',
    ];

    public function validate()
    {
        Model::validateRequired('database', $this->database, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->database) {
            $res['Database'] = [];
            if (null !== $this->database && \is_array($this->database)) {
                $n = 0;
                foreach ($this->database as $item) {
                    $res['Database'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databases
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Database'])) {
            if (!empty($map['Database'])) {
                $model->database = [];
                $n               = 0;
                foreach ($map['Database'] as $item) {
                    $model->database[$n++] = null !== $item ? database::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
