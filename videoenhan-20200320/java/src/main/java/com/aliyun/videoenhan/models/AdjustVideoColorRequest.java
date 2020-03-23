// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.videoenhan.models;

import com.aliyun.tea.*;

public class AdjustVideoColorRequest extends TeaModel {
    @NameInMap("VideoUrl")
    @Validation(required = true)
    public String videoUrl;

    @NameInMap("VideoBitrate")
    public String videoBitrate;

    @NameInMap("VideoCode")
    public String videoCode;

    @NameInMap("VideoFormat")
    public String videoFormat;

    @NameInMap("Mode")
    @Validation(required = true)
    public String mode;

    public static AdjustVideoColorRequest build(java.util.Map<String, ?> map) throws Exception {
        AdjustVideoColorRequest self = new AdjustVideoColorRequest();
        return TeaModel.build(map, self);
    }

}
