// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class PurchaseReservedInstancesOfferingResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("ReservedInstanceIdSets")]
        [Validation(Required=true)]
        public PurchaseReservedInstancesOfferingResponseReservedInstanceIdSets ReservedInstanceIdSets { get; set; }
        public class PurchaseReservedInstancesOfferingResponseReservedInstanceIdSets : TeaModel {
            [NameInMap("ReservedInstanceId")]
            [Validation(Required=true)]
            public List<string> ReservedInstanceId { get; set; }
        };

    }

}
