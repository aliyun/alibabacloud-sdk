// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cs20151215.models;

import com.aliyun.tea.*;

public class ServiceMeshRemoveClusterResponseBody extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    public static ServiceMeshRemoveClusterResponseBody build(java.util.Map<String, ?> map) throws Exception {
        ServiceMeshRemoveClusterResponseBody self = new ServiceMeshRemoveClusterResponseBody();
        return TeaModel.build(map, self);
    }

}
