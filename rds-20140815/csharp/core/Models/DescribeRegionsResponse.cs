// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeRegionsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Regions")]
        [Validation(Required=true)]
        public DescribeRegionsResponseRegions Regions { get; set; }
        public class DescribeRegionsResponseRegions : TeaModel {
            [NameInMap("RDSRegion")]
            [Validation(Required=true)]
            public List<DescribeRegionsResponseRegionsRDSRegion> RDSRegion { get; set; }
            public class DescribeRegionsResponseRegionsRDSRegion : TeaModel {
                    public string RegionId { get; set; }
                    public string ZoneId { get; set; }
            }
        };

    }

}
