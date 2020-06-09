// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class CreateAccessRuleRequest extends TeaModel {
    @NameInMap("AccessGroupName")
    @Validation(required = true)
    public String accessGroupName;

    @NameInMap("SourceCidrIp")
    @Validation(required = true)
    public String sourceCidrIp;

    @NameInMap("RWAccessType")
    public String RWAccessType;

    @NameInMap("UserAccessType")
    public String userAccessType;

    @NameInMap("Priority")
    public Integer priority;

    @NameInMap("FileSystemType")
    public String fileSystemType;

    public static CreateAccessRuleRequest build(java.util.Map<String, ?> map) throws Exception {
        CreateAccessRuleRequest self = new CreateAccessRuleRequest();
        return TeaModel.build(map, self);
    }

}
