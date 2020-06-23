// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ARMS20190808.Models
{
    public class ListDashboardsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DashboardVos")]
        [Validation(Required=true)]
        public List<ListDashboardsResponseDashboardVos> DashboardVos { get; set; }
        public class ListDashboardsResponseDashboardVos : TeaModel {
            [NameInMap("Id")]
            [Validation(Required=true)]
            public string Id { get; set; }

            [NameInMap("Uid")]
            [Validation(Required=true)]
            public string Uid { get; set; }

            [NameInMap("Title")]
            [Validation(Required=true)]
            public string Title { get; set; }

            [NameInMap("Time")]
            [Validation(Required=true)]
            public string Time { get; set; }

            [NameInMap("Url")]
            [Validation(Required=true)]
            public string Url { get; set; }

            [NameInMap("Type")]
            [Validation(Required=true)]
            public string Type { get; set; }

            [NameInMap("Exporter")]
            [Validation(Required=true)]
            public string Exporter { get; set; }

            [NameInMap("IsArmsExporter")]
            [Validation(Required=true)]
            public bool? IsArmsExporter { get; set; }

            [NameInMap("Tags")]
            [Validation(Required=true)]
            public List<string> Tags { get; set; }

        }

    }

}
