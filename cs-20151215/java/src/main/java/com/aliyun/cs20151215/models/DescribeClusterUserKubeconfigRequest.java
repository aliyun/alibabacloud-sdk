// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cs20151215.models;

import com.aliyun.tea.*;

public class DescribeClusterUserKubeconfigRequest extends TeaModel {
    @NameInMap("query")
    @Validation(required = true)
    public DescribeClusterUserKubeconfigQuery query;

    @NameInMap("headers")
    public java.util.Map<String, String> headers;

    public static DescribeClusterUserKubeconfigRequest build(java.util.Map<String, ?> map) throws Exception {
        DescribeClusterUserKubeconfigRequest self = new DescribeClusterUserKubeconfigRequest();
        return TeaModel.build(map, self);
    }

}
