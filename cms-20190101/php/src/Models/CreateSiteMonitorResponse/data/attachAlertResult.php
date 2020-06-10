<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateSiteMonitorResponse\data;

use AlibabaCloud\SDK\Cms\V20190101\Models\CreateSiteMonitorResponse\data\attachAlertResult\contact;
use AlibabaCloud\Tea\Model;

class attachAlertResult extends Model
{
    /**
     * @description Contact
     *
     * @var array
     */
    public $contact;
    protected $_name = [
        'contact' => 'Contact',
    ];

    public function validate()
    {
        Model::validateRequired('contact', $this->contact, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contact) {
            $res['Contact'] = [];
            if (null !== $this->contact && \is_array($this->contact)) {
                $n = 0;
                foreach ($this->contact as $item) {
                    $res['Contact'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attachAlertResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Contact'])) {
            if (!empty($map['Contact'])) {
                $model->contact = [];
                $n              = 0;
                foreach ($map['Contact'] as $item) {
                    $model->contact[$n++] = null !== $item ? contact::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
