// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cs20151215.models;

import com.aliyun.tea.*;

public class ServiceMeshRemoveClusterResponse extends TeaModel {
    @NameInMap("headers")
    @Validation(required = true)
    public java.util.Map<String, String> headers;

    @NameInMap("body")
    @Validation(required = true)
    public ServiceMeshRemoveClusterResponseBody body;

    public static ServiceMeshRemoveClusterResponse build(java.util.Map<String, ?> map) throws Exception {
        ServiceMeshRemoveClusterResponse self = new ServiceMeshRemoveClusterResponse();
        return TeaModel.build(map, self);
    }

}
