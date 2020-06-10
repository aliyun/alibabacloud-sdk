// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class PutCustomEventRequest : TeaModel {
        [NameInMap("EventInfo")]
        [Validation(Required=false)]
        public List<PutCustomEventRequestEventInfo> EventInfo { get; set; }
        public class PutCustomEventRequestEventInfo : TeaModel {
            [NameInMap("EventName")]
            [Validation(Required=true)]
            public string EventName { get; set; }

            [NameInMap("Content")]
            [Validation(Required=true)]
            public string Content { get; set; }

            [NameInMap("Time")]
            [Validation(Required=true)]
            public string Time { get; set; }

            [NameInMap("GroupId")]
            [Validation(Required=true)]
            public string GroupId { get; set; }

        }

    }

}
