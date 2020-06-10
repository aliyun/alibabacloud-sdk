<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DeleteExporterOutputRequest extends Model
{
    /**
     * @description outputName
     *
     * @var string
     */
    public $destName;
    protected $_name = [
        'destName' => 'DestName',
    ];

    public function validate()
    {
        Model::validateRequired('destName', $this->destName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destName) {
            $res['DestName'] = $this->destName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteExporterOutputRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestName'])) {
            $model->destName = $map['DestName'];
        }

        return $model;
    }
}
