// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.imageseg20191230.models;

import com.aliyun.tea.*;

public class SegmentHDBodyAdvanceRequest extends TeaModel {
    @NameInMap("ImageURLObject")
    @Validation(required = true)
    public java.io.InputStream imageURLObject;

    public static SegmentHDBodyAdvanceRequest build(java.util.Map<String, ?> map) throws Exception {
        SegmentHDBodyAdvanceRequest self = new SegmentHDBodyAdvanceRequest();
        return TeaModel.build(map, self);
    }

}
