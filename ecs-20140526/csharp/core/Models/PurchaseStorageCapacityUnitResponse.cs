// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class PurchaseStorageCapacityUnitResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("OrderId")]
        [Validation(Required=true)]
        public string OrderId { get; set; }

        [NameInMap("StorageCapacityUnitIds")]
        [Validation(Required=true)]
        public PurchaseStorageCapacityUnitResponseStorageCapacityUnitIds StorageCapacityUnitIds { get; set; }
        public class PurchaseStorageCapacityUnitResponseStorageCapacityUnitIds : TeaModel {
            [NameInMap("StorageCapacityUnitId")]
            [Validation(Required=true)]
            public List<string> StorageCapacityUnitId { get; set; }
        };

    }

}
