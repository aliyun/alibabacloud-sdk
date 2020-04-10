// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cs20151215.models;

import com.aliyun.tea.*;

public class UpdateServiceMeshResponse extends TeaModel {
    @NameInMap("headers")
    @Validation(required = true)
    public java.util.Map<String, String> headers;

    @NameInMap("body")
    @Validation(required = true)
    public UpdateServiceMeshResponseBody body;

    public static UpdateServiceMeshResponse build(java.util.Map<String, ?> map) throws Exception {
        UpdateServiceMeshResponse self = new UpdateServiceMeshResponse();
        return TeaModel.build(map, self);
    }

}
