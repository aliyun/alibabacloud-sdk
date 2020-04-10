// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cs20151215.models;

import com.aliyun.tea.*;

public class ServiceMeshAddClusterResponseBody extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    public static ServiceMeshAddClusterResponseBody build(java.util.Map<String, ?> map) throws Exception {
        ServiceMeshAddClusterResponseBody self = new ServiceMeshAddClusterResponseBody();
        return TeaModel.build(map, self);
    }

}
