// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cs20151215.models;

import com.aliyun.tea.*;

public class DescribeEdgeClusterAttachScriptsResponseBody extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("config")
    @Validation(required = true)
    public String config;

    public static DescribeEdgeClusterAttachScriptsResponseBody build(java.util.Map<String, ?> map) throws Exception {
        DescribeEdgeClusterAttachScriptsResponseBody self = new DescribeEdgeClusterAttachScriptsResponseBody();
        return TeaModel.build(map, self);
    }

}
