// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeVRoutersResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("VRouters")]
        [Validation(Required=true)]
        public DescribeVRoutersResponseVRouters VRouters { get; set; }
        public class DescribeVRoutersResponseVRouters : TeaModel {
            [NameInMap("VRouter")]
            [Validation(Required=true)]
            public List<DescribeVRoutersResponseVRoutersVRouter> VRouter { get; set; }
            public class DescribeVRoutersResponseVRoutersVRouter : TeaModel {
                    public string RegionId { get; set; }
                    public string VpcId { get; set; }
                    public string VRouterName { get; set; }
                    public string Description { get; set; }
                    public string VRouterId { get; set; }
                    public string CreationTime { get; set; }
                    public DescribeVRoutersResponseVRoutersVRouterRouteTableIds RouteTableIds { get; set; }
                    public class DescribeVRoutersResponseVRoutersVRouterRouteTableIds : TeaModel {
                        [NameInMap("RouteTableId")]
                        [Validation(Required=true)]
                        public List<string> RouteTableId { get; set; }

                    }
            }
        };

    }

}
