// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class CreateSimulatedSystemEventsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("EventIdSet")]
        [Validation(Required=true)]
        public CreateSimulatedSystemEventsResponseEventIdSet EventIdSet { get; set; }
        public class CreateSimulatedSystemEventsResponseEventIdSet : TeaModel {
            [NameInMap("EventId")]
            [Validation(Required=true)]
            public List<string> EventId { get; set; }
        };

    }

}
