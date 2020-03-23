// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.videoenhan.models;

import com.aliyun.tea.*;

public class AdjustVideoColorAdvanceRequest extends TeaModel {
    @NameInMap("VideoUrlObject")
    @Validation(required = true)
    public java.io.InputStream videoUrlObject;

    @NameInMap("VideoBitrate")
    public String videoBitrate;

    @NameInMap("VideoCode")
    public String videoCode;

    @NameInMap("VideoFormat")
    public String videoFormat;

    @NameInMap("Mode")
    @Validation(required = true)
    public String mode;

    public static AdjustVideoColorAdvanceRequest build(java.util.Map<String, ?> map) throws Exception {
        AdjustVideoColorAdvanceRequest self = new AdjustVideoColorAdvanceRequest();
        return TeaModel.build(map, self);
    }

}
