// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cs20151215.models;

import com.aliyun.tea.*;

public class ServiceMeshApiServerResponse extends TeaModel {
    @NameInMap("headers")
    @Validation(required = true)
    public java.util.Map<String, String> headers;

    public static ServiceMeshApiServerResponse build(java.util.Map<String, ?> map) throws Exception {
        ServiceMeshApiServerResponse self = new ServiceMeshApiServerResponse();
        return TeaModel.build(map, self);
    }

}
