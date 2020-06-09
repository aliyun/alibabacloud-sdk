// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeSQLCollectorPolicyResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("SQLCollectorStatus")]
        [Validation(Required=true)]
        public string SQLCollectorStatus { get; set; }

        [NameInMap("StoragePeriod")]
        [Validation(Required=true)]
        public int? StoragePeriod { get; set; }

    }

}
