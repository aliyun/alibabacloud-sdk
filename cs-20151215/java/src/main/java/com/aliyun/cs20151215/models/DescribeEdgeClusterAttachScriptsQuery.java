// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cs20151215.models;

import com.aliyun.tea.*;

public class DescribeEdgeClusterAttachScriptsQuery extends TeaModel {
    @NameInMap("NamePrefix")
    @Validation(required = true)
    public String namePrefix;

    public static DescribeEdgeClusterAttachScriptsQuery build(java.util.Map<String, ?> map) throws Exception {
        DescribeEdgeClusterAttachScriptsQuery self = new DescribeEdgeClusterAttachScriptsQuery();
        return TeaModel.build(map, self);
    }

}
