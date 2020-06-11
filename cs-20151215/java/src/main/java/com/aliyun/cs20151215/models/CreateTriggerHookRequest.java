// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cs20151215.models;

import com.aliyun.tea.*;

public class CreateTriggerHookRequest extends TeaModel {
    @NameInMap("headers")
    public java.util.Map<String, String> headers;

    @NameInMap("body")
    public CreateTriggerHookBody body;

    public static CreateTriggerHookRequest build(java.util.Map<String, ?> map) throws Exception {
        CreateTriggerHookRequest self = new CreateTriggerHookRequest();
        return TeaModel.build(map, self);
    }

}
