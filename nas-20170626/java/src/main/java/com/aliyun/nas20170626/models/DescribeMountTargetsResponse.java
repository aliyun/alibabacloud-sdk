// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DescribeMountTargetsResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("TotalCount")
    @Validation(required = true)
    public Integer totalCount;

    @NameInMap("PageSize")
    @Validation(required = true)
    public Integer pageSize;

    @NameInMap("PageNumber")
    @Validation(required = true)
    public Integer pageNumber;

    @NameInMap("MountTargets")
    @Validation(required = true)
    public DescribeMountTargetsResponseMountTargets mountTargets;

    public static DescribeMountTargetsResponse build(java.util.Map<String, ?> map) throws Exception {
        DescribeMountTargetsResponse self = new DescribeMountTargetsResponse();
        return TeaModel.build(map, self);
    }

    public static class DescribeMountTargetsResponseMountTargetsMountTarget extends TeaModel {
        @NameInMap("MountTargetDomain")
        @Validation(required = true)
        public String mountTargetDomain;

        @NameInMap("NetworkType")
        @Validation(required = true)
        public String networkType;

        @NameInMap("VpcId")
        @Validation(required = true)
        public String vpcId;

        @NameInMap("VswId")
        @Validation(required = true)
        public String vswId;

        @NameInMap("AccessGroup")
        @Validation(required = true)
        public String accessGroup;

        @NameInMap("Status")
        @Validation(required = true)
        public String status;

        public static DescribeMountTargetsResponseMountTargetsMountTarget build(java.util.Map<String, ?> map) throws Exception {
            DescribeMountTargetsResponseMountTargetsMountTarget self = new DescribeMountTargetsResponseMountTargetsMountTarget();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeMountTargetsResponseMountTargets extends TeaModel {
        @NameInMap("MountTarget")
        @Validation(required = true)
        public java.util.List<DescribeMountTargetsResponseMountTargetsMountTarget> mountTarget;

        public static DescribeMountTargetsResponseMountTargets build(java.util.Map<String, ?> map) throws Exception {
            DescribeMountTargetsResponseMountTargets self = new DescribeMountTargetsResponseMountTargets();
            return TeaModel.build(map, self);
        }

    }

}
