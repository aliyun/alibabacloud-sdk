// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DescribeAccessRulesRequest extends TeaModel {
    @NameInMap("AccessGroupName")
    @Validation(required = true)
    public String accessGroupName;

    @NameInMap("AccessRuleId")
    public String accessRuleId;

    @NameInMap("PageSize")
    public Integer pageSize;

    @NameInMap("PageNumber")
    public Integer pageNumber;

    @NameInMap("FileSystemType")
    public String fileSystemType;

    public static DescribeAccessRulesRequest build(java.util.Map<String, ?> map) throws Exception {
        DescribeAccessRulesRequest self = new DescribeAccessRulesRequest();
        return TeaModel.build(map, self);
    }

}
