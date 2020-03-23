// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.videoenhan.models;

import com.aliyun.tea.*;

public class EraseVideoLogoAdvanceRequest extends TeaModel {
    @NameInMap("VideoUrlObject")
    @Validation(required = true)
    public java.io.InputStream videoUrlObject;

    @NameInMap("Boxes")
    public java.util.List<EraseVideoLogoAdvanceRequestBoxes> boxes;

    public static EraseVideoLogoAdvanceRequest build(java.util.Map<String, ?> map) throws Exception {
        EraseVideoLogoAdvanceRequest self = new EraseVideoLogoAdvanceRequest();
        return TeaModel.build(map, self);
    }

    public static class EraseVideoLogoAdvanceRequestBoxes extends TeaModel {
        @NameInMap("H")
        @Validation(required = true)
        public Double h;

        @NameInMap("W")
        @Validation(required = true)
        public Double w;

        @NameInMap("X")
        @Validation(required = true)
        public Double x;

        @NameInMap("Y")
        @Validation(required = true)
        public Double y;

        public static EraseVideoLogoAdvanceRequestBoxes build(java.util.Map<String, ?> map) throws Exception {
            EraseVideoLogoAdvanceRequestBoxes self = new EraseVideoLogoAdvanceRequestBoxes();
            return TeaModel.build(map, self);
        }

    }

}
