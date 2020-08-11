// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
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
                    public string LocalName { get; set; }
            }
        };

    }

}
