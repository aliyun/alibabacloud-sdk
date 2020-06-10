<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertHistoryListResponse\alarmHistoryList\alarmHistory;

use AlibabaCloud\Tea\Model;

class contactALIIMs extends Model
{
    /**
     * @description ContactALIIM
     *
     * @var array
     */
    public $contactALIIM;
    protected $_name = [
        'contactALIIM' => 'ContactALIIM',
    ];

    public function validate()
    {
        Model::validateRequired('contactALIIM', $this->contactALIIM, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactALIIM) {
            $res['ContactALIIM'] = [];
            if (null !== $this->contactALIIM) {
                $res['ContactALIIM'] = $this->contactALIIM;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contactALIIMs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactALIIM'])) {
            if (!empty($map['ContactALIIM'])) {
                $model->contactALIIM = [];
                $model->contactALIIM = $map['ContactALIIM'];
            }
        }

        return $model;
    }
}
