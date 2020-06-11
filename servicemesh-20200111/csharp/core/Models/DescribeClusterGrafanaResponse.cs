// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Servicemesh20200111.Models
{
    public class DescribeClusterGrafanaResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Dashboards")]
        [Validation(Required=true)]
        public List<DescribeClusterGrafanaResponseDashboards> Dashboards { get; set; }
        public class DescribeClusterGrafanaResponseDashboards : TeaModel {
            [NameInMap("Url")]
            [Validation(Required=true)]
            public string Url { get; set; }

            [NameInMap("Title")]
            [Validation(Required=true)]
            public string Title { get; set; }

        }

    }

}
