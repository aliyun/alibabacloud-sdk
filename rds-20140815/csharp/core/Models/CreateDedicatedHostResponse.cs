// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class CreateDedicatedHostResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("OrderId")]
        [Validation(Required=true)]
        public long OrderId { get; set; }

        [NameInMap("DedicateHostList")]
        [Validation(Required=true)]
        public CreateDedicatedHostResponseDedicateHostList DedicateHostList { get; set; }
        public class CreateDedicatedHostResponseDedicateHostList : TeaModel {
            [NameInMap("DedicateHostList")]
            [Validation(Required=true)]
            public List<CreateDedicatedHostResponseDedicateHostListDedicateHostList> DedicateHostList { get; set; }
            public class CreateDedicatedHostResponseDedicateHostListDedicateHostList : TeaModel {
                    public string DedicatedHostId { get; set; }
            }
        };

    }

}
