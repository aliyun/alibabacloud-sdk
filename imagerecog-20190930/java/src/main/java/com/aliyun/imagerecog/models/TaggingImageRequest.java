// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.imagerecog.models;

import com.aliyun.tea.*;

public class TaggingImageRequest extends TeaModel {
    @NameInMap("ImageType")
    public Integer imageType;

    @NameInMap("ImageURL")
    @Validation(required = true)
    public String imageURL;

    public static TaggingImageRequest build(java.util.Map<String, ?> map) throws Exception {
        TaggingImageRequest self = new TaggingImageRequest();
        return TeaModel.build(map, self);
    }

}
