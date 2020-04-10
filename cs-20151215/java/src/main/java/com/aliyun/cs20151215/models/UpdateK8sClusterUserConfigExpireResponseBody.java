// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cs20151215.models;

import com.aliyun.tea.*;

public class UpdateK8sClusterUserConfigExpireResponseBody extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    public static UpdateK8sClusterUserConfigExpireResponseBody build(java.util.Map<String, ?> map) throws Exception {
        UpdateK8sClusterUserConfigExpireResponseBody self = new UpdateK8sClusterUserConfigExpireResponseBody();
        return TeaModel.build(map, self);
    }

}
