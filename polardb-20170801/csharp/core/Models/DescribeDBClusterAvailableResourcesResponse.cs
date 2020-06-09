// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class DescribeDBClusterAvailableResourcesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("AvailableZones")]
        [Validation(Required=true)]
        public List<DescribeDBClusterAvailableResourcesResponseAvailableZones> AvailableZones { get; set; }
        public class DescribeDBClusterAvailableResourcesResponseAvailableZones : TeaModel {
            [NameInMap("RegionId")]
            [Validation(Required=true)]
            public string RegionId { get; set; }

            [NameInMap("ZoneId")]
            [Validation(Required=true)]
            public string ZoneId { get; set; }

            [NameInMap("SupportedEngines")]
            [Validation(Required=true)]
            public List<DescribeDBClusterAvailableResourcesResponseAvailableZonesSupportedEngines> SupportedEngines { get; set; }
            public class DescribeDBClusterAvailableResourcesResponseAvailableZonesSupportedEngines : TeaModel {
                [NameInMap("Engine")]
                [Validation(Required=true)]
                public string Engine { get; set; }

                [NameInMap("AvailableResources")]
                [Validation(Required=true)]
                public List<DescribeDBClusterAvailableResourcesResponseAvailableZonesSupportedEnginesAvailableResources> AvailableResources { get; set; }
                public class DescribeDBClusterAvailableResourcesResponseAvailableZonesSupportedEnginesAvailableResources : TeaModel {
                    [NameInMap("DBNodeClass")]
                    [Validation(Required=true)]
                    public string DBNodeClass { get; set; }

                    [NameInMap("Category")]
                    [Validation(Required=true)]
                    public string Category { get; set; }

                }

            }

        }

    }

}
