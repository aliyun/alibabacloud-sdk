// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class ModifyAccessRuleRequest extends TeaModel {
    @NameInMap("AccessGroupName")
    @Validation(required = true)
    public String accessGroupName;

    @NameInMap("AccessRuleId")
    @Validation(required = true)
    public String accessRuleId;

    @NameInMap("SourceCidrIp")
    public String sourceCidrIp;

    @NameInMap("RWAccessType")
    public String RWAccessType;

    @NameInMap("UserAccessType")
    public String userAccessType;

    @NameInMap("Priority")
    public Integer priority;

    @NameInMap("FileSystemType")
    public String fileSystemType;

    public static ModifyAccessRuleRequest build(java.util.Map<String, ?> map) throws Exception {
        ModifyAccessRuleRequest self = new ModifyAccessRuleRequest();
        return TeaModel.build(map, self);
    }

}
