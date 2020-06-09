// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DeleteAccessRuleRequest extends TeaModel {
    @NameInMap("AccessGroupName")
    @Validation(required = true)
    public String accessGroupName;

    @NameInMap("AccessRuleId")
    @Validation(required = true)
    public String accessRuleId;

    @NameInMap("FileSystemType")
    public String fileSystemType;

    public static DeleteAccessRuleRequest build(java.util.Map<String, ?> map) throws Exception {
        DeleteAccessRuleRequest self = new DeleteAccessRuleRequest();
        return TeaModel.build(map, self);
    }

}
