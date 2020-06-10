<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanResponse;

use AlibabaCloud\SDK\Alidns\V20150109\Models\PreviewGtmRecoveryPlanResponse\previews\preview;
use AlibabaCloud\Tea\Model;

class previews extends Model
{
    /**
     * @description Preview
     *
     * @var array
     */
    public $preview;
    protected $_name = [
        'preview' => 'Preview',
    ];

    public function validate()
    {
        Model::validateRequired('preview', $this->preview, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->preview) {
            $res['Preview'] = [];
            if (null !== $this->preview && \is_array($this->preview)) {
                $n = 0;
                foreach ($this->preview as $item) {
                    $res['Preview'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return previews
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Preview'])) {
            if (!empty($map['Preview'])) {
                $model->preview = [];
                $n              = 0;
                foreach ($map['Preview'] as $item) {
                    $model->preview[$n++] = null !== $item ? preview::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
