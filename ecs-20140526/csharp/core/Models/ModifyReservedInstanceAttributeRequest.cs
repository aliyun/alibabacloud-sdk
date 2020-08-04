// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class ModifyReservedInstanceAttributeRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ReservedInstanceId")]
        [Validation(Required=true)]
        public string ReservedInstanceId { get; set; }

        [NameInMap("ReservedInstanceName")]
        [Validation(Required=false)]
        public string ReservedInstanceName { get; set; }

        [NameInMap("Description")]
        [Validation(Required=false)]
        public string Description { get; set; }

    }

}
