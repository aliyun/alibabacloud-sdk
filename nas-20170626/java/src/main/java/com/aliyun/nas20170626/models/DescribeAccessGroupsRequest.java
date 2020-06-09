// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DescribeAccessGroupsRequest extends TeaModel {
    @NameInMap("AccessGroupName")
    public String accessGroupName;

    @NameInMap("PageSize")
    public Integer pageSize;

    @NameInMap("PageNumber")
    public Integer pageNumber;

    @NameInMap("UseUTCDateTime")
    public Boolean useUTCDateTime;

    @NameInMap("FileSystemType")
    public String fileSystemType;

    public static DescribeAccessGroupsRequest build(java.util.Map<String, ?> map) throws Exception {
        DescribeAccessGroupsRequest self = new DescribeAccessGroupsRequest();
        return TeaModel.build(map, self);
    }

}
