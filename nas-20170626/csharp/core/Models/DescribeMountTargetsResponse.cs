// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.NAS20170626.Models
{
    public class DescribeMountTargetsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("MountTargets")]
        [Validation(Required=true)]
        public DescribeMountTargetsResponseMountTargets MountTargets { get; set; }
        public class DescribeMountTargetsResponseMountTargets : TeaModel {
            [NameInMap("MountTarget")]
            [Validation(Required=true)]
            public List<DescribeMountTargetsResponseMountTargetsMountTarget> MountTarget { get; set; }
            public class DescribeMountTargetsResponseMountTargetsMountTarget : TeaModel {
                    public string MountTargetDomain { get; set; }
                    public string NetworkType { get; set; }
                    public string VpcId { get; set; }
                    public string VswId { get; set; }
                    public string AccessGroup { get; set; }
                    public string Status { get; set; }
            }
        };

    }

}
