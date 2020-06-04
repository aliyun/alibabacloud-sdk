// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.pts20190810.models;

import com.aliyun.tea.*;

public class StartDebuggingRequest extends TeaModel {
    @NameInMap("SceneId")
    @Validation(required = true)
    public String sceneId;

    public static StartDebuggingRequest build(java.util.Map<String, ?> map) throws Exception {
        StartDebuggingRequest self = new StartDebuggingRequest();
        return TeaModel.build(map, self);
    }

}
