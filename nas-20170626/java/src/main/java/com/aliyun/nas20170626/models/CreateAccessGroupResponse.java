// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class CreateAccessGroupResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("AccessGroupName")
    @Validation(required = true)
    public String accessGroupName;

    public static CreateAccessGroupResponse build(java.util.Map<String, ?> map) throws Exception {
        CreateAccessGroupResponse self = new CreateAccessGroupResponse();
        return TeaModel.build(map, self);
    }

}
