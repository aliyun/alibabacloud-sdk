// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class SendDryRunSystemEventRequest : TeaModel {
        [NameInMap("Product")]
        [Validation(Required=true)]
        public string Product { get; set; }

        [NameInMap("EventName")]
        [Validation(Required=true)]
        public string EventName { get; set; }

        [NameInMap("GroupId")]
        [Validation(Required=false)]
        public string GroupId { get; set; }

        [NameInMap("EventContent")]
        [Validation(Required=false)]
        public string EventContent { get; set; }

    }

}
