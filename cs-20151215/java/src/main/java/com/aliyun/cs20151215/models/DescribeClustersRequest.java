// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cs20151215.models;

import com.aliyun.tea.*;

public class DescribeClustersRequest extends TeaModel {
    @NameInMap("query")
    @Validation(required = true)
    public DescribeClustersQuery query;

    @NameInMap("headers")
    public java.util.Map<String, String> headers;

    public static DescribeClustersRequest build(java.util.Map<String, ?> map) throws Exception {
        DescribeClustersRequest self = new DescribeClustersRequest();
        return TeaModel.build(map, self);
    }

}
