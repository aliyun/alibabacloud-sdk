// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Servicemesh20200111.Models
{
    public class DescribeGuestClusterAccessLogDashboardsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("K8sClusterId")]
        [Validation(Required=true)]
        public string K8sClusterId { get; set; }

        [NameInMap("Dashboards")]
        [Validation(Required=true)]
        public List<DescribeGuestClusterAccessLogDashboardsResponseDashboards> Dashboards { get; set; }
        public class DescribeGuestClusterAccessLogDashboardsResponseDashboards : TeaModel {
            [NameInMap("Title")]
            [Validation(Required=true)]
            public string Title { get; set; }

            [NameInMap("Url")]
            [Validation(Required=true)]
            public string Url { get; set; }

        }

    }

}
