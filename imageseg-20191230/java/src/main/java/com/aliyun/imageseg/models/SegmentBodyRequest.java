// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.imageseg.models;

import com.aliyun.tea.*;

public class SegmentBodyRequest extends TeaModel {
    @NameInMap("ImageURL")
    @Validation(required = true)
    public String imageURL;

    public static SegmentBodyRequest build(java.util.Map<String, ?> map) throws Exception {
        SegmentBodyRequest self = new SegmentBodyRequest();
        return TeaModel.build(map, self);
    }

}
