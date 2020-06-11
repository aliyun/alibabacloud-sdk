// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Servicemesh20200111.Models
{
    public class DescribeReusableSlbResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("ReusableSlbList")]
        [Validation(Required=true)]
        public List<DescribeReusableSlbResponseReusableSlbList> ReusableSlbList { get; set; }
        public class DescribeReusableSlbResponseReusableSlbList : TeaModel {
            [NameInMap("LoadBalancerId")]
            [Validation(Required=true)]
            public string LoadBalancerId { get; set; }

            [NameInMap("LoadBalancerName")]
            [Validation(Required=true)]
            public string LoadBalancerName { get; set; }

        }

    }

}
