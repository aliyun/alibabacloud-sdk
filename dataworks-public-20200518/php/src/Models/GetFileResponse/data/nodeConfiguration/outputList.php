<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponse\data\nodeConfiguration;

use AlibabaCloud\Tea\Model;

class outputList extends Model
{
    /**
     * @description str
     *
     * @var string
     */
    public $output;

    /**
     * @description refTableName
     *
     * @var string
     */
    public $refTableName;
    protected $_name = [
        'output'       => 'Output',
        'refTableName' => 'RefTableName',
    ];

    public function validate()
    {
        Model::validateRequired('output', $this->output, true);
        Model::validateRequired('refTableName', $this->refTableName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->refTableName) {
            $res['RefTableName'] = $this->refTableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['RefTableName'])) {
            $model->refTableName = $map['RefTableName'];
        }

        return $model;
    }
}
