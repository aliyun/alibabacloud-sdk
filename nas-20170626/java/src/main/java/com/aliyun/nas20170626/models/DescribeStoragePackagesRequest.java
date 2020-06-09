// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DescribeStoragePackagesRequest extends TeaModel {
    @NameInMap("RegionId")
    @Validation(required = true)
    public String regionId;

    @NameInMap("PageSize")
    public Integer pageSize;

    @NameInMap("UseUTCDateTime")
    public Boolean useUTCDateTime;

    @NameInMap("PageNumber")
    public Integer pageNumber;

    public static DescribeStoragePackagesRequest build(java.util.Map<String, ?> map) throws Exception {
        DescribeStoragePackagesRequest self = new DescribeStoragePackagesRequest();
        return TeaModel.build(map, self);
    }

}
