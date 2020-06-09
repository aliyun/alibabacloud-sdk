// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DescribeAutoSnapshotPoliciesRequest extends TeaModel {
    @NameInMap("AutoSnapshotPolicyId")
    public String autoSnapshotPolicyId;

    @NameInMap("PageSize")
    public Integer pageSize;

    @NameInMap("PageNumber")
    public Integer pageNumber;

    @NameInMap("FileSystemType")
    @Validation(required = true)
    public String fileSystemType;

    public static DescribeAutoSnapshotPoliciesRequest build(java.util.Map<String, ?> map) throws Exception {
        DescribeAutoSnapshotPoliciesRequest self = new DescribeAutoSnapshotPoliciesRequest();
        return TeaModel.build(map, self);
    }

}
