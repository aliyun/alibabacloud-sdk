// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class SwapFacialFeaturesAdvanceRequest extends TeaModel {
    @NameInMap("SourceImageURLObject")
    @Validation(required = true)
    public java.io.InputStream sourceImageURLObject;

    @NameInMap("EditPart")
    @Validation(required = true)
    public String editPart;

    @NameInMap("TargetImageURL")
    @Validation(required = true)
    public String targetImageURL;

    public static SwapFacialFeaturesAdvanceRequest build(java.util.Map<String, ?> map) throws Exception {
        SwapFacialFeaturesAdvanceRequest self = new SwapFacialFeaturesAdvanceRequest();
        return TeaModel.build(map, self);
    }

}
