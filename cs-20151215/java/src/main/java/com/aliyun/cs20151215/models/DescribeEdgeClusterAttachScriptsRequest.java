// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cs20151215.models;

import com.aliyun.tea.*;

public class DescribeEdgeClusterAttachScriptsRequest extends TeaModel {
    @NameInMap("headers")
    public java.util.Map<String, String> headers;

    @NameInMap("query")
    @Validation(required = true)
    public DescribeEdgeClusterAttachScriptsQuery query;

    @NameInMap("body")
    @Validation(required = true)
    public DescribeEdgeClusterAttachScriptsBody body;

    public static DescribeEdgeClusterAttachScriptsRequest build(java.util.Map<String, ?> map) throws Exception {
        DescribeEdgeClusterAttachScriptsRequest self = new DescribeEdgeClusterAttachScriptsRequest();
        return TeaModel.build(map, self);
    }

}
