// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.tdsr20200101.models;

import com.aliyun.tea.*;

public class GetPolicyRequest extends TeaModel {
    @NameInMap("SubSceneId")
    public String subSceneId;

    @NameInMap("Type")
    public String type;

    @NameInMap("AccountId")
    public String accountId;

    public static GetPolicyRequest build(java.util.Map<String, ?> map) throws Exception {
        GetPolicyRequest self = new GetPolicyRequest();
        return TeaModel.build(map, self);
    }

}
