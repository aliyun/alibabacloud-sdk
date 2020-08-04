// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class ModifyDedicatedHostsChargeTypeResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("OrderId")]
        [Validation(Required=true)]
        public string OrderId { get; set; }

        [NameInMap("FeeOfInstances")]
        [Validation(Required=true)]
        public ModifyDedicatedHostsChargeTypeResponseFeeOfInstances FeeOfInstances { get; set; }
        public class ModifyDedicatedHostsChargeTypeResponseFeeOfInstances : TeaModel {
            [NameInMap("FeeOfInstance")]
            [Validation(Required=true)]
            public List<ModifyDedicatedHostsChargeTypeResponseFeeOfInstancesFeeOfInstance> FeeOfInstance { get; set; }
            public class ModifyDedicatedHostsChargeTypeResponseFeeOfInstancesFeeOfInstance : TeaModel {
                    public string InstanceId { get; set; }
                    public string Fee { get; set; }
                    public string Currency { get; set; }
            }
        };

    }

}
