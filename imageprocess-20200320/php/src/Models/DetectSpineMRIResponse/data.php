<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectSpineMRIResponse;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectSpineMRIResponse\data\discs;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectSpineMRIResponse\data\vertebras;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var array
     */
    public $discs;

    /**
     * @var array
     */
    public $vertebras;
    protected $_name = [
        'discs'     => 'Discs',
        'vertebras' => 'Vertebras',
    ];

    public function validate()
    {
        Model::validateRequired('discs', $this->discs, true);
        Model::validateRequired('vertebras', $this->vertebras, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->discs) {
            $res['Discs'] = [];
            if (null !== $this->discs && \is_array($this->discs)) {
                $n = 0;
                foreach ($this->discs as $item) {
                    $res['Discs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vertebras) {
            $res['Vertebras'] = [];
            if (null !== $this->vertebras && \is_array($this->vertebras)) {
                $n = 0;
                foreach ($this->vertebras as $item) {
                    $res['Vertebras'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Discs'])) {
            if (!empty($map['Discs'])) {
                $model->discs = [];
                $n            = 0;
                foreach ($map['Discs'] as $item) {
                    $model->discs[$n++] = null !== $item ? discs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Vertebras'])) {
            if (!empty($map['Vertebras'])) {
                $model->vertebras = [];
                $n                = 0;
                foreach ($map['Vertebras'] as $item) {
                    $model->vertebras[$n++] = null !== $item ? vertebras::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
