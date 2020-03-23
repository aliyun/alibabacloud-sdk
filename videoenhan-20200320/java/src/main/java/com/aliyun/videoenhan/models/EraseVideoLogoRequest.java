// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.videoenhan.models;

import com.aliyun.tea.*;

public class EraseVideoLogoRequest extends TeaModel {
    @NameInMap("VideoUrl")
    public String videoUrl;

    @NameInMap("Boxes")
    public java.util.List<EraseVideoLogoRequestBoxes> boxes;

    public static EraseVideoLogoRequest build(java.util.Map<String, ?> map) throws Exception {
        EraseVideoLogoRequest self = new EraseVideoLogoRequest();
        return TeaModel.build(map, self);
    }

    public static class EraseVideoLogoRequestBoxes extends TeaModel {
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

        public static EraseVideoLogoRequestBoxes build(java.util.Map<String, ?> map) throws Exception {
            EraseVideoLogoRequestBoxes self = new EraseVideoLogoRequestBoxes();
            return TeaModel.build(map, self);
        }

    }

}
