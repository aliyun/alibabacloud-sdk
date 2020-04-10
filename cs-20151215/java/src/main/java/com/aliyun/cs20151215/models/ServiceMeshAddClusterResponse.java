// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cs20151215.models;

import com.aliyun.tea.*;

public class ServiceMeshAddClusterResponse extends TeaModel {
    @NameInMap("headers")
    @Validation(required = true)
    public java.util.Map<String, String> headers;

    @NameInMap("body")
    @Validation(required = true)
    public ServiceMeshAddClusterResponseBody body;

    public static ServiceMeshAddClusterResponse build(java.util.Map<String, ?> map) throws Exception {
        ServiceMeshAddClusterResponse self = new ServiceMeshAddClusterResponse();
        return TeaModel.build(map, self);
    }

}
