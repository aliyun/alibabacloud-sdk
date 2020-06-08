// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeAvailableDedicatedHostZonesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Zones")]
        [Validation(Required=true)]
        public DescribeAvailableDedicatedHostZonesResponseZones Zones { get; set; }
        public class DescribeAvailableDedicatedHostZonesResponseZones : TeaModel {
            [NameInMap("DedicatedHostZones")]
            [Validation(Required=true)]
            public List<DescribeAvailableDedicatedHostZonesResponseZonesDedicatedHostZones> DedicatedHostZones { get; set; }
            public class DescribeAvailableDedicatedHostZonesResponseZonesDedicatedHostZones : TeaModel {
                    public string ZoneId { get; set; }
                    public string Description { get; set; }
            }
        };

    }

}
