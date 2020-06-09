// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.NAS20170626.Models
{
    public class DescribeZonesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Zones")]
        [Validation(Required=true)]
        public DescribeZonesResponseZones Zones { get; set; }
        public class DescribeZonesResponseZones : TeaModel {
            [NameInMap("Zone")]
            [Validation(Required=true)]
            public List<DescribeZonesResponseZonesZone> Zone { get; set; }
            public class DescribeZonesResponseZonesZone : TeaModel {
                    public string ZoneId { get; set; }
                    public DescribeZonesResponseZonesZoneCapacity Capacity { get; set; }
                    public class DescribeZonesResponseZonesZoneCapacity : TeaModel {
                        [NameInMap("Protocol")]
                        [Validation(Required=true)]
                        public List<string> Protocol { get; set; }

                    }
                    public DescribeZonesResponseZonesZonePerformance Performance { get; set; }
                    public class DescribeZonesResponseZonesZonePerformance : TeaModel {
                        [NameInMap("Protocol")]
                        [Validation(Required=true)]
                        public List<string> Protocol { get; set; }

                    }
            }
        };

    }

}
