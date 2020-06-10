// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeUnhealthyHostAvailabilityResponse : TeaModel {
        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("UnhealthyList")]
        [Validation(Required=true)]
        public DescribeUnhealthyHostAvailabilityResponseUnhealthyList UnhealthyList { get; set; }
        public class DescribeUnhealthyHostAvailabilityResponseUnhealthyList : TeaModel {
            [NameInMap("NodeTaskInstance")]
            [Validation(Required=true)]
            public List<DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstance> NodeTaskInstance { get; set; }
            public class DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstance : TeaModel {
                    public long Id { get; set; }
                    public DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstanceInstanceList InstanceList { get; set; }
                    public class DescribeUnhealthyHostAvailabilityResponseUnhealthyListNodeTaskInstanceInstanceList : TeaModel {
                        [NameInMap("String")]
                        [Validation(Required=true)]
                        public List<string> String { get; set; }

                    }
            }
        };

    }

}
