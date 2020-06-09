// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeCollationTimeZonesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("CollationTimeZones")]
        [Validation(Required=true)]
        public DescribeCollationTimeZonesResponseCollationTimeZones CollationTimeZones { get; set; }
        public class DescribeCollationTimeZonesResponseCollationTimeZones : TeaModel {
            [NameInMap("CollationTimeZone")]
            [Validation(Required=true)]
            public List<DescribeCollationTimeZonesResponseCollationTimeZonesCollationTimeZone> CollationTimeZone { get; set; }
            public class DescribeCollationTimeZonesResponseCollationTimeZonesCollationTimeZone : TeaModel {
                    public string TimeZone { get; set; }
                    public string StandardTimeOffset { get; set; }
                    public string Description { get; set; }
            }
        };

    }

}
