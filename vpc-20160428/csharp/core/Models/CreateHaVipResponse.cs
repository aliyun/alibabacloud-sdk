// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class CreateHaVipResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("HaVipId")]
        [Validation(Required=true)]
        public string HaVipId { get; set; }

        [NameInMap("IpAddress")]
        [Validation(Required=true)]
        public string IpAddress { get; set; }

    }

}
