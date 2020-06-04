// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.pts20190810.models;

import com.aliyun.tea.*;

public class StopDebuggingRequest extends TeaModel {
    @NameInMap("SceneId")
    @Validation(required = true)
    public String sceneId;

    public static StopDebuggingRequest build(java.util.Map<String, ?> map) throws Exception {
        StopDebuggingRequest self = new StopDebuggingRequest();
        return TeaModel.build(map, self);
    }

}
