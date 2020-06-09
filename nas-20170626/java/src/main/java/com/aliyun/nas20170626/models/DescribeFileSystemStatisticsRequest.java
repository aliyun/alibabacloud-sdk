// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DescribeFileSystemStatisticsRequest extends TeaModel {
    @NameInMap("PageSize")
    public Integer pageSize;

    @NameInMap("PageNumber")
    public Integer pageNumber;

    public static DescribeFileSystemStatisticsRequest build(java.util.Map<String, ?> map) throws Exception {
        DescribeFileSystemStatisticsRequest self = new DescribeFileSystemStatisticsRequest();
        return TeaModel.build(map, self);
    }

}
