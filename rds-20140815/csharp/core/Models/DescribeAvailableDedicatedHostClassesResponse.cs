// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeAvailableDedicatedHostClassesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("HostClasses")]
        [Validation(Required=true)]
        public DescribeAvailableDedicatedHostClassesResponseHostClasses HostClasses { get; set; }
        public class DescribeAvailableDedicatedHostClassesResponseHostClasses : TeaModel {
            [NameInMap("HostClasses")]
            [Validation(Required=true)]
            public List<DescribeAvailableDedicatedHostClassesResponseHostClassesHostClasses> HostClasses { get; set; }
            public class DescribeAvailableDedicatedHostClassesResponseHostClassesHostClasses : TeaModel {
                    public string HostClassName { get; set; }
                    public string Description { get; set; }
            }
        };

    }

}
