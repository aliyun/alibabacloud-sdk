// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeCustomEventAttributeResponse : TeaModel {
        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public string Success { get; set; }

        [NameInMap("CustomEvents")]
        [Validation(Required=true)]
        public DescribeCustomEventAttributeResponseCustomEvents CustomEvents { get; set; }
        public class DescribeCustomEventAttributeResponseCustomEvents : TeaModel {
            [NameInMap("CustomEvent")]
            [Validation(Required=true)]
            public List<DescribeCustomEventAttributeResponseCustomEventsCustomEvent> CustomEvent { get; set; }
            public class DescribeCustomEventAttributeResponseCustomEventsCustomEvent : TeaModel {
                    public string Id { get; set; }
                    public string Content { get; set; }
                    public string GroupId { get; set; }
                    public string Name { get; set; }
                    public string Time { get; set; }
            }
        };

    }

}
