// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class SwapFacialFeaturesRequest extends TeaModel {
    @NameInMap("SourceImageURL")
    @Validation(required = true)
    public String sourceImageURL;

    @NameInMap("EditPart")
    @Validation(required = true)
    public String editPart;

    @NameInMap("TargetImageURL")
    @Validation(required = true)
    public String targetImageURL;

    public static SwapFacialFeaturesRequest build(java.util.Map<String, ?> map) throws Exception {
        SwapFacialFeaturesRequest self = new SwapFacialFeaturesRequest();
        return TeaModel.build(map, self);
    }

}
