<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerResponse;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportSwaggerResponse\modelFailed\apiImportModelFailed;
use AlibabaCloud\Tea\Model;

class modelFailed extends Model
{
    /**
     * @description ApiImportModelFailed
     *
     * @var array
     */
    public $apiImportModelFailed;
    protected $_name = [
        'apiImportModelFailed' => 'ApiImportModelFailed',
    ];

    public function validate()
    {
        Model::validateRequired('apiImportModelFailed', $this->apiImportModelFailed, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiImportModelFailed) {
            $res['ApiImportModelFailed'] = [];
            if (null !== $this->apiImportModelFailed && \is_array($this->apiImportModelFailed)) {
                $n = 0;
                foreach ($this->apiImportModelFailed as $item) {
                    $res['ApiImportModelFailed'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return modelFailed
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiImportModelFailed'])) {
            if (!empty($map['ApiImportModelFailed'])) {
                $model->apiImportModelFailed = [];
                $n                           = 0;
                foreach ($map['ApiImportModelFailed'] as $item) {
                    $model->apiImportModelFailed[$n++] = null !== $item ? apiImportModelFailed::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
