// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cs20151215.models;

import com.aliyun.tea.*;

public class ScaleClusterResponse extends TeaModel {
    @NameInMap("headers")
    @Validation(required = true)
    public java.util.Map<String, String> headers;

    @NameInMap("body")
    @Validation(required = true)
    public ScaleClusterResponseBody body;

    public static ScaleClusterResponse build(java.util.Map<String, ?> map) throws Exception {
        ScaleClusterResponse self = new ScaleClusterResponse();
        return TeaModel.build(map, self);
    }

}
