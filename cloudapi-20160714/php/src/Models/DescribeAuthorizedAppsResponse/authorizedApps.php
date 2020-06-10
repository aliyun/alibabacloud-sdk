<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAuthorizedAppsResponse;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAuthorizedAppsResponse\authorizedApps\authorizedApp;
use AlibabaCloud\Tea\Model;

class authorizedApps extends Model
{
    /**
     * @description AuthorizedApp
     *
     * @var array
     */
    public $authorizedApp;
    protected $_name = [
        'authorizedApp' => 'AuthorizedApp',
    ];

    public function validate()
    {
        Model::validateRequired('authorizedApp', $this->authorizedApp, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizedApp) {
            $res['AuthorizedApp'] = [];
            if (null !== $this->authorizedApp && \is_array($this->authorizedApp)) {
                $n = 0;
                foreach ($this->authorizedApp as $item) {
                    $res['AuthorizedApp'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authorizedApps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizedApp'])) {
            if (!empty($map['AuthorizedApp'])) {
                $model->authorizedApp = [];
                $n                    = 0;
                foreach ($map['AuthorizedApp'] as $item) {
                    $model->authorizedApp[$n++] = null !== $item ? authorizedApp::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
