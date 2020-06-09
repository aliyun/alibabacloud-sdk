// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DescribeLogAnalysisRequest extends TeaModel {
    @NameInMap("RegionId")
    @Validation(required = true)
    public String regionId;

    public static DescribeLogAnalysisRequest build(java.util.Map<String, ?> map) throws Exception {
        DescribeLogAnalysisRequest self = new DescribeLogAnalysisRequest();
        return TeaModel.build(map, self);
    }

}
