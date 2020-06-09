// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class DescribeRegionsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Regions")]
        [Validation(Required=true)]
        public DescribeRegionsResponseRegions Regions { get; set; }
        public class DescribeRegionsResponseRegions : TeaModel {
            [NameInMap("Region")]
            [Validation(Required=true)]
            public List<DescribeRegionsResponseRegionsRegion> Region { get; set; }
            public class DescribeRegionsResponseRegionsRegion : TeaModel {
                    public string RegionId { get; set; }
                    public DescribeRegionsResponseRegionsRegionZones Zones { get; set; }
                    public class DescribeRegionsResponseRegionsRegionZones : TeaModel {
                        [NameInMap("Zone")]
                        [Validation(Required=true)]
                        public List<DescribeRegionsResponseRegionsRegionZonesZone> Zone { get; set; }
                        public class DescribeRegionsResponseRegionsRegionZonesZone : TeaModel {
                            [NameInMap("ZoneId")]
                            [Validation(Required=true)]
                            public string ZoneId { get; set; }

                            [NameInMap("VpcEnabled")]
                            [Validation(Required=true)]
                            public bool? VpcEnabled { get; set; }

                        }

                    }
            }
        };

    }

}
