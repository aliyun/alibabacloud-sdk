// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.pts20190810.models;

import com.aliyun.tea.*;

public class AdjustSceneSpeedRequest extends TeaModel {
    @NameInMap("SceneId")
    public String sceneId;

    @NameInMap("Speed")
    public Integer speed;

    public static AdjustSceneSpeedRequest build(java.util.Map<String, ?> map) throws Exception {
        AdjustSceneSpeedRequest self = new AdjustSceneSpeedRequest();
        return TeaModel.build(map, self);
    }

}
