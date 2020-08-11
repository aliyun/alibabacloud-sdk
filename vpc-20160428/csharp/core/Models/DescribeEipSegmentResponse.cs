// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeEipSegmentResponse : TeaModel {
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

        [NameInMap("EipSegments")]
        [Validation(Required=true)]
        public DescribeEipSegmentResponseEipSegments EipSegments { get; set; }
        public class DescribeEipSegmentResponseEipSegments : TeaModel {
            [NameInMap("EipSegment")]
            [Validation(Required=true)]
            public List<DescribeEipSegmentResponseEipSegmentsEipSegment> EipSegment { get; set; }
            public class DescribeEipSegmentResponseEipSegmentsEipSegment : TeaModel {
                    public string InstanceId { get; set; }
                    public string Segment { get; set; }
                    public string Status { get; set; }
                    public string RegionId { get; set; }
                    public string IpCount { get; set; }
                    public string Name { get; set; }
                    public string Descritpion { get; set; }
                    public string CreationTime { get; set; }
            }
        };

    }

}
